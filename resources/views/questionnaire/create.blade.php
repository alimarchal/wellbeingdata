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
                <form role="form" action="{{url('questionnaire')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="questionnaireInputText">Questionnaire</label>
                            <input type="text" class="form-control" id="questionnaireInputText"
                                   placeholder="Enter Title" name="title" value="{{old('title')}}">
                            @error('title')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="purposeInputText">Purpose</label>
                            <input type="text" class="form-control" id="purposeInputText" placeholder="Enter Purpose"
                                   name="purpose" value="{{old('purpose')}}">
                            @error('purpose')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
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
