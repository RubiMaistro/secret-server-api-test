<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secret;
use Exception;

class SecretController extends Controller
{
    public function post(Secret $secret){
        
    }

    public function show($hash){
        $secret = Secret::find($hash);

        if(is_null($secret)) {
            return response()->json(['description' => 'Secret not found'], 404);
        } 

        return response()->json(Secret::find($hash), 200);
    }
}
