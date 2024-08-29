<?php 

namespace App\Controllers\Frontend;

class ProductDetailsController extends BaseController
{
    public function index()
    {
        return $this->view('product-details.index');
    }
}