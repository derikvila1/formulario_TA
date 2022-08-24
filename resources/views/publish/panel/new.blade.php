@extends('layouts.dashboard')

@section('title')
    Editais - Novo
@endsection
@section('subtitle')
@endsection

@section('menu')
    basic minimal pushable
@endsection

@section('content')

   
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Ótimo',     11],
          ['Bom',      2],
          ['Regular',  2],
          ['Ruim', 2],
       
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>

@endsection
