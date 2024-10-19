<?php

namespace App\Services\Contracts;

interface SubscriptionsServiceInterface
{
    public function getAllSubs();
    public function getSubById($id);
    public function createSub(array $data);
    public function updateSub($id, array $data);
    public function deleteSub($id);
}