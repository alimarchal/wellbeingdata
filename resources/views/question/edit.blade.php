@extends('adminlte::page')

@section('title', 'WellBeing Calculator')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            @if(Session::has('status'))
                <p class="alert alert-success">{{ Session::get('status') }}</p>
            @endif
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Questionnaire</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{url('questionnaires/'.$question->questionnaire_id . '/questions/'. $question->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="questionnoInputText">Question Title</label>
                            <input type="text" class="form-control" id="questionInputText"
                                   placeholder="Q1a: or Q1: etc." name="question[question_no]"
                                   value="{{$question->question_no}}">
                            @error('question_no.question_no')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="questionInputText">Question</label>
                            <input type="text" class="form-control" id="questionInputText"
                                   placeholder="Enter question" name="question[question]"
                                   value="{{$question->question}}">
                            @error('question.question')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
