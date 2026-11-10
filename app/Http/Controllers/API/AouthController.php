<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AouthController extends Controller
{
    public function register(Request $request){
         $validator =Validator::make($request->all(),[
            'name'=>'required|string|max:255',
            'email'=>'required|string|email|unique:users',
            'password'=>'required|string|min:8|'

        ]);    
        if($validator->fails()){
            return response()->json(['message' => $validator->errors()],400);
        }
       $user= User ::create($request->all());
       $token =$user->createToken('aouth_token')->plainTextToken; 
       return response()->json(['message'=>'register successfully','user' =>$user,'token'=>$token,201]);
    }
}
