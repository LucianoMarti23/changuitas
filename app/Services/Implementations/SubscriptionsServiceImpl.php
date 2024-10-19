<?php

namespace App\Services\Implementations;

use App\Services\Contracts\SubscriptionsServiceInterface;


use App\Models\Subscription;


class SubscriptionsServiceImpl implements SubscriptionsServiceInterface{


    public function getAllSubs()
    {
        return Subscription::all();
    }

    public function getSubById($id)
    {
        return Subscription::findOrFail($id);
    }

    public function createSub(array $data)
    {
        return Subscription::create($data);
    }

   
    public function updateSub($id, array $data)
    {
        // Encuentra la suscripción por su ID o lanza una excepción si no se encuentra.
        $sub = Subscription::findOrFail($id);
        
        // Actualiza la suscripción con los datos proporcionados.
        $sub->update($data);
        
        // Retorna la suscripción actualizada.
        return $sub;
    }
    
   
    public function deleteSub($id){

        $sub = Subscription::findOrFail($id);
        $sub->delete();
        return $sub;

    }

}

