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
                @foreach ($questionnaire->questions as $q)

                    <li class="list-group-item">{{$loop->iteration}} -
                        <a href="{{url('questionnaires/'.$questionnaire->id.'/questions/'.$q->id.'/edit')}}">{{$q->question_no}} {{$q->question}}</a>
                    </li>
                @endforeach
            </ul>
            <div class="card-footer text-muted">
                Date: {{date('d-m-Y')}}
            </div>
        </div>
    </div>
@stop
