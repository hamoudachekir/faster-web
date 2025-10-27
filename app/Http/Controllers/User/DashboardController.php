<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('user.dashboard', compact('user'));
    }

    public function profile()
    {
        $user = auth()->user();
        return view('user.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $user->update($validated);

        return back()->with('success', 'Profil mis à jour avec succès!');
    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if (!\Hash::check($validated['current_password'], auth()->user()->password)) {
            return back()->withErrors(['current_password' => 'Le mot de passe actuel est incorrect.']);
        }

        auth()->user()->update([
            'password' => \Hash::make($validated['password']),
        ]);

        return back()->with('success', 'Mot de passe modifié avec succès!');
    }

    public function notifications()
    {
        $user = auth()->user();
        return view('user.notifications', compact('user'));
    }

    public function wallet()
    {
        $user = auth()->user();
        return view('user.wallet', compact('user'));
    }

    public function orders()
    {
        $user = auth()->user();
        return view('user.orders', compact('user'));
    }

    public function promos()
    {
        $user = auth()->user();
        return view('user.promos', compact('user'));
    }

    public function settings()
    {
        $user = auth()->user();
        return view('user.settings', compact('user'));
    }

    public function feedback()
    {
        $user = auth()->user();
        $feedbacks = $user->feedback()->latest()->get();
        return view('user.feedback', compact('user', 'feedbacks'));
    }

    public function storeFeedback(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'category' => 'required|string',
            'message' => 'required|string|max:2000',
        ]);

        auth()->user()->feedback()->create([
            'rating' => $request->rating,
            'category' => $request->category,
            'message' => $request->message,
            'status' => 'new',
        ]);

        return redirect()->route('user.feedback')->with('success', 'Merci pour votre commentaire !');
    }
}
