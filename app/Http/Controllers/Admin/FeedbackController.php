<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserFeedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = UserFeedback::with('user')->latest()->paginate(20);
        
        $stats = [
            'total' => UserFeedback::count(),
            'new' => UserFeedback::where('status', 'new')->count(),
            'average_rating' => round(UserFeedback::avg('rating'), 1),
        ];
        
        return view('admin.feedback.index', compact('feedbacks', 'stats'));
    }

    public function show($id)
    {
        $feedback = UserFeedback::with('user')->findOrFail($id);
        
        if ($feedback->status === 'new') {
            $feedback->update(['status' => 'read']);
        }
        
        return view('admin.feedback.show', compact('feedback'));
    }

    public function respond(Request $request, $id)
    {
        $request->validate([
            'admin_response' => 'required|string|max:1000',
        ]);

        $feedback = UserFeedback::findOrFail($id);
        $feedback->update([
            'admin_response' => $request->admin_response,
            'status' => 'responded',
        ]);

        return redirect()->route('admin.feedback.show', $id)->with('success', 'Réponse envoyée avec succès !');
    }

    public function destroy($id)
    {
        $feedback = UserFeedback::findOrFail($id);
        $feedback->delete();

        return redirect()->route('admin.feedback.index')->with('success', 'Commentaire supprimé avec succès !');
    }
}
