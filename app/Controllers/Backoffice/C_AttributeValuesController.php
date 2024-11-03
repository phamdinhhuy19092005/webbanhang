<?php

namespace App\Controllers\Backoffice;

class AttributeValuesController extends BaseController
{
    public function index()
    {
        return $this->view('attribute-values.index');
    }
    public function create()
    {
        return $this->view('attribute-values.create');
    }

    public function edit()
    {
        return $this->view('attribute-values.edit');
    }
   
}