<?php

namespace App\Controllers\Backoffice;

class UserController extends BaseController
{
    public function index()
    {
        return $this->view('users.index');
    }

    public function create()
    {
        return $this->view('users.create');
    }

    public function edit()
    {
        return $this->view('users.edit');
    }

    public function show()
    {
        return $this->view('users.show');
    }
}

   
