<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Questionnaire;
use App\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('survey.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Questionnaire $questionnaire
     * @param $slug
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function store(Questionnaire $questionnaire, $slug, Request $request)
    {
        $data = $request->all();
//        $request->validate([
//            'survey.gender' => 'required',
//            'survey.residential_area' => 'required',
//            'survey.family_status' => 'required',
//            'survey.household_size' => 'required',
//            'survey.marital_status' => 'required',
//            'survey.health' => 'required',
//            'survey.age' => 'required',
//            'survey.accepting_own_mistakes' => 'required',
//            'survey.controlling_desire' => 'required',
//            'survey.likening_same_for_other' => 'required',
//            'survey.completing_task_work_wisely' => 'required',
//            'survey.monthly_basic_income' => 'required',
//            'survey.monthly_part_time_income' => 'required',
//        ]);
        $totalCount =  count($data['responses']) * 10;
        $obtainScore = 0;
        $answer = Answer::all();
        for ($i = 0; $i < count($data['responses']); $i++)
        {
            $id =  $data['responses'][$i]['answer_id'];
            $obtainScore =  $obtainScore + $answer->find($id)->answer;
        }
        $status = null;

        $wellBeingScore = round(($obtainScore/$totalCount * 100), 0);
        if ($wellBeingScore > 0 && $wellBeingScore <= 30)
            $status = "Low Wellbeing";
        elseif ($wellBeingScore >= 31 && $wellBeingScore <= 65)
            $status = "Medium Wellbeing";
        else
            $status = "Higher Wellbeing";
        $data['survey']['wellbeing_total_question_score'] = $totalCount;
        $data['survey']['wellbeing_obtain_score'] = $obtainScore;
        $data['survey']['status'] = $status;
        $survey = $questionnaire->surveys()->create($data['survey']);
        $survey->responses()->createMany($data['responses']);
        return redirect('surveys')->with(['status' => $status, 'score' => $wellBeingScore]);

    }

    /**
     * Display the specified resource.
     *
     * @param Questionnaire $questionnaire
     * @param $slug
     * @param \App\Survey $survey
     * @return void
     */
    public function show(Questionnaire $questionnaire, $slug, Survey $survey)
    {
        return view('survey.show',compact('questionnaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function edit(Survey $survey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Survey $survey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey $survey)
    {
        //
    }
}
