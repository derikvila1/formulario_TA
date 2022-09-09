
<?php
$cafe_atendimento_otimo = 0;
$cafe_atendimento_bom = 0;
$cafe_atendimento_regular = 0;
$cafe_atendimento_ruim = 0;
//-----------------------------------------
$cafe_variedade_otimo = 0;
$cafe_variedade_bom = 0;
$cafe_variedade_regular = 0;
$cafe_variedade_ruim = 0;
//-----------------------------------------
$cafe_cordialidade_otimo = 0;
$cafe_cordialidade_bom = 0;
$cafe_cordialidade_regular = 0;
$cafe_cordialidade_ruim = 0;
//-----------------------------------------
$cafe_valores_otimo = 0;
$cafe_valores_bom = 0;
$cafe_valores_regular = 0;
$cafe_valores_ruim = 0;
//-----------------------------------------
$loja_atendimento_otimo = 0;
$loja_atendimento_bom = 0;
$loja_atendimento_regular = 0;
$loja_atendimento_ruim = 0;
//-----------------------------------------
$loja_variedade_otimo = 0;
$loja_variedade_bom = 0;
$loja_variedade_regular = 0;
$loja_variedade_ruim = 0;
//-----------------------------------------
$loja_cordialidade_otimo = 0;
$loja_cordialidade_bom = 0;
$loja_cordialidade_regular = 0;
$loja_cordialidade_ruim = 0;
//-----------------------------------------
$loja_valores_otimo = 0;
$loja_valores_bom = 0;
$loja_valores_regular = 0;
$loja_valores_ruim = 0;

//-----------------------------------------
$bilheteria_atendimento_otimo = 0;
$bilheteria_atendimento_bom = 0;
$bilheteria_atendimento_regular = 0;
$bilheteria_atendimento_ruim = 0;
//-----------------------------------------
$bilheteria_eficiencia_otimo = 0;
$bilheteria_eficiencia_bom = 0;
$bilheteria_eficiencia_regular = 0;
$bilheteria_eficiencia_ruim = 0;
//-----------------------------------------
$bilheteria_cordialidade_otimo = 0;
$bilheteria_cordialidade_bom = 0;
$bilheteria_cordialidade_regular = 0;
$bilheteria_cordialidade_ruim = 0;


foreach ( $status as $fi ) {
 
 //dd($fi);
//-----------------------------------------
  if($fi->cafe_atendimento === "otimo"){
    $cafe_atendimento_otimo ++;
  }
  if($fi->cafe_atendimento ==="bom"){
    $cafe_atendimento_bom ++;
  }
  if($fi->cafe_atendimento ==="regular"){
    $cafe_atendimento_regular ++;
  }
  if($fi->cafe_atendimento ==="ruim"){
    $cafe_atendimento_ruim ++;
  }
//-----------------------------------------
  if($fi->cafe_variedade === "otimo"){
    $cafe_variedade_otimo ++;
  }
  if($fi->cafe_variedade ==="bom"){
    $cafe_variedade_bom ++;
  }
  if($fi->cafe_variedade ==="regular"){
    $cafe_variedade_regular ++;
  }
  if($fi->cafe_variedade ==="ruim"){
    $cafe_variedade_ruim ++;
  }

  //-----------------------------------------
  if($fi->cafe_cordialidade === "otimo"){
    $cafe_cordialidade_otimo ++;
  }
  if($fi->cafe_cordialidade ==="bom"){
    $cafe_cordialidade_bom ++;
  }
  if($fi->cafe_cordialidade ==="regular"){
    $cafe_cordialidade_regular ++;
  }
  if($fi->cafe_cordialidade ==="ruim"){
    $cafe_cordialidade_ruim ++;
  }
    //-----------------------------------------
    if($fi->cafe_valores === "otimo"){
      $cafe_valores_otimo ++;
    }
    if($fi->cafe_valores ==="bom"){
      $cafe_valores_bom ++;
    }
    if($fi->cafe_valores ==="regular"){
      $cafe_valores_regular ++;
    }
    if($fi->cafe_valores ==="ruim"){
      $cafe_valores_ruim ++;
    }
  //-----------------------------------------
  if($fi->loja_atendimento === "otimo"){
    $loja_atendimento_otimo ++;
  }
  if($fi->loja_atendimento ==="bom"){
    $loja_atendimento_bom ++;
  }
  if($fi->loja_atendimento ==="regular"){
    $loja_atendimento_regular ++;
  }
  if($fi->loja_atendimento ==="ruim"){
    $loja_atendimento_ruim ++;
  }
  //-----------------------------------------
  if($fi->loja_variedade === "otimo"){
    $loja_variedade_otimo ++;
  }
  if($fi->loja_variedade ==="bom"){
    $loja_variedade_bom ++;
  }
  if($fi->loja_variedade ==="regular"){
    $loja_variedade_regular ++;
  }
  if($fi->loja_variedade ==="ruim"){
    $loja_variedade_ruim ++;
  }

  //-----------------------------------------
  if($fi->loja_cordialidade === "otimo"){
    $loja_cordialidade_otimo ++;
  }
  if($fi->loja_cordialidade ==="bom"){
    $loja_cordialidade_bom ++;
  }
  if($fi->loja_cordialidade ==="regular"){
    $loja_cordialidade_regular ++;
  }
  if($fi->loja_cordialidade ==="ruim"){
    $loja_cordialidade_ruim ++;
  }
    //-----------------------------------------
    if($fi->loja_valores === "otimo"){
      $loja_valores_otimo ++;
    }
    if($fi->loja_valores ==="bom"){
      $loja_valores_bom ++;
    }
    if($fi->loja_valores ==="regular"){
      $loja_valores_regular ++;
    }
    if($fi->loja_valores ==="ruim"){
      $loja_valores_ruim ++;
    }

      //-----------------------------------------
      if($fi->bilheteria_atendimento === "otimo"){
        $bilheteria_atendimento_otimo ++;
      }
      if($fi->bilheteria_atendimento ==="bom"){
        $bilheteria_atendimento_bom ++;
      }
      if($fi->bilheteria_atendimento ==="regular"){
        $bilheteria_atendimento_regular ++;
      }
      if($fi->bilheteria_atendimento ==="ruim"){
        $bilheteria_atendimento_ruim ++;
      }
      //-----------------------------------------
      if($fi->bilheteria_eficiencia === "otimo"){
        $bilheteria_eficiencia_otimo ++;
      }
      if($fi->bilheteria_eficiencia ==="bom"){
        $bilheteria_eficiencia_bom ++;
      }
      if($fi->bilheteria_eficiencia ==="regular"){
        $bilheteria_eficiencia_regular ++;
      }
      if($fi->bilheteria_eficiencia ==="ruim"){
        $bilheteria_eficiencia_ruim ++;
      }
      //-----------------------------------------
      if($fi->bilheteria_cordialidade === "otimo"){
        $bilheteria_cordialidade_otimo ++;
      }
      if($fi->bilheteria_cordialidade ==="bom"){
        $bilheteria_cordialidade_bom ++;
      }
      if($fi->bilheteria_cordialidade ==="regular"){
        $bilheteria_cordialidade_regular ++;
      }
      if($fi->bilheteria_cordialidade ==="ruim"){
        $bilheteria_cordialidade_ruim ++;
      }

    
}
?>
   
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
  //-----------------------------------------
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Ótimo',   <?php echo $cafe_atendimento_otimo ?> ],
          ['Bom',      <?php echo $cafe_atendimento_bom ?>],
          ['Regular',  <?php echo $cafe_atendimento_regular ?>],
          ['Ruim', <?php echo $cafe_atendimento_ruim ?>],
        ]);
        var options = {
          title: 'CAFÉ - ATENDIMENTO'
        };
        var chart = new google.visualization.PieChart(document.getElementById('cafe_atendimento'));
        chart.draw(data, options);
      
  //----------------------------------------- 
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Ótimo',   <?php echo $cafe_variedade_otimo ?> ],
          ['Bom',      <?php echo $cafe_variedade_bom ?>],
          ['Regular',  <?php echo $cafe_variedade_regular ?>],
          ['Ruim', <?php echo $cafe_variedade_ruim ?>],
        ]);
        var options = {
          title: 'CAFÉ - VARIEDADE'
        };
        var chart = new google.visualization.PieChart(document.getElementById('cafe_variedade'));
        chart.draw(data, options);
      
   //----------------------------------------- 
   var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Ótimo',   <?php echo $cafe_cordialidade_otimo ?> ],
          ['Bom',      <?php echo $cafe_cordialidade_bom ?>],
          ['Regular',  <?php echo $cafe_cordialidade_regular ?>],
          ['Ruim', <?php echo $cafe_cordialidade_ruim ?>],
        ]);
        var options = {
          title: 'CAFÉ - cordialidade'
        };
        var chart = new google.visualization.PieChart(document.getElementById('cafe_cordialidade'));
        chart.draw(data, options);
      
   //----------------------------------------- 
   var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Ótimo',   <?php echo $cafe_valores_otimo ?> ],
          ['Bom',      <?php echo $cafe_valores_bom ?>],
          ['Regular',  <?php echo $cafe_valores_regular ?>],
          ['Ruim', <?php echo $cafe_valores_ruim ?>],
        ]);
        var options = {
          title: 'CAFÉ - valores'
        };
        var chart = new google.visualization.PieChart(document.getElementById('cafe_valores'));
        chart.draw(data, options);
      
   //----------------------------------------- 
   var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Ótimo',   <?php echo $loja_atendimento_otimo ?> ],
          ['Bom',      <?php echo $loja_atendimento_bom ?>],
          ['Regular',  <?php echo $loja_atendimento_regular ?>],
          ['Ruim', <?php echo $loja_atendimento_ruim ?>],
        ]);
        var options = {
          title: 'LOJA - ATENDIMENTO'
        };
        var chart = new google.visualization.PieChart(document.getElementById('loja_atendimento'));
        chart.draw(data, options);
      
   //----------------------------------------- 
   var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Ótimo',   <?php echo $loja_variedade_otimo ?> ],
          ['Bom',      <?php echo $loja_variedade_bom ?>],
          ['Regular',  <?php echo $loja_variedade_regular ?>],
          ['Ruim', <?php echo $loja_variedade_ruim ?>],
        ]);
        var options = {
          title: 'LOJA - VARIEDADE'
        };
        var chart = new google.visualization.PieChart(document.getElementById('loja_variedade'));
        chart.draw(data, options);
      
   //----------------------------------------- 
   var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Ótimo',   <?php echo $loja_cordialidade_otimo ?> ],
          ['Bom',      <?php echo $loja_cordialidade_bom ?>],
          ['Regular',  <?php echo $loja_cordialidade_regular ?>],
          ['Ruim', <?php echo $loja_cordialidade_ruim ?>],
        ]);
        var options = {
          title: 'LOJA - cordialidade'
        };
        var chart = new google.visualization.PieChart(document.getElementById('loja_cordialidade'));
        chart.draw(data, options);
      
   //----------------------------------------- 
   var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Ótimo',   <?php echo $loja_valores_otimo ?> ],
          ['Bom',      <?php echo $loja_valores_bom ?>],
          ['Regular',  <?php echo $loja_valores_regular ?>],
          ['Ruim', <?php echo $loja_valores_ruim ?>],
        ]);
        var options = {
          title: 'LOJA - valores'
        };
        var chart = new google.visualization.PieChart(document.getElementById('loja_valores'));
        chart.draw(data, options);
       //----------------------------------------- 
       
   var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Ótimo',   <?php echo $bilheteria_atendimento_otimo ?> ],
          ['Bom',      <?php echo $bilheteria_atendimento_bom ?>],
          ['Regular',  <?php echo $bilheteria_atendimento_regular ?>],
          ['Ruim', <?php echo $bilheteria_atendimento_ruim ?>],
        ]);
        var options = {
          title: 'BILHETERIA - ATENDIMENTO'
        };
        var chart = new google.visualization.PieChart(document.getElementById('bilheteria_atendimento'));
        chart.draw(data, options);

         //----------------------------------------- 
       
   var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Ótimo',   <?php echo $bilheteria_eficiencia_otimo ?> ],
          ['Bom',      <?php echo $bilheteria_eficiencia_bom ?>],
          ['Regular',  <?php echo $bilheteria_eficiencia_regular ?>],
          ['Ruim', <?php echo $bilheteria_eficiencia_ruim ?>],
        ]);
        var options = {
          title: 'BILHETERIA - eficiencia'
        };
        var chart = new google.visualization.PieChart(document.getElementById('bilheteria_eficiencia'));
        chart.draw(data, options);
 //----------------------------------------- 
       
 var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Ótimo',   <?php echo $bilheteria_cordialidade_otimo ?> ],
          ['Bom',      <?php echo $bilheteria_cordialidade_bom ?>],
          ['Regular',  <?php echo $bilheteria_cordialidade_regular ?>],
          ['Ruim', <?php echo $bilheteria_cordialidade_ruim ?>],
        ]);
        var options = {
          title: 'BILHETERIA - cordialidade'
        };
        var chart = new google.visualization.PieChart(document.getElementById('bilheteria_cordialidade'));
        chart.draw(data, options);
      }
      
    </script>
    
  </head>
  <body>

    <div id="cafe_atendimento" style="width: 300px; height: 200px;"></div>
    <div id="cafe_variedade" style="width: 300px; height: 200px;"></div>
    <div id="cafe_cordialidade" style="width: 300px; height: 200px;"></div>
    <div id="cafe_valores" style="width: 300px; height: 200px;"></div>
    <div id="loja_atendimento" style="width: 300px; height: 200px;"></div>
    <div id="loja_variedade" style="width: 300px; height: 200px;"></div>
    <div id="loja_cordialidade" style="width: 300px; height: 200px;"></div>
    <div id="loja_valores" style="width: 300px; height: 200px;"></div>
    <div id="bilheteria_atendimento" style="width: 300px; height: 200px;"></div>
    <div id="bilheteria_eficiencia" style="width: 300px; height: 200px;"></div>
    <div id="bilheteria_cordialidade" style="width: 300px; height: 200px;"></div>
  </body>
</html>
