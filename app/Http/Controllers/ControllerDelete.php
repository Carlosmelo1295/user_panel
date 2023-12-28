<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ControllerDelete extends Controller
{
    public function delete($id)
    {
        DB::table('users')
            ->where('id', $id)->delete();
        return redirect('http://127.0.0.1:8000/painel');
    }
}
