<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercadoPago\SDK; // Asegúrate de incluir esto
use MercadoPago\Preference;
use MercadoPago\Item;

class DonationController extends Controller
{
    public function donate(Request $request)
    {
        // Configurar Mercado Pago
        SDK::setAccessToken(env('MERCADO_PAGO_ACCESS_TOKEN'));

        // Crear preferencia
        $preference = new Preference();
        
        // Datos de la donación
        $item = new Item();
        $item->title = 'Donación';
        $item->quantity = 1;
        $item->unit_price = (float)$request->input('amount');
        $preference->items = array($item);

        // Guardar la preferencia
        $preference->save();

        return response()->json(['init_point' => $preference->init_point]);
    }
}



