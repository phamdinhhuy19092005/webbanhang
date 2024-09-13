<?php 

namespace App\Controllers\Frontend;

class ProductController extends BaseController
{
    public function index()
    {
        return $this->view('products.index');
    }
}