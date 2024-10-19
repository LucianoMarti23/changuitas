<?php

namespace App\Services\Contracts;




use Illuminate\Http\Request;

interface JobCategoryServiceInterface {

    public function allCategories ();

   public function storeCategory(Request $request);

   public function editCategory($id);

   public function destroyCategory($id);

   public function updateCategory(Request $request , $id);
    
}