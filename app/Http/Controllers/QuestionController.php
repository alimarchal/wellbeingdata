<?php

namespace App\Http\Controllers;

use App\Question;
use App\Questionnaire;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * QuestionController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Questionnaire $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function create(Questionnaire $questionnaire)
    {
        return view('question.create', compact('questionnaire'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Questionnaire $questionnaire
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Questionnaire $questionnaire, Request $request)
    {
        $data = $request->validate([
            'question.question_no' => 'required',
            'question.question' => 'required',
            'answers.*.answer' => 'required',
        ]);
        $questions = $questionnaire->questions()->create($data['question']);
        $questions->answers()->createMany($data['answers']);
        return redirect('questionnaires/' . $questionnaire->id);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
