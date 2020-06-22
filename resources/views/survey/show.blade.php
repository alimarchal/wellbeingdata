<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="AuThemes Templates">
    <meta name="author" content="AuCreative">
    <meta name="keywords" content="AuThemes Templates">

    <!-- Title Page-->
    <title>{{config('app.name')}}</title>

    <!-- Icons font CSS-->
    <link href="{{url('vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all')}}">
    <link href="{{url('vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all')}}">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
          rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->

    <!-- Main CSS-->
    <link href="{{url('css/main.css" rel="stylesheet" media="all')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body style="background-color: lightgray;">

<header class="container bg-white" style="height: 130px;">
    <div class="row">
        <div class="col"><img style=" display: block;margin: auto;" src="{{url('images/ajkuni.jpg')}}"
                              alt="University of AJK Logo"></div>
        <div class="col"><img style=" display: block;margin: auto;" src="{{url('images/divineeconomics.jpg')}}"
                              alt="University of AJK Logo"></div>
        <div class="col"><img style=" display: block;margin: auto;" src="{{url('images/hec.jpg')}}"
                              alt="University of AJK Logo"></div>
        <div class="col"><img style=" display: block;margin: auto;" src="{{url('images/qau.jpg')}}"
                              alt="University of AJK Logo"></div>
    </div>
</header>
<nav class=" container navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="{{url('/')}}">Home (Main Website)</a>
</nav>
<div class="jumbotron bg-info py-4 container mb-0">
    <div class="container">
        <h1 class="text-center text-white"> {{config('app.name')}}</h1>
    </div>
</div>

<div class="container" style="background-color: white; height: auto;">

    <div class="card-body">
        <form class="wizard-container" method="POST"
              action="{{url('/surveys/'.$questionnaire->id.'-'.Str::slug($questionnaire->title))}}" id="js-wizard-form">
            @csrf
            <ul class="nav nav-tab">
                @for ($i = 1; $i <= $questionnaire->questions->count()+2; $i++)
                    @if ($i == 1)
                        <li class="active">
                            <a href="#tab{{$i}}" data-toggle="tab"></a>
                        </li>
                    @else
                        <li>
                            <a href="#tab{{$i}}" data-toggle="tab"></a>
                        </li>
                    @endif
                @endfor
            </ul>
            <div class="tab-content">
                @foreach ($questionnaire->questions as $key => $question)
                    @if ($loop->iteration == 1)

                        <div class="tab-pane active" id="tab{{$loop->iteration}}">
                            <div class="row">
                                <div class="col-md-2">
                                    Gender
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="survey[gender]" id="male" value="Male">
                                        <label class="form-check-label" for="male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="survey[gender]" id="female" value="Female">
                                        <label class="form-check-label" for="female">
                                            Female
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    Residential Area
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="survey[residential_area]" id="Urban" value="Urban">
                                        <label class="form-check-label" for="Urban">
                                            Urban
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="survey[residential_area]" id="Rural" value="Rural">
                                        <label class="form-check-label" for="Rural">
                                            Rural
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    Family Status
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="survey[family_status]" id="family_status" value="Single">
                                        <label class="form-check-label" for="family_status">
                                            Single (Parents and child)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="survey[family_status]" id="family_status1" value="Joint">
                                        <label class="form-check-label" for="family_status1">
                                            Joint (Parents their children and their grandparents)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="survey[family_status]" id="family_status2" value="Extended">
                                        <label class="form-check-label" for="family_status2">
                                            Extended (Parents, children, grandparents, grandchildren, uncle, nephew/niece)
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="houseHoldSize">Household Size</label>
                                    <select class="form-control" id="houseHoldSize" name="survey[household_size]">
                                        <option value="" selected>None</option>
                                        @for ($i = 1; $i <= 15; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="Marital Status">Marital Status</label>
                                    <select class="form-control" id="Marital Status" name="survey[marital_status]">
                                        <option value="" selected>None</option>
                                        <option value="Unmarried">Unmarried</option>
                                        <option value="Married">Married</option>
                                        <option value="Widow">Widow</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Seprated">Seprated</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="ws">Work Status</label>
                                    <select class="form-control" id="ws" name="survey[work_status]">

                                        <option value="" selected>None</option>
                                        <option value="Government sector">Government sector</option>
                                        <option value="Private Sector">Private Sector</option>
                                        <option value="Own business/Firm/Farm">Own business/Firm/Farm</option>
                                        <option value="Professional">Professional</option>
                                        <option value="Imam of mosque">Imam of mosque</option>
                                        <option value="NGO">NGO</option>
                                        <option value="Pensioner">Pensioner</option>
                                        <option value="Army">Army</option>
                                        <option value="Daily wager">Daily wager</option>
                                        <option value="Housewife">Housewife</option>
                                        <option value="Internet business">Internet business</option>
                                        <option value="Student">Student</option>
                                        <option value="Unemployed">Unemployed</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="hs">Health (during last 12 months)</label>
                                    <select class="form-control" id="hs" name="survey[health]">
                                        <option value=""  selected>None</option>
                                        <option value="To much problematic">To much problematic</option>
                                        <option value="Somewhat poor">Somewhat poor</option>
                                        <option value="Poor">Poor</option>
                                        <option value="Mixed">Mixed</option>
                                        <option value="Somewhat good">Somewhat good</option>
                                        <option value="Good">Good</option>
                                        <option value="Completely good">Completely good</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="age">Age</label>
                                    <input type="text" class="form-control" id="age" name="survey[age]">
                                </div>
                            </div>
                            <hr>

                            <div class="input-group">
                                <div class="card" style="width: 100%;">
                                    <div class="card-header">
                                        {{$question->question_no}} {{$question->question}}
                                    </div>

                                    <ul class="list-group list-group-horizontal">
                                        @foreach ($question->answers as $answer)
                                            <li class="list-group-item text-center" style="width: 100%;">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="answer{{$answer->id}}">
                                                        <input type="radio" class="form-check-input"
                                                               name="responses[{{$key}}][answer_id]"
                                                               value="{{$answer->id}}" id="answer{{$answer->id}}" {{($answer->answer == 0)?'checked':''}}>
                                                        {{ $answer->answer }}
                                                        <input type="hidden" name="responses[{{$key}}][question_id]"
                                                               value="{{$question->id}}" >
                                                    </label>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-next-con">
                                <br>
                                <a class="btn btn-next btn-primary float-right" href="#">Next</a>
                            </div>
                        </div>
                    @else
                        <div class="tab-pane" id="tab{{$loop->iteration}}">
                            <div class="input-group">
                                <div class="card" style="width: 100%;">
                                    <div class="card-header">
                                        {{$question->question_no}} {{$question->question}}
                                    </div>

                                    <ul class="list-group list-group-horizontal">
                                        @foreach ($question->answers as $answer)
                                            <li class="list-group-item text-center" style="width: 100%;">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="answer{{$answer->id}}">
                                                        <input type="radio" class="form-check-input"
                                                               name="responses[{{$key}}][answer_id]"
                                                               value="{{$answer->id}}" id="answer{{$answer->id}}" {{($answer->answer == 0)?'checked':''}}>
                                                        {{ $answer->answer }}
                                                        <input type="hidden" name="responses[{{$key}}][question_id]"
                                                               value="{{$question->id}}">
                                                    </label>

                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="btn-next-con">
                                <a class="btn btn-back  btn-primary float-left" href="#">back</a>
                                <a class="btn btn-next btn-primary float-right" href="#">Next</a>
                            </div>
                        </div>
                    @endif


                @endforeach
                <div class="tab-pane" id="tab{{$questionnaire->questions->count()+1}}">

                    <div class="row">
                        <div class="col-md-3">
                            Accepting own mistakes
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[accepting_own_mistakes]" id="mistake1" value="Never">
                                <label class="form-check-label" for="mistake1">
                                    Never
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[accepting_own_mistakes]" id="mistake2" value="Rare">
                                <label class="form-check-label" for="mistake2">
                                    Rare
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[accepting_own_mistakes]" id="mistake3" value="Sometimes">
                                <label class="form-check-label" for="mistake3">
                                    Sometimes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[accepting_own_mistakes]" id="mistake4" value="Often">
                                <label class="form-check-label" for="mistake4">
                                    Often
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[accepting_own_mistakes]" id="mistake5" value="Always">
                                <label class="form-check-label" for="mistake5">
                                    Always
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            Controlling desire
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[controlling_desire]" id="controlling_desire1" value="Never">
                                <label class="form-check-label" for="controlling_desire1">
                                    Never
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[controlling_desire]" id="controlling_desire2" value="Rare">
                                <label class="form-check-label" for="controlling_desire2">
                                    Rare
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[controlling_desire]" id="controlling_desire3" value="Sometimes">
                                <label class="form-check-label" for="controlling_desire3">
                                    Sometimes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[controlling_desire]" id="controlling_desire4" value="Often">
                                <label class="form-check-label" for="controlling_desire4">
                                    Often
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[controlling_desire]" id="controlling_desire5" value="Always">
                                <label class="form-check-label" for="controlling_desire5">
                                    Always
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            Likening same for others which you like for self
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[likening_same_for_other]" id="likening_same_for_other1" value="Never">
                                <label class="form-check-label" for="likening_same_for_other1">
                                    Never
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[likening_same_for_other]" id="likening_same_for_other2" value="Rare">
                                <label class="form-check-label" for="likening_same_for_other2">
                                    Rare
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[likening_same_for_other]" id="likening_same_for_other3" value="Sometimes">
                                <label class="form-check-label" for="likening_same_for_other3">
                                    Sometimes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[likening_same_for_other]" id="likening_same_for_other4" value="Often">
                                <label class="form-check-label" for="likening_same_for_other4">
                                    Often
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[likening_same_for_other]" id="likening_same_for_other5" value="Always">
                                <label class="form-check-label" for="likening_same_for_other5">
                                    Always
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            Completing task/work wisely
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[completing_task_work_wisely]" id="completing_task_work_wisely1" value="Never">
                                <label class="form-check-label" for="completing_task_work_wisely1">
                                    Never
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[completing_task_work_wisely]" id="completing_task_work_wisely2" value="Rare">
                                <label class="form-check-label" for="completing_task_work_wisely2">
                                    Rare
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[completing_task_work_wisely]" id="completing_task_work_wisely3" value="Sometimes">
                                <label class="form-check-label" for="completing_task_work_wisely3">
                                    Sometimes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[completing_task_work_wisely]" id="completing_task_work_wisely4" value="Often">
                                <label class="form-check-label" for="completing_task_work_wisely4">
                                    Often
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[completing_task_work_wisely]" id="completing_task_work_wisely5" value="Always">
                                <label class="form-check-label" for="completing_task_work_wisely5">
                                    Always
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            Standing on principles
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[standing_on_principles]" id="standing_on_principles1" value="Never">
                                <label class="form-check-label" for="standing_on_principles1">
                                    Never
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[standing_on_principles]" id="standing_on_principles2" value="Rare">
                                <label class="form-check-label" for="standing_on_principles2">
                                    Rare
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[standing_on_principles]" id="standing_on_principles3" value="Sometimes">
                                <label class="form-check-label" for="standing_on_principles3">
                                    Sometimes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[standing_on_principles]" id="standing_on_principles4" value="Often">
                                <label class="form-check-label" for="standing_on_principles4">
                                    Often
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey[standing_on_principles]" id="standing_on_principles5" value="Always">
                                <label class="form-check-label" for="standing_on_principles5">
                                    Always
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="monthly_basic_income">Your monthly basic income</label>
                            <select class="form-control" id="monthly_basic_income" name="survey[monthly_basic_income]">
                                <option selected="" value="0" checked="">Zero</option>
                                <option value="Less than 5000">Less than 5000</option>
                                <option value="5000-9000">5000-9000</option>
                                <option value="10000-19000">10000-19000</option>
                                <option value="20000-29000">20000-29000</option>
                                <option value="30000-39000">30000-39000</option>
                                <option value="40000-49000">40000-49000</option>
                                <option value="50000-59000">50000-59000</option>
                                <option value="60000-69000">60000-69000</option>
                                <option value="70000-80000">70000-80000</option>
                                <option value="81000-99000">81000-99000</option>
                                <option value="1 Lac - 2 Lac">1 Lac - 2 Lac</option>
                                <option value="More than 2 Lac">More than 2 Lac</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="monthly_part_time_income">Your monthly part time income</label>
                            <select class="form-control" id="monthly_part_time_income" name="survey[monthly_part_time_income]">
                                <option value="" selected>None</option>
                                <option value="0">Zero</option>
                                <option value="Less than 5000">Less than 5000</option>
                                <option value="5000-9000">5000-9000</option>
                                <option value="10000-19000">10000-19000</option>
                                <option value="20000-29000">20000-29000</option>
                                <option value="30000-39000">30000-39000</option>
                                <option value="40000-49000">40000-49000</option>
                                <option value="50000-59000">50000-59000</option>
                                <option value="60000-69000">60000-69000</option>
                                <option value="70000-80000">70000-80000</option>
                                <option value="81000-99000">81000-99000</option>
                                <option value="1 Lac - 2 Lac">1 Lac - 2 Lac</option>
                                <option value="More than 2 Lac">More than 2 Lac</option>
                            </select>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="annual_incom_from_other_sources">Q12c. Your annual income from any other sources <br>(property, agriculture, shares, bonds, internet, etc.)</label>
                            <select class="form-control" id="annual_incom_from_other_sources" name="survey[annual_incom_from_other_sources]">
                                <option value="" selected>None</option>
                                <option value="0">Zero</option>
                                <option value="Less than 5000">Less than 5000</option>
                                <option value="5000-9000">5000-9000</option>
                                <option value="10000-19000">10000-19000</option>
                                <option value="20000-29000">20000-29000</option>
                                <option value="30000-39000">30000-39000</option>
                                <option value="40000-49000">40000-49000</option>
                                <option value="50000-59000">50000-59000</option>
                                <option value="60000-69000">60000-69000</option>
                                <option value="70000-80000">70000-80000</option>
                                <option value="81000-99000">81000-99000</option>
                                <option value="1 Lac - 2 Lac">1 Lac - 2 Lac</option>
                                <option value="More than 2 Lac">More than 2 Lac</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="w">Your suggestion/any question you want to add</label>
                            <br>
                            <br>
                            <textarea for="suggestion" name="survey[suggestion]" class="form-control"></textarea>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="btn-next-con">
                        <a class="btn btn-back float-left btn-primary" href="#">back</a>
                        <input class="btn btn-last float-right btn-primary" type="submit" value="Calculate">
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="progress" id="js-progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                     aria-valuemax="100" style="width: 0%;">
                    <span class="progress-val"> 0%</span>
                </div>
            </div>
            @if ($errors->isNotEmpty())
            <ul class="text-danger">
                <li>
                    @error('survey.gender')
                    {{$message}}
                    @enderror
                </li>
                <li>

                    @error('survey.residential_area')
                    {{$message}}
                    @enderror
                </li>
                <li>

                    @error('survey.family_status')
                    {{$message}}
                    @enderror
                </li>
                <li>

                    @error('survey.household_size')
                    {{$message}}
                    @enderror
                </li>
                <li>

                    @error('survey.marital_status')
                    {{$message}}
                    @enderror
                </li>
                <li>

                    @error('survey.health')
                    {{$message}}
                    @enderror
                </li>
                <li>

                    @error('survey.age')
                    {{$message}}
                    @enderror
                </li>
                <li>

                    @error('survey.accepting_own_mistakes')
                    {{$message}}
                    @enderror
                </li>
                <li>

                    @error('survey.controlling_desire')
                    {{$message}}
                    @enderror
                </li>
                <li>

                    @error('survey.likening_same_for_other')
                    {{$message}}
                    @enderror
                </li>
                <li>

                    @error('survey.completing_task_work_wisely')
                    {{$message}}
                    @enderror
                </li>
                <li>

                    @error('survey.annual_income_from_other_sources')
                    {{$message}}
                    @enderror
                </li>
                <li>

                    @error('survey.monthly_part_time_income')
                    {{$message}}
                    @enderror
                </li>
                <li>

                    @error('survey.monthly_basic_income')
                    {{$message}}
                    @enderror
                </li>
            </ul>
                @enderror
        </form>
    </div>
</div>
<footer class="container py-4 container mb-0 text-white text-center" style="background-color: #0077be">Copyright
    &copy; {{date('Y')}} - All Right Reserved <br> Developed By Ali Raza Marchal
</footer>


<!-- Jquery JS-->
<script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
<!-- Vendor JS-->
<script src="{{url('vendor/jquery-validate/jquery.validate.min.js')}}"></script>
<script src="{{url('vendor/bootstrap-wizard/bootstrap.min.js')}}"></script>
<script src="{{url('vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>

<!-- Main JS-->
<script src="{{url('js/global.js')}}"></script>

</body>

</html>
<!-- end document-->
