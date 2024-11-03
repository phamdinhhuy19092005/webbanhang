<?php

namespace App\Controllers\Backoffice;

class CategoriesGroupController extends BaseController
{
    public function index()
    {
        return $this->view('categories_group.index');
    }
    public function create()
    {
        return $this->view('categories_group.create');
    }

    public function edit()
    {
        return $this->view('categories_group.edit');
    }

}