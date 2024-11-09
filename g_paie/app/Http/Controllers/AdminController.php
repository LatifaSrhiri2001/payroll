<?php
// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    
    public function showLoginForm()
    {
        return view('login');
    }

    public function dashboard()
    {
        
       
      
         
        
        return view('dashboard');
    }
   

    public function login(Request $request)
    {
       

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if ($admin && password_verify($request->password, $admin->password)) {
            Auth::login($admin);
         

            return redirect()->route('admin.dashboard'); 
        }

        

        return back()->withErrors(['email' => 'Invalides informations']);
    }

  
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login'); 
    }
}