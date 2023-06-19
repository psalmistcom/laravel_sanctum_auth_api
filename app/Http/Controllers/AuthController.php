<?php

namespace App\Http\Controllers;

use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use HttpResponses;

    public function login()
    {
        return response()->json('This is the login method');
    }

    public function register()
    {
        return response()->json('This is the register method');
    }

    public function logout()
    {
        return response()->json('This is the logout method');
    }
}
