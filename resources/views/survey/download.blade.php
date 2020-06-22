@extends('adminlte::page')

@section('title', 'WellBeing Calculator')

@section('content_header')

@stop

@section('content')
    <div class="row">

        <div class="col card-primary">
            <div class="card-header">
                All questions click to edit any
            </div>
            <ul class="list-group list-group-flush">

                    <li class="list-group-item">
                        <a href="{{url('downloadSurveyFile')}}">Download Survey Excel File</a>
                    </li>
            </ul>
            <div class="card-footer text-muted">
                Date: {{date('d-m-Y')}}
            </div>
        </div>
    </div>
@stop
