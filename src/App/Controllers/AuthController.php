<?php

namespace App\Controllers;

class AuthController
{
    public function register($request)
    {
        // Registration logic goes here
        return 'User registered successfully';
    }

    public function login($request)
    {
        // Authentication logic goes here
        return 'User logged in successfully';
    }

    public function logout()
    {
        // Logout logic goes here
        return 'User logged out successfully';
    }
}