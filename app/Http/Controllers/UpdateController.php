<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function update(Request $request, User $user)
    {
        $user->username = $request->username;
        $user->email = $request->email;

       $user->save();

        return redirect('http://127.0.0.1:8000/painel');
    }
}
