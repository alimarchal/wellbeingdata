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
    <ul class="navbar-nav">
        <li class="nav-item ">
            <a class="nav-link" href="https://www.hespk.com/aliabdi">Home (Main Website)</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{url('surveys/1-wellbeing-calculator')}}">Recalculate Wellbeing</a>
        </li>
        </li>
    </ul>
</nav>
<div class="jumbotron bg-info py-4 container mb-0">
    <div class="container">
        <h1 class="text-center text-white"> {{config('app.name')}}</h1>
    </div>
</div>

<div class="container" style="background-color: white; height: auto;">

    <div class="row pb-4 pt-4">
        <div class="col text-center">
            @if (session('status'))
                <h2>I have calculated your wellbeing based on the data you have provided.</h2>
                <h1>You percentage is {{ session('score') }}% </h1>
                <h3>You have {{ session('status') }}</h3>
                </div>
            @endif
        </div>
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
