<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate 
        $this->validate($request, [
            'content' => 'required|min:15',
            'question_id' => 'required|integer'
        ]);

        // Log::alert("validated");
        // echo("testing...");

        $answer = new Answer();
        $answer->content = $request->content;
        $answer->user()->associate(Auth::id());

        // // Log::info("created new answer");
        // // Log::info($answer);
        
        // $question = DB::table('questions')->findOr($request->question_id);
        // $question = Question::where('id', $request->question_id);
        $question = Question::findOr($request->question_id);
        $question->answers()->save($answer);

        return redirect()->route('questions.show', $question->id);
        // return Redirect::route('/');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
