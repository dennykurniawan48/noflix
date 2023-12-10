<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class Login extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "email" => "email|required",
            "password" => "required"
        ]);

        $user = User::where('email', '=', $data['email'])->first();
        if(!$user){
            return response()->json(["error" => "email not registered"], Response::HTTP_NOT_FOUND);
        }

        $correctPassword = Hash::check($data['password'], $user->password);

        if(!$correctPassword){
            return response()->json(["error" => "Invalid password."], Response::HTTP_UNAUTHORIZED);
        }

        $token = $user->createtoken('mobile')->plainTextToken;

        return response()->json(['data' => ["user" => $user, "token" => $token]], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
