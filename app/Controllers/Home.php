<?php

namespace App\Controllers;
use App\Models\Userauth;

class Home extends BaseController
{
    public function index()
    {

        $userauth = new Userauth();

        // view('welcome_message');

        $users = $userauth->findall();
        var_dump($users);
    }
}
