<?php

namespace App\Controllers\Backoffice;

class ProductController extends BaseController
{
    public function index()
    {
        return $this->view('products.index');
    }

    public function create()
    {
        return $this->view('products.create');
    }

    public function edit()
    {
        return $this->view('products.edit');
    }

    public function show()
    {
        return $this->view('products.show');
    }
}
