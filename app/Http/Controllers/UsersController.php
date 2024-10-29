<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function addUser()
    {
        return view('theme/users/addUser');
    }
    
    public function usersGrid()
    {
        return view('theme/users/usersGrid');
    }

    public function usersList()
    {
        return view('theme/users/usersList');
    }
    
    public function viewProfile()
    {
        return view('theme/users/viewProfile');
    }
}
