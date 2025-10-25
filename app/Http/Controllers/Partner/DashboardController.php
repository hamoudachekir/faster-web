<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\PartnerApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $partner = PartnerApplication::find(session('partner_id'));
        
        return view('partner.dashboard', compact('partner'));
    }
    
    public function profile()
    {
        $partner = PartnerApplication::find(session('partner_id'));
        
        return view('partner.profile', compact('partner'));
    }
    
    public function settings()
    {
        return view('partner.settings');
    }
    
    public function updateProfile(Request $request)
    {
        $partnerId = session('partner_id');
        
        $request->validate([
            'business_name' => 'required|string|max:255',
            'contact_name' => 'required|string|max:255',
            'email' => 'required|email|unique:partner_applications,email,' . $partnerId,
            'phone' => 'required|string|max:20',
            'city' => 'required|string|max:100',
            'address' => 'required|string|max:500',
        ], [
            'business_name.required' => 'Le nom de l\'entreprise est requis',
            'contact_name.required' => 'Le nom du contact est requis',
            'email.required' => 'L\'adresse email est requise',
            'email.email' => 'L\'adresse email doit être valide',
            'email.unique' => 'Cette adresse email est déjà utilisée',
            'phone.required' => 'Le numéro de téléphone est requis',
            'city.required' => 'La ville est requise',
            'address.required' => 'L\'adresse est requise',
        ]);
        
        $partner = PartnerApplication::find($partnerId);
        
        $partner->update([
            'business_name' => $request->business_name,
            'contact_name' => $request->contact_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            'address' => $request->address,
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
        
        $partner = PartnerApplication::find(session('partner_id'));
        
        if (!Hash::check($request->current_password, $partner->password)) {
            return back()->withErrors(['current_password' => 'Le mot de passe actuel est incorrect']);
        }
        
        $partner->password = Hash::make($request->new_password);
        $partner->save();
        
        return back()->with('success', 'Mot de passe mis à jour avec succès');
    }
}
