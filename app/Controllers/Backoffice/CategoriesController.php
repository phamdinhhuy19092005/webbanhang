<?php

namespace App\Controllers\Backoffice;

class CategoriesController extends BaseController
{
    public function index()
    {
        return $this->view('categories.index');
    }

    public function create()
    {
        return $this->view('categories.create');
    }

    public function edit()
    {
        return $this->view('categories.edit');
    }

    public function show()
    {
        return $this->view('categories.show');
    }

}