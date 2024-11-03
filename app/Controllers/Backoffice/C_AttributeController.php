<?php

namespace App\Controllers\Backoffice;

class AttributeController extends BaseController
{
    public function index()
    {
        return $this->view('attributes.index');
    }

    public function create()
    {
        return $this->view('attributes.create');
    }
    public function edit()
    {
        return $this->view('attributes.edit');
    }
}