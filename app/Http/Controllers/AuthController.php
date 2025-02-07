<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin()
    {
        $user = auth()->user();
        return view('auth.login');
    }

    public function showSignup()
    {
        return view('auth.signup');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'Patient',
            'status' => 0,
            'password' => Hash::make($request->password),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('login')->with('success', 'Account created successfully! Please login.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = DB::table('users')->where('email', $request->email)->first();
        $doctor = DB::table('doctors')->where('email', $request->email)->first();
        
        if ($user && Hash::check($request->password, $user->password)) {
            // If credentials are in the 'users' table and user is found
            Session::put('user', $user);
        
            // Check role and redirect accordingly
            if ($user->role == 'Admin') {
                return redirect()->route('dashboard'); // Redirect to admin dashboard
            } elseif ($user->role == 'Patient') {
                return redirect()->route('patient.index'); // Redirect to patient index
            }
        } elseif ($doctor && Hash::check($request->password, $doctor->password)) {
            // If credentials are in the 'doctors' table and doctor is found
            Session::put('user', $doctor);
        
            // Check if the doctor has any role you want to route to
            // You can also define logic for doctor role, if required.
            return redirect()->route('doctor.index'); // Redirect to doctor's dashboard or appropriate page
        } else {
            // If no matching credentials found in either table
            return back()->withErrors(['email' => 'Invalid credentials.']);
        }
        
    }

    public function logout()
    {
        Session::forget('user');
        return redirect()->route('login');
    }
}
