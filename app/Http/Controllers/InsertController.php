<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\alert;

class InsertController extends Controller
{
    public function insert(Request $request, User $user)
    {
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');

        if (!empty($request->username) && !empty($request->email) && !empty($request->password)) {
            DB::table('users')->insert([
                'username' => $username,
                'email' => $email,
                'password' => md5($password)
            ]);
        }


        return redirect('http://127.0.0.1:8000/painel');
    }
}
