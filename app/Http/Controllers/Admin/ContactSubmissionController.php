<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use Illuminate\Http\Request;

class ContactSubmissionController extends Controller
{
    public function index()
    {
        $submissions = ContactSubmission::latest()->paginate(20);
        return view('admin.contacts.index', compact('submissions'));
    }

    public function show($id)
    {
        $submission = ContactSubmission::findOrFail($id);
        
        // Mark as read
        if ($submission->status === 'new') {
            $submission->update(['status' => 'read']);
        }

        return view('admin.contacts.show', compact('submission'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:new,read,replied,archived',
            'notes' => 'nullable|string',
        ]);

        $submission = ContactSubmission::findOrFail($id);
        $submission->update([
            'status' => $request->status,
            'admin_notes' => $request->notes,
        ]);

        return back()->with('success', 'Statut mis à jour avec succès');
    }

    public function destroy($id)
    {
        $submission = ContactSubmission::findOrFail($id);
        $submission->delete();

        return redirect()->route('admin.contacts.index')->with('success', 'Message supprimé avec succès');
    }
}
