<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Logins/adminLogin_v.php');
    }
    public function adminHome(): string
    {
        return view('Admin/main_v.php');
    }
}
