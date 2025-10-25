<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\PartnerApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PartnerAuthController extends Controller
{
    public function showLogin()
    {
        if (session('partner_id')) {
            return redirect()->route('partner.dashboard');
        }
        return view('auth.partner-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $partner = PartnerApplication::where('email', $request->email)
            ->where('status', 'approved')
            ->first();

        if (!$partner || !$partner->password || !Hash::check($request->password, $partner->password)) {
            return back()->withErrors(['email' => 'Identifiants incorrects ou compte non activé'])->withInput();
        }

        // Update last login
        $partner->update(['last_login_at' => now()]);

        // Set session
        session([
            'partner_id' => $partner->id,
            'partner_name' => $partner->contact_name,
            'partner_business' => $partner->business_name,
            'partner_email' => $partner->email,
        ]);

        return redirect()->route('partner.dashboard');
    }

    public function logout()
    {
        session()->forget(['partner_id', 'partner_name', 'partner_business', 'partner_email']);
        return redirect()->route('partner.login')->with('success', 'Déconnexion réussie');
    }
}
