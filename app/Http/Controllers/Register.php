<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->check()){
            return redirect('/');
        }
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registerData = $request->validate([
            "name" => "required|min:3",
            "email" => "required|email",
            "password" => "required|min:6"
        ]);

        $exist = User::where('email', '=', $registerData['email'])->first();

        if($exist){
            return back()->withErrors(['email' => 'Email registered'])->onlyInput(
                'name' ,'email'
            );
        }

        $user = new User();
        $user->name = $registerData['name'];
        $user->email = $registerData['email'];
        $user->password = Hash::make($registerData['password']);
        $user->save();

        return redirect(route('login.index'))->with('success', 'User created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
