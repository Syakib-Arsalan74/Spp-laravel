<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::guest()) {
            return view('login');
        } else {
            return view('administrator.petugas');
        }
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8'
        ]);
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return view('/dashboard');
        } else {
            return redirect()->back()->with('status', 'Your Email or Password Is Invalid');
        }
    }

    public function Logout(Request $request)
    {
        Auth::Logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect()->route('viewLogin');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
