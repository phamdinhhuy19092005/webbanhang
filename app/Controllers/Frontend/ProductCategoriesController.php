<?php 

namespace App\Controllers\Frontend;

class ProductCategoryController extends BaseController
{
    public function index()
    {
        return $this->view('product-categories.index');
    }
}