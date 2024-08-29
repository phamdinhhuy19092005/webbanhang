<?php 

namespace App\Controllers\Frontend;

class LoginController extends BaseController
{
    public function index()
    {
        return $this->view('login.index');
    }
}