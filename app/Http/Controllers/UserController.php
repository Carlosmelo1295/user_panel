<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getUsers()
    {
        $user = DB::table('users')->get();
        return view('users', ['users' => $user]);
    }}
