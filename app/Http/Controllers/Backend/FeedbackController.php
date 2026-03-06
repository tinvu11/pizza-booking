<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\tbl_user;
use App\Model\tbl_feedback;
use DB;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource (Frontend).
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedBack = tbl_feedback::with('user')->latest()->get();
        return view("Frontend.feedback", compact('feedBack'));
    }

    /**
     * Show the form for creating a new resource (Backend admin page).
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $feedBack = tbl_feedback::with('user')->latest()->get();
        return view("Backend.admin-views.feedback", compact('feedBack'));
    }

    /**
     * Store a newly created feedback in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'txtFeedBack' => 'required|string|max:500',
        ]);

        tbl_feedback::create([
            'user_id' => auth()->id(),
            'content' => $request->txtFeedBack,
        ]);

        return back()->with('success', 'Thank you for your feedback!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedback = tbl_feedback::findOrFail($id);
        $feedback->delete();
        return redirect("backend/feedback")->with('success', "Deleted feedback successfully");
    }

    public function checkFeed(){
        return back()->with('fail', 'Please Login to use this function');
    }
}
