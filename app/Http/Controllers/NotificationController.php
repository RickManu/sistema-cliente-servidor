<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function send(Request $request){
        $request->validate(['message'=>'required']);
        // Aquí simplemente retornamos el mensaje para probar
        return response()->json(['success'=>true, 'message'=>$request->message]);
    }
}
