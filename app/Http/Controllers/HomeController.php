<?php

namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //,'gender','residential_area','household_size','marital_status','work_status','health','age'
        DB::enableQueryLog();
        $survey = Survey::groupBy('status')->selectRaw('count(*) as total, status')->get();
        $data = [];
        foreach ($survey as $sur) {
            $data[$sur->status] = $sur->status;
        }
//        return $survey;
//        dd(DB::getQueryLog());
        return view('home', compact('survey'));
    }
}
