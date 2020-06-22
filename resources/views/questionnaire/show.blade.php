@extends('adminlte::page')

@section('title', 'WellBeing Calculator')

@section('content_header')

@stop

@section('content')
    <div class="row">
        @foreach ($questionnaire->questions as $q)
            <div class="col-12">



                <div class="card-body">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">{{$q->question_no}} {{$q->question}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <ul class="list-group">
                                <ul class="list-group list-group-horizontal">
                                    @foreach ($q->answers as $answer)
                                        <li class="list-group-item" style="width: 9.09%; text-align: center">
                                            {{$answer->answer}}
                                        </li>
                                    @endforeach
                                </ul>

                            </ul>
                            <br>
                            <a href="{{url('questionnaires/'.$questionnaire->id.'/questions/'.$q->id.'/edit')}}" class="btn btn-danger">Edit</a>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
            </div>
        @endforeach

    </div>
@stop
