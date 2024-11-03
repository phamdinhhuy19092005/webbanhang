<?php

namespace App\Controllers\Backoffice;

class InventoriesController extends BaseController
{
    public function index()
    {
        return $this->view('inventories.index');
    }

    public function create()
    {
        return $this->view('inventories.create');
    }

    public function edit()
    {
        return $this->view('inventories.edit');
    }

    public function show()
    {
        return $this->view('inventories.show');
    }
}