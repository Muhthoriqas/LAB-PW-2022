<?php

namespace App\Http\Controllers;

use App\Models\question;
use Illuminate\Http\Request;

class questionController extends Controller
{
    public function save( Request $request)
    {
        $question = new question();
        $question->question_name = $request->question_name;
        $question->question_email = $request->question_email;
        $question->question_phone = $request->question_phone;
        $question->question_detail = $request->question_detail;
        $question->save();

        return back()->with('message', 'Question has been sent');
    }

    public function manage()
    {
        $questions = question::all();
        return view('BackEnd.inbox.manageInbox', compact('questions'));
    }
}