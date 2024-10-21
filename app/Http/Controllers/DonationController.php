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
        $request->validate([
            'amount' => 'required|numeric|min:0',
        ]);

        SDK::setAccessToken(env('MERCADO_PAGO_ACCESS_TOKEN'));

        $preference = new Preference();
        $item = new Item();
        $item->title = 'Donación';
        $item->quantity = 1;
        $item->unit_price = (float)$request->input('amount');
        $preference->items = array($item);

        $preference->save();

        return redirect($preference->init_point);
    }
}



