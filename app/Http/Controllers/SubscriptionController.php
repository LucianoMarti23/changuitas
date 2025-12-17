<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Services\Contracts\AuthServiceInterface;
use App\Services\Contracts\SubscriptionsServiceInterface;
use Illuminate\Http\Request;
use MercadoPago\SDK;
use MercadoPago\Preference;
use MercadoPago\Item;

class SubscriptionController extends Controller
{
    protected $subService;
    protected AuthServiceInterface $authUser;

    public function __construct(SubscriptionsServiceInterface $subService, AuthServiceInterface $authUser)
    {
        $this->subService = $subService;
        $this->authUser = $authUser;
    }

    // ADMIN: Listar todas las suscripciones
    public function index()
    {
        $this->authUser->checkadmin();
        $subs = $this->subService->getAllSubs();
        return view('admin.subscriptions.index', compact('subs'));
    }

    // USUARIO: Listar planes disponibles
    public function indexUser()
    {
        $subs = $this->subService->getAllSubs();
        return view('subcription.paid-service', compact('subs'));
    }

    // Mostrar página de pago para una suscripción específica
    public function showPaymentGateway($id)
    {
        $sub = $this->subService->getSubById($id);
        return view('subcription.payment-gateway', compact('sub'));
    }

    // Procesar el pago de la suscripción con Mercado Pago
    public function processPayment(Request $request)
    {
        $request->validate([
        'subscription_id' => 'required|exists:subscriptions,id',
        ]);

        $sub = $this->subService->getSubById($request->subscription_id);
        
        // Configurar Mercado Pago
        \MercadoPago\SDK::setAccessToken(env('MERCADO_PAGO_ACCESS_TOKEN'));
        
        $preference = new \MercadoPago\Preference();
        $item = new \MercadoPago\Item();
        $item->title = $sub->name;
        $item->quantity = 1;
        $item->unit_price = (float)$sub->price; // importante casteo a float
        $preference->items = [$item];
        
        $preference->save();
        
        // Redirigir al init_point (igual que en donaciones)
        return redirect($preference->init_point);
    }

    // ELIMINAR suscripción
    public function destroy(Subscription $subscription)
    {
        $this->authUser->checkadmin();

        if ($subscription->image && file_exists(public_path('images/subscriptions/' . $subscription->image))) {
            unlink(public_path('images/subscriptions/' . $subscription->image));
        }

        $result = $this->subService->deleteSub($subscription->id);

        return redirect()->route('admin.subscriptions')->with('success', $result['message']);
    }

    // CREAR suscripción
    public function create()
    {
        $this->authUser->checkadmin();
        return view('admin.subscriptions.create');
    }

    // EDITAR suscripción
    public function edit($id)
    {
        $this->authUser->checkadmin();
        $sub = $this->subService->getSubById($id);
        return view('admin.subscriptions.edit', compact('sub'));
    }

    // GUARDAR nueva suscripción
    public function store(Request $request)
    {
        $this->authUser->checkadmin();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/subscriptions'), $imageName);
            $validatedData['image'] = $imageName;
        }

        $this->subService->createSub($validatedData);

        return redirect()->route('admin.subscriptions')->with('success', 'Suscripción creada exitosamente.');
    }

    // ACTUALIZAR suscripción
    public function update(Request $request, $id)
    {
        $this->authUser->checkadmin();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $subscription = $this->subService->getSubById($id);

        if ($request->hasFile('image')) {
            if ($subscription->image && file_exists(public_path('images/subscriptions/' . $subscription->image))) {
                unlink(public_path('images/subscriptions/' . $subscription->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/subscriptions'), $imageName);
            $validatedData['image'] = $imageName;
        }

        $this->subService->updateSub($id, $validatedData);

        return redirect()->route('admin.subscriptions')->with('success', 'Suscripción actualizada exitosamente.');
    }
}
