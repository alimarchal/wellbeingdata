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
<a class="navbar-brand" href="https://www.hespk.com/aliabdi">Home (Main Website)</a>
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
<input class="form-check-input" type="radio" name="survey[gender]" id="male" value="Male" {{ (old('survey.gender') == "Male")?'checked':'' }}>
<label class="form-check-label" for="male">
Male
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="survey[gender]" id="female" value="Female" {{ (old('survey.gender') == "Female")?'checked':'' }}>
<label class="form-check-label" for="female">
Female
</label>
</div>
</div>
<div class="col-md-2">
Residential Area
<div class="form-check">
<input class="form-check-input" type="radio" name="survey[residential_area]" id="Urban" value="Urban" {{ (old('survey.residential_area') == "Urban")?'checked':'' }}>
<label class="form-check-label" for="Urban">
Urban
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="survey[residential_area]" id="Rural" value="Rural" {{ (old('survey.residential_area') == "Rural")?'checked':'' }}>
<label class="form-check-label" for="Rural">
Rural
</label>
</div>
</div>
<div class="col-md-8">
Family Status
<div class="form-check"><input class="form-check-input" type="radio" name="survey[family_status]" id="family_status" value="Single" {{ (old('survey.family_status') == "Single")?'checked':'' }}>
<label class="form-check-label" for="family_status">
Single (Parents and child)
</label>
</div>
<div class="form-check"><input class="form-check-input" type="radio" name="survey[family_status]" id="family_status1" value="Joint" {{ (old('survey.family_status') == "Joint")?'checked':'' }}>
<label class="form-check-label" for="family_status1">
Joint (Parents their children and their grandparents)
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="survey[family_status]" id="family_status2" value="Extended" {{ (old('survey.family_status') == "Extended")?'checked':'' }}>
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
<option value="{{$i}}" {{ (old('survey.household_size') == $i)?'selected':'' }}>{{$i}}</option>
@endfor
</select>
</div>
<div class="col-md-2">
<label for="Marital Status">Marital Status</label>
<select class="form-control" id="Marital Status" name="survey[marital_status]">
<option value="" selected>None</option>
<option value="Unmarried" {{ (old('survey.marital_status') == "Unmarried")?'selected':'' }}>Unmarried</option>
<option value="Married" {{ (old('survey.marital_status') == "Married")?'selected':'' }}>Married</option>
<option value="Widow" {{ (old('survey.marital_status') == "Widow")?'selected':'' }}>Widow</option>
<option value="Divorced" {{ (old('survey.marital_status') == "Divorced")?'selected':'' }}>Divorced</option>
<option value="Seprated" {{ (old('survey.marital_status') == "Seprated")?'selected':'' }}>Seprated</option>
</select>
</div>
<div class="col-md-3">
<label for="ws">Work Status</label>
<select class="form-control" id="ws" name="survey[work_status]">

<option value="" selected>None</option>
<option value="Government sector" {{ (old('survey.work_status') == "Government sector")?'selected':'' }}>Government sector</option>
<option value="Private Sector" {{ (old('survey.work_status') == "Private Sector")?'selected':'' }}>Private Sector</option>
<option value="Own business/Firm/Farm" {{ (old('survey.work_status') == "Own business/Firm/Farm")?'selected':'' }}>Own business/Firm/Farm</option>
<option value="Professional" {{ (old('survey.work_status') == "Professional")?'selected':'' }}>Professional</option>
<option value="Imam of mosque" {{ (old('survey.work_status') == "Imam of mosque")?'selected':'' }}>Imam of mosque</option>
<option value="NGO" {{ (old('survey.work_status') == "NGO")?'selected':'' }}>NGO</option>
<option value="Pensioner" {{ (old('survey.work_status') == "Pensioner")?'selected':'' }}>Pensioner</option>
<option value="Army" {{ (old('survey.work_status') == "Army")?'selected':'' }}>Army</option>
<option value="Daily wager" {{ (old('survey.work_status') == "Daily wager")?'selected':'' }}>Daily wager</option>
<option value="Housewife" {{ (old('survey.work_status') == "Housewife")?'selected':'' }}>Housewife</option>
<option value="Internet business" {{ (old('survey.work_status') == "Internet business")?'selected':'' }}>Internet business</option>
<option value="Student" {{ (old('survey.work_status') == "Student")?'selected':'' }}>Student</option>
<option value="Unemployed" {{ (old('survey.work_status') == "Unemployed")?'selected':'' }}>Unemployed</option>
</select>
</div>
<div class="col-md-3">
<label for="hs">Health (during last 12 months)</label>
<select class="form-control" id="hs" name="survey[health]">
<option value="" selected>None</option>
<option value="To much problematic"  {{ (old('survey.health') == "To much problematic")?'selected':'' }}>To much problematic</option>
<option value="Somewhat poor"  {{ (old('survey.health') == "Somewhat poor")?'selected':'' }}>Somewhat poor</option>
<option value="Poor"  {{ (old('survey.health') == "Poor")?'selected':'' }}>Poor</option>
<option value="Mixed"  {{ (old('survey.health') == "Mixed")?'selected':'' }}>Mixed</option>
<option value="Somewhat good"  {{ (old('survey.health') == "Somewhat good")?'selected':'' }}>Somewhat good</option>
<option value="Good"  {{ (old('survey.health') == "Good")?'selected':'' }}>Good</option>
<option value="Completely good"  {{ (old('survey.health') == "Completely good")?'selected':'' }}>Completely good</option>
</select>
</div>
<div class="col-md-2">
<label for="age">Age</label>
<input type="text" class="form-control" id="age" name="survey[age]" value="{{ old('survey.age') }}">
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
value="{{$answer->id}}"
id="answer{{$answer->id}}"  {{ (old('responses.'.$key.'.answer_id') == $answer->id)?'checked':'' }}  {{($answer->answer==0)?'checked':''}}>
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

{{--    $i <= $questionnaire->questions->count()+2;--}}
<div class="btn-next-con">
    <br>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: {{(100/($questionnaire->questions->count()+2))}}%;" aria-valuenow="{{(100/($questionnaire->questions->count()+2))}}" aria-valuemin="0" aria-valuemax="100">{{(100/($questionnaire->questions->count()+2))}}%</div>
    </div>
    <br>
    <br>
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
value="{{$answer->id}}"
id="answer{{$answer->id}}" {{ (old('responses.'.$key.'.answer_id') == $answer->id)?'checked':'' }} {{($answer->answer==0)?'checked':''}}>
{{ $answer->answer }}
<input type="hidden" name="responses[{{$key}}][question_id]" value="{{$question->id}}">
</label>

</div>
</li>
@endforeach
</ul>
</div>
</div>
    <br>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: {{$loop->iteration*(100/($questionnaire->questions->count()+2))}}%;" aria-valuenow="{{$loop->iteration*(100/($questionnaire->questions->count()+2))}}" aria-valuemin="0" aria-valuemax="100">{{$loop->iteration*(100/($questionnaire->questions->count()+2))}}%</div>
    </div>
    <br>
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
<input class="form-check-input" type="radio" name="survey[controlling_desire]" id="controlling_desire1" value="Never" {{ (old('survey.controlling_desire') == "Never")?'checked':'' }}>
<label class="form-check-label" for="controlling_desire1">
Never
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="survey[controlling_desire]" id="controlling_desire2" value="Rare" {{ (old('survey.controlling_desire') == "Rare")?'checked':'' }}>
<label class="form-check-label" for="controlling_desire2">
Rare
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="survey[controlling_desire]" id="controlling_desire3"
value="Sometimes" {{ (old('survey.controlling_desire') == "Sometimes")?'checked':'' }}>
<label class="form-check-label" for="controlling_desire3">
Sometimes
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="survey[controlling_desire]" id="controlling_desire4" value="Often" {{ (old('survey.controlling_desire') == "Often")?'checked':'' }}>
<label class="form-check-label" for="controlling_desire4" >
Often
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="survey[controlling_desire]" id="controlling_desire5"
value="Always"  {{ (old('survey.controlling_desire') == "Always")?'checked':'' }}>
<label class="form-check-label" for="controlling_desire5" >
Always
</label>
</div>
</div>
<div class="col-md-6">
Likening same for others which you like for self
<div class="form-check">
<input class="form-check-input" type="radio" name="survey[likening_same_for_other]" id="likening_same_for_other1"
value="Never" {{ (old('survey.likening_same_for_other') == "Never")?'checked':'' }}>
<label class="form-check-label" for="likening_same_for_other1">
Never
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="survey[likening_same_for_other]" id="likening_same_for_other2"
value="Rare" {{ (old('survey.likening_same_for_other') == "Rare")?'checked':'' }}>
<label class="form-check-label" for="likening_same_for_other2">
Rare
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="survey[likening_same_for_other]" id="likening_same_for_other3"
value="Sometimes" {{ (old('survey.likening_same_for_other') == "Sometimes")?'checked':'' }}>
<label class="form-check-label" for="likening_same_for_other3">
Sometimes
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="survey[likening_same_for_other]" id="likening_same_for_other4"
value="Often" {{ (old('survey.likening_same_for_other') == "Often")?'checked':'' }}>
<label class="form-check-label" for="likening_same_for_other4">
Often
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="survey[likening_same_for_other]" id="likening_same_for_other5"
value="Always" {{ (old('survey.likening_same_for_other') == "Always")?'checked':'' }}>
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
<input class="form-check-input" type="radio" name="survey[completing_task_work_wisely]"
id="completing_task_work_wisely1" value="Never" {{ (old('survey.completing_task_work_wisely') == "Never")?'checked':'' }}>
<label class="form-check-label" for="completing_task_work_wisely1">
Never
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="survey[completing_task_work_wisely]"
id="completing_task_work_wisely2" value="Rare" {{ (old('survey.completing_task_work_wisely') == "Rare")?'checked':'' }}>
<label class="form-check-label" for="completing_task_work_wisely2">
Rare
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="survey[completing_task_work_wisely]"
id="completing_task_work_wisely3" value="Sometimes" {{ (old('survey.completing_task_work_wisely') == "Sometimes")?'checked':'' }}>
<label class="form-check-label" for="completing_task_work_wisely3">
Sometimes
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="survey[completing_task_work_wisely]"
id="completing_task_work_wisely4" value="Often" {{ (old('survey.completing_task_work_wisely') == "Often")?'checked':'' }}>
<label class="form-check-label" for="completing_task_work_wisely4">
Often
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="survey[completing_task_work_wisely]"
id="completing_task_work_wisely5" value="Always" {{ (old('survey.completing_task_work_wisely') == "Always")?'checked':'' }}>
<label class="form-check-label" for="completing_task_work_wisely5">
Always
</label>
</div>
</div>
<div class="col-md-3">
Standing on principles
<div class="form-check">
<input class="form-check-input" type="radio" name="survey[standing_on_principles]" id="standing_on_principles1"
value="Never" {{ (old('survey.standing_on_principles') == "Never")?'checked':'' }}>
<label class="form-check-label" for="standing_on_principles1">
Never
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="survey[standing_on_principles]" id="standing_on_principles2"
value="Rare"  {{ (old('survey.standing_on_principles') == "Rare")?'checked':'' }}>
<label class="form-check-label" for="standing_on_principles2">
Rare
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="survey[standing_on_principles]" id="standing_on_principles3"
value="Sometimes" {{ (old('survey.standing_on_principles') == "Sometimes")?'checked':'' }}>
<label class="form-check-label" for="standing_on_principles3">
Sometimes
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="survey[standing_on_principles]" id="standing_on_principles4"
value="Often" {{ (old('survey.standing_on_principles') == "Often")?'checked':'' }}>
<label class="form-check-label" for="standing_on_principles4">
Often
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="survey[standing_on_principles]" id="standing_on_principles5"
value="Always" {{ (old('survey.standing_on_principles') == "Always")?'checked':'' }}>
<label class="form-check-label" for="standing_on_principles5">
Always
</label>
</div>
</div>
<div class="col-md-3">
<label for="monthly_basic_income">Your monthly basic income</label>
<select class="form-control" id="monthly_basic_income" name="survey[monthly_basic_income]">
<option selected="" value="0" checked="" {{ (old('survey.monthly_basic_income') == "0")?'checked':'' }}>Zero</option>
<option value="Less than 5000" {{ (old('survey.monthly_basic_income') == "Less than 5000")?'checked':'' }}>Less than 5000</option>
<option value="5000-9000" {{ (old('survey.monthly_basic_income') == "5000-9000")?'checked':'' }}>5000-9000</option>
<option value="10000-19000" {{ (old('survey.monthly_basic_income') == "10000-19000")?'checked':'' }}>10000-19000</option>
<option value="20000-29000" {{ (old('survey.monthly_basic_income') == "20000-29000")?'checked':'' }}>20000-29000</option>
<option value="30000-39000" {{ (old('survey.monthly_basic_income') == "30000-39000")?'checked':'' }}>30000-39000</option>
<option value="40000-49000" {{ (old('survey.monthly_basic_income') == "40000-49000")?'checked':'' }}>40000-49000</option>
<option value="50000-59000" {{ (old('survey.monthly_basic_income') == "50000-59000")?'checked':'' }}>50000-59000</option>
<option value="60000-69000" {{ (old('survey.monthly_basic_income') == "60000-69000")?'checked':'' }}>60000-69000</option>
<option value="70000-80000" {{ (old('survey.monthly_basic_income') == "70000-80000")?'checked':'' }}>70000-80000</option>
<option value="81000-99000" {{ (old('survey.monthly_basic_income') == "81000-99000")?'checked':'' }}>81000-99000</option>
<option value="1 Lac - 2 Lac" {{ (old('survey.monthly_basic_income') == "1 Lac - 2 Lac")?'checked':'' }}>1 Lac - 2 Lac</option>
<option value="More than 2 Lac" {{ (old('survey.monthly_basic_income') == "More than 2 Lac")?'checked':'' }}>More than 2 Lac</option>
</select>
</div>
<div class="col-md-3">
<label for="monthly_part_time_income">Your monthly part time income</label>
<select class="form-control" id="monthly_part_time_income" name="survey[monthly_part_time_income]">
<option value="">None</option>
    <option value="0" {{ (old('survey.monthly_part_time_income') == "0")?'checked':'' }}>Zero</option>
    <option value="Less than 5000" {{ (old('survey.monthly_part_time_income') == "Less than 5000")?'checked':'' }}>Less than 5000</option>
    <option value="5000-9000" {{ (old('survey.monthly_part_time_income') == "5000-9000")?'checked':'' }}>5000-9000</option>
    <option value="10000-19000" {{ (old('survey.monthly_part_time_income') == "10000-19000")?'checked':'' }}>10000-19000</option>
    <option value="20000-29000" {{ (old('survey.monthly_part_time_income') == "20000-29000")?'checked':'' }}>20000-29000</option>
    <option value="30000-39000" {{ (old('survey.monthly_part_time_income') == "30000-39000")?'checked':'' }}>30000-39000</option>
    <option value="40000-49000" {{ (old('survey.monthly_part_time_income') == "40000-49000")?'checked':'' }}>40000-49000</option>
    <option value="50000-59000" {{ (old('survey.monthly_part_time_income') == "50000-59000")?'checked':'' }}>50000-59000</option>
    <option value="60000-69000" {{ (old('survey.monthly_part_time_income') == "60000-69000")?'checked':'' }}>60000-69000</option>
    <option value="70000-80000" {{ (old('survey.monthly_part_time_income') == "70000-80000")?'checked':'' }}>70000-80000</option>
    <option value="81000-99000" {{ (old('survey.monthly_part_time_income') == "81000-99000")?'checked':'' }}>81000-99000</option>
    <option value="1 Lac - 2 Lac" {{ (old('survey.monthly_part_time_income') == "1 Lac - 2 Lac")?'checked':'' }}>1 Lac - 2 Lac</option>
    <option value="More than 2 Lac" {{ (old('survey.monthly_part_time_income') == "More than 2 Lac")?'checked':'' }}>More than 2 Lac</option>
</select>
</div>
</div>
<hr>

<div class="row">
<div class="col-md-6">
<label for="annual_incom_from_other_sources">Q12c. Your annual income from any other sources <br>(property, agriculture,
shares, bonds, internet, etc.)</label>
<select class="form-control" id="annual_incom_from_other_sources" name="survey[annual_incom_from_other_sources]">
    <option value="">None</option>
    <option value="0" {{ (old('survey.annual_incom_from_other_sources') == "0")?'checked':'' }}>Zero</option>
    <option value="Less than 5000" {{ (old('survey.annual_incom_from_other_sources') == "Less than 5000")?'checked':'' }}>Less than 5000</option>
    <option value="5000-9000" {{ (old('survey.annual_incom_from_other_sources') == "5000-9000")?'checked':'' }}>5000-9000</option>
    <option value="10000-19000" {{ (old('survey.annual_incom_from_other_sources') == "10000-19000")?'checked':'' }}>10000-19000</option>
    <option value="20000-29000" {{ (old('survey.annual_incom_from_other_sources') == "20000-29000")?'checked':'' }}>20000-29000</option>
    <option value="30000-39000" {{ (old('survey.annual_incom_from_other_sources') == "30000-39000")?'checked':'' }}>30000-39000</option>
    <option value="40000-49000" {{ (old('survey.annual_incom_from_other_sources') == "40000-49000")?'checked':'' }}>40000-49000</option>
    <option value="50000-59000" {{ (old('survey.annual_incom_from_other_sources') == "50000-59000")?'checked':'' }}>50000-59000</option>
    <option value="60000-69000" {{ (old('survey.annual_incom_from_other_sources') == "60000-69000")?'checked':'' }}>60000-69000</option>
    <option value="70000-80000" {{ (old('survey.annual_incom_from_other_sources') == "70000-80000")?'checked':'' }}>70000-80000</option>
    <option value="81000-99000" {{ (old('survey.annual_incom_from_other_sources') == "81000-99000")?'checked':'' }}>81000-99000</option>
    <option value="1 Lac - 2 Lac" {{ (old('survey.annual_incom_from_other_sources') == "1 Lac - 2 Lac")?'checked':'' }}>1 Lac - 2 Lac</option>
    <option value="More than 2 Lac" {{ (old('survey.annual_incom_from_other_sources') == "More than 2 Lac")?'checked':'' }}>More than 2 Lac</option>
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
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
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
