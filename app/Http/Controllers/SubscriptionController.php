<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Services\Contracts\AuthServiceInterface;
use App\Services\Contracts\SubscriptionsServiceInterface;
use Illuminate\Http\Request;




class SubscriptionController extends Controller
{
    protected $subService;
    protected AuthServiceInterface $authUser;

    public function __construct(SubscriptionsServiceInterface $subService, AuthServiceInterface $authUser)
    {
        $this->subService = $subService;
        $this->authUser = $authUser;
    }

    public function index()
    {
        $this->authUser->checkadmin();

        $subs = $this->subService->getAllSubs();
        return view('admin.subscriptions.index', compact('subs'));
    }





    public function indexUser(){

        $subs = $this->subService->getAllSubs();
        return view('subcription.paid-service' , compact('subs'));
    }
    public function destroy(Subscription $subscription)
    {
        $this->authUser->checkadmin(); // Verificación de rol
    
        // Eliminar la imagen asociada si existe
        if ($subscription->image && file_exists(public_path('images/subscriptions/' . $subscription->image))) {
            unlink(public_path('images/subscriptions/' . $subscription->image));
        }
    
        $result = $this->subService->deleteSub($subscription->id);
    
        return redirect()->route('admin.subscriptions')->with('success', $result['message']);
    }
    


    public function create()
    {
        $this->authUser->checkadmin();
        return view('admin.subscriptions.create');
    }

    public function edit($id)
{
    $this->authUser->checkadmin();

    $sub = $this->subService->getSubById($id);
    return view('admin.subscriptions.edit', compact('sub'));
}

public function store(Request $request)
{
    $this->authUser->checkadmin();

    // Validar los datos y la imagen
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'description' => 'nullable|string|max:1000',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación de imagen
    ]);

    // Manejar la carga de la imagen
    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();  
        $request->image->move(public_path('images/subscriptions'), $imageName);
        $validatedData['image'] = $imageName;
    }

    $this->subService->createSub($validatedData);

    return redirect()->route('admin.subscriptions')->with('success', 'Suscripción creada exitosamente.');
}


public function update(Request $request, $id)
{
    $this->authUser->checkadmin();

    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'description' => 'nullable|string|max:1000',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación de imagen
    ]);

    // Obtener la suscripción actual
    $subscription = $this->subService->getSubById($id);

    // Manejar la carga de la imagen
    if ($request->hasFile('image')) {
        // Eliminar la imagen anterior si existe
        if ($subscription->image && file_exists(public_path('images/subscriptions/' . $subscription->image))) {
            unlink(public_path('images/subscriptions/' . $subscription->image));
        }

        // Guardar la nueva imagen
        $imageName = time() . '.' . $request->image->extension();  
        $request->image->move(public_path('images/subscriptions'), $imageName);
        $validatedData['image'] = $imageName;
    }

    $this->subService->updateSub($id, $validatedData);

    return redirect()->route('admin.subscriptions')->with('success', 'Suscripción actualizada exitosamente.');
}



}
