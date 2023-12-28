<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetSingleUserController extends Controller
{
    public function getUser(User $user, Request $request)
    {
         $request->username = $user->username;
         $request->email = $user->email;


        return view('editUser', ['user' => $user]);

    }}
