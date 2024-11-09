<?php
// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    
    public function showLoginForm()
    {
        return view('login');
    }

    public function dashboard()
    {
        
            // recuperer email admin
            $admin = DB::table('admins')->where('email', 'admintest@example.com')->first();
 
            return $admin->email;
        return view('dashboard' ,compact('admin'));
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