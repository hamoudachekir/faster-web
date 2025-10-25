<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DriverApplication;
use App\Models\PartnerApplication;
use App\Models\ContactSubmission;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showLogin()
    {
        if (session('admin_authenticated')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'password' => 'required|string',
        ]);

        // Simple password (change this to your secure password)
        if ($request->password === 'admin123') {
            session(['admin_authenticated' => true]);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['password' => 'Mot de passe incorrect']);
    }

    public function logout()
    {
        session()->forget('admin_authenticated');
        return redirect()->route('admin.login');
    }

    public function index()
    {
        $stats = [
            'pending_drivers' => DriverApplication::where('status', 'pending')->count(),
            'approved_drivers' => DriverApplication::where('status', 'approved')->count(),
            'pending_partners' => PartnerApplication::where('status', 'pending')->count(),
            'approved_partners' => PartnerApplication::where('status', 'approved')->count(),
            'unread_contacts' => ContactSubmission::where('status', 'new')->count(),
            'total_contacts' => ContactSubmission::count(),
            'total_users' => User::count(),
            'active_users' => User::where('is_active', true)->count(),
        ];

        $recent_drivers = DriverApplication::latest()->take(5)->get();
        $recent_partners = PartnerApplication::latest()->take(5)->get();
        $recent_contacts = ContactSubmission::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recent_drivers', 'recent_partners', 'recent_contacts'));
    }
}
