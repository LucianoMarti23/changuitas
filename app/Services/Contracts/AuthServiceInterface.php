<?php

namespace App\Services\Contracts;


interface AuthServiceInterface{



    public function checkadmin();
    public function getAuthenticatedUser();

}