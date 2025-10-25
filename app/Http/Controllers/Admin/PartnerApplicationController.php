<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PartnerApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PartnerApplicationController extends Controller
{
    public function index()
    {
        $applications = PartnerApplication::latest()->paginate(20);
        return view('admin.partners.index', compact('applications'));
    }

    public function show($id)
    {
        $application = PartnerApplication::findOrFail($id);
        return view('admin.partners.show', compact('application'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
            'notes' => 'nullable|string',
        ]);

        $application = PartnerApplication::findOrFail($id);
        
        // Generate password if approving for the first time
        if ($request->status === 'approved' && !$application->password) {
            $plainPassword = Str::random(10); // Generate 10 character random password
            $application->password = Hash::make($plainPassword);
            $application->approved_at = now();
            
            // Store plain password temporarily in session to display to admin
            session()->flash('generated_password', $plainPassword);
            session()->flash('user_email', $application->email);
            session()->flash('user_phone', $application->phone);
            session()->flash('user_name', $application->contact_name);
            
            // TODO: Send email/SMS with credentials
            // You can add email/SMS sending here later
        }
        
        $application->update([
            'status' => $request->status,
            'admin_notes' => $request->notes,
        ]);

        return back()->with('success', 'Statut mis à jour avec succès');
    }

    public function regeneratePassword($id)
    {
        $application = PartnerApplication::findOrFail($id);
        
        // Generate new password
        $plainPassword = Str::random(10);
        $application->password = Hash::make($plainPassword);
        $application->save();
        
        // Store plain password temporarily in session to display to admin
        session()->flash('generated_password', $plainPassword);
        session()->flash('user_email', $application->email);
        session()->flash('user_phone', $application->phone);
        session()->flash('user_name', $application->contact_name);
        
        return back()->with('success', 'Nouveau mot de passe généré avec succès');
    }

    public function destroy($id)
    {
        $application = PartnerApplication::findOrFail($id);
        $application->delete();

        return redirect()->route('admin.partners.index')->with('success', 'Candidature supprimée avec succès');
    }
}
