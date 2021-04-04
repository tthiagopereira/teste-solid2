<?php

namespace App\Http\Controllers\Validade;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ValidateUser extends Controller
{
    public function validar(Request $request, $id = null)
    {
        if($id) {
            $v = \Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
                'telefone' => 'required'
            ]);
        }else{
            $v = \Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|unique:users',
                'telefone' => 'required'
            ]);
        }
        return $v;
    }
}
