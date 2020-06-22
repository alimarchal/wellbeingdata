@extends('adminlte::page')

@section('title', 'WellBeing Calculator')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {

                            var data = google.visualization.arrayToDataTable([
                                ['Task', 'Hours per Day'],
                                @foreach($survey as $s)
                                    ['{{$s->status}}', {{$s->total}}],
                                @endforeach
                            ]);

                            var options = {
                                title: 'WellBeing Database Status'
                            };

                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                            chart.draw(data, options);
                        }
                    </script>

                    <div id="piechart" style="width: 900px; height: 500px;"></div>


                    <p class="mb-0">You can use the left menu for detail information</p>

                </div>
            </div>
        </div>
    </div>
@stop
