<?php

namespace App\Controllers\Backoffice;

class CollectionController extends BaseController
{
    public function index()
    {
        return $this->view('collections.index');
    }

    public function create()
    {
        return $this->view('collections.create');
    }

    public function edit()
    {
        return $this->view('collections.edit');
    }

}