<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secret;
use Exception;
use DateTime;

class SecretController extends Controller
{
    public function index(Request $request){
        try{
            $secret = new Secret();

            $secret->hash = $this->generateRandomHash();
            $secret->secretText = $request->get('secretText');
            $secret->createdAt = date("Y-m-d H:i:s");
            $secret->expiresAt = $this->getExpires($request->get('expireAfter'));
            $secret->remainingViews = $request->get('expireAfterViews');
            $secret->save();

            return response()->json(['description' => 'Successful operation'], 200);

        } catch(Exception $e) {
            return response()->json([
                'description' => 'Invalid input',
                'error' => $e,
            ], 200);
        }
    }

    public function show($hash){
        $secret = Secret::find($hash);

        if(is_null($secret)) {
            return response()->json(['description' => 'Secret not found'], 404);
        } 

        return response()->json(Secret::find($hash), 200);
    }

    private function getExpires($minutes) {
        $dateTime = new DateTime();
        $dateTime->format("Y-m-d H:i:s");
        $dateTime->modify("+{$minutes} minutes");

        return $dateTime;
    }

    private function generateRandomHash($length = 6) {

        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $hash = '';

        for ($i = 0; $i < $length; $i++) {
            $hash .= $characters[rand(0, $charactersLength - 1)];
        }

        if($this->isExisted($hash)) {
            $this->generateRandomHash();
        } else {
            return $hash;
        }
    }

    private function isExisted($hash) {
       $secret = Secret::find($hash);

       if(is_null($secret)) {
           return False;
       } else {
           return True;
       }
    }
}
