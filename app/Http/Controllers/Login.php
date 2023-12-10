<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Login extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->check()){
            return redirect('/');
        }
        return view('auth/login');
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
        $logindata = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if(auth()->attempt($logindata, true)){
            return redirect('/');
        }
        
        return back()->withErrors([
            'credentials' => 'Username / Password is wrong.',
        ])->onlyInput('email');
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

    public function logout(){
        if(auth()->check()){
            auth()->logout();
        }
        return redirect()->route('login.index');
    }
}
