<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Models\DriverApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $driver = DriverApplication::find(session('driver_id'));
        
        return view('driver.dashboard', compact('driver'));
    }
    
    public function profile()
    {
        $driver = DriverApplication::find(session('driver_id'));
        
        return view('driver.profile', compact('driver'));
    }
    
    public function settings()
    {
        return view('driver.settings');
    }
    
    public function updateProfile(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|unique:driver_applications,email,' . session('driver_id'),
            'city' => 'required|string|max:255',
            'region' => 'required|string|max:255',
        ], [
            'first_name.required' => 'Le prénom est requis',
            'last_name.required' => 'Le nom est requis',
            'phone.required' => 'Le téléphone est requis',
            'email.email' => 'L\'email doit être valide',
            'email.unique' => 'Cet email est déjà utilisé',
            'city.required' => 'La ville est requise',
            'region.required' => 'La région est requise',
        ]);
        
        $driver = DriverApplication::find(session('driver_id'));
        
        $driver->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'city' => $request->city,
            'region' => $request->region,
        ]);
        
        return back()->with('success', 'Profil mis à jour avec succès');
    }
    
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ], [
            'current_password.required' => 'Le mot de passe actuel est requis',
            'new_password.required' => 'Le nouveau mot de passe est requis',
            'new_password.min' => 'Le mot de passe doit contenir au moins 8 caractères',
            'new_password.confirmed' => 'La confirmation du mot de passe ne correspond pas',
        ]);
        
        $driver = DriverApplication::find(session('driver_id'));
        
        if (!Hash::check($request->current_password, $driver->password)) {
            return back()->withErrors(['current_password' => 'Le mot de passe actuel est incorrect']);
        }
        
        $driver->password = Hash::make($request->new_password);
        $driver->save();
        
        return back()->with('success', 'Mot de passe mis à jour avec succès');
    }
}
