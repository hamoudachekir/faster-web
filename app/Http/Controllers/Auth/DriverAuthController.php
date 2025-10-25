<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\DriverApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DriverAuthController extends Controller
{
    public function showLogin()
    {
        if (session('driver_id')) {
            return redirect()->route('driver.dashboard');
        }
        return view('auth.driver-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $driver = DriverApplication::where('email', $request->email)
            ->where('status', 'approved')
            ->first();

        if (!$driver || !$driver->password || !Hash::check($request->password, $driver->password)) {
            return back()->withErrors(['email' => 'Identifiants incorrects ou compte non activé'])->withInput();
        }

        // Update last login
        $driver->update(['last_login_at' => now()]);

        // Set session
        session([
            'driver_id' => $driver->id,
            'driver_name' => $driver->first_name . ' ' . $driver->last_name,
            'driver_email' => $driver->email,
        ]);

        return redirect()->route('driver.dashboard');
    }

    public function logout()
    {
        session()->forget(['driver_id', 'driver_name', 'driver_email']);
        return redirect()->route('driver.login')->with('success', 'Déconnexion réussie');
    }
}
