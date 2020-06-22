@extends('adminlte::page')

@section('title', 'WellBeing Calculator')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Questionnaire</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{url('questionnaires/'. $questionnaire->id . '/questions')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="questionnoInputText">Question Title</label>
                            <input type="text" class="form-control" id="questionInputText"
                                   placeholder="Q1a: or Q1: etc." name="question[question_no]"
                                   value="{{old('question.question_no')}}">
                            @error('question_no.question_no')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="questionInputText">Question</label>
                            <input type="text" class="form-control" id="questionInputText"
                                   placeholder="Enter question" name="question[question]"
                                   value="{{old('question.question')}}">
                            @error('question.question')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <fieldset>
                            <legend>Answers Scale [0-10]</legend>
                            <div class="form-group">
                                <div class="form-check">
                                    <!-- Default unchecked -->
                                    <ul class="list-group">
                                        <ul class="list-group list-group-horizontal">
                                            @for ($i = 0; $i <= 10 ; $i++)
                                                <li class="list-group-item" style="width: 9.09%; text-align: center">
                                                    <input type="hidden" value="{{$i}}" name="answers[][answer]">{{$i}}
                                                </li>
                                            @endfor
                                        </ul>
                                    </ul>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                             style="width:100%"></div>
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
