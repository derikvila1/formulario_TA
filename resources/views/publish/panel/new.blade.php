
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

//-----------------------------------------
$condutores_cordialidade_otimo = 0;
$condutores_cordialidade_bom = 0;
$condutores_cordialidade_regular = 0;
$condutores_cordialidade_ruim = 0;
//-----------------------------------------
$condutores_postura_otimo = 0;
$condutores_postura_bom = 0;
$condutores_postura_regular = 0;
$condutores_postura_ruim = 0;
//-----------------------------------------
$condutores_contex_otimo = 0;
$condutores_contex_bom = 0;
$condutores_contex_regular = 0;
$condutores_contex_ruim = 0;
//-----------------------------------------
$condutores_valores_otimo = 0;
$condutores_valores_bom = 0;
$condutores_valores_regular = 0;
$condutores_valores_ruim = 0;

//-----------------------------------------
$instalacoes_conforto_otimo = 0;
$instalacoes_conforto_bom = 0;
$instalacoes_conforto_regular = 0;
$instalacoes_conforto_ruim = 0;
//-----------------------------------------
$instalacoes_sinalizacao_otimo = 0;
$instalacoes_sinalizacao_bom = 0;
$instalacoes_sinalizacao_regular = 0;
$instalacoes_sinalizacao_ruim = 0;
//-----------------------------------------
$instalacoes_limpeza_otimo = 0;
$instalacoes_limpeza_bom = 0;
$instalacoes_limpeza_regular = 0;
$instalacoes_limpeza_ruim = 0;
//-----------------------------------------
$instalacoes_conservacao_otimo = 0;
$instalacoes_conservacao_bom = 0;
$instalacoes_conservacao_regular = 0;
$instalacoes_conservacao_ruim = 0;


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
      //-----------------------------------------
  if($fi->condutores_cordialidade === "otimo"){
    $condutores_cordialidade_otimo ++;
  }
  if($fi->condutores_cordialidade ==="bom"){
    $condutores_cordialidade_bom ++;
  }
  if($fi->condutores_cordialidade ==="regular"){
    $condutores_cordialidade_regular ++;
  }
  if($fi->condutores_cordialidade ==="ruim"){
    $condutores_cordialidade_ruim ++;
  }
  //-----------------------------------------
  if($fi->condutores_postura === "otimo"){
    $condutores_postura_otimo ++;
  }
  if($fi->condutores_postura ==="bom"){
    $condutores_postura_bom ++;
  }
  if($fi->condutores_postura ==="regular"){
    $condutores_postura_regular ++;
  }
  if($fi->condutores_postura ==="ruim"){
    $condutores_postura_ruim ++;
  }
  //-----------------------------------------
  if($fi->condutores_contex === "otimo"){
    $condutores_contex_otimo ++;
  }
  if($fi->condutores_contex ==="bom"){
    $condutores_contex_bom ++;
  }
  if($fi->condutores_contex ==="regular"){
    $condutores_contex_regular ++;
  }
  if($fi->condutores_contex ==="ruim"){
    $condutores_contex_ruim ++;
  }
  //-----------------------------------------
  if($fi->condutores_valores === "otimo"){
    $condutores_valores_otimo ++;
  }
  if($fi->condutores_valores ==="bom"){
    $condutores_valores_bom ++;
  }
  if($fi->condutores_valores ==="regular"){
    $condutores_valores_regular ++;
  }
  if($fi->condutores_valores ==="ruim"){
    $condutores_valores_ruim ++;
  }

  //-----------------------------------------
  if($fi->instalacoes_conforto === "otimo"){
    $instalacoes_conforto_otimo ++;
  }
  if($fi->instalacoes_conforto ==="bom"){
    $instalacoes_conforto_bom ++;
  }
  if($fi->instalacoes_conforto ==="regular"){
    $instalacoes_conforto_regular ++;
  }
  if($fi->instalacoes_conforto ==="ruim"){
    $instalacoes_conforto_ruim ++;
  }
  //-----------------------------------------
  if($fi->instalacoes_sinalizacao === "otimo"){
    $instalacoes_sinalizacao_otimo ++;
  }
  if($fi->instalacoes_sinalizacao ==="bom"){
    $instalacoes_sinalizacao_bom ++;
  }
  if($fi->instalacoes_sinalizacao ==="regular"){
    $instalacoes_sinalizacao_regular ++;
  }
  if($fi->instalacoes_sinalizacao ==="ruim"){
    $instalacoes_sinalizacao_ruim ++;
  }
  //-----------------------------------------
  if($fi->instalacoes_limpeza === "otimo"){
    $instalacoes_limpeza_otimo ++;
  }
  if($fi->instalacoes_limpeza ==="bom"){
    $instalacoes_limpeza_bom ++;
  }
  if($fi->instalacoes_limpeza ==="regular"){
    $instalacoes_limpeza_regular ++;
  }
  if($fi->instalacoes_limpeza ==="ruim"){
    $instalacoes_limpeza_ruim ++;
  }
  //-----------------------------------------
  if($fi->instalacoes_conservacao === "otimo"){
    $instalacoes_conservacao_otimo ++;
  }
  if($fi->instalacoes_conservacao ==="bom"){
    $instalacoes_conservacao_bom ++;
  }
  if($fi->instalacoes_conservacao ==="regular"){
    $instalacoes_conservacao_regular ++;
  }
  if($fi->instalacoes_conservacao ==="ruim"){
    $instalacoes_conservacao_ruim ++;
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
          ['??timo',   <?php echo $cafe_atendimento_otimo ?> ],
          ['Bom',      <?php echo $cafe_atendimento_bom ?>],
          ['Regular',  <?php echo $cafe_atendimento_regular ?>],
          ['Ruim', <?php echo $cafe_atendimento_ruim ?>],
        ]);
        var options = {
          title: 'ATENDIMENTO'
        };
        var chart = new google.visualization.PieChart(document.getElementById('cafe_atendimento'));
        chart.draw(data, options);
      
  //----------------------------------------- 
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['??timo',   <?php echo $cafe_variedade_otimo ?> ],
          ['Bom',      <?php echo $cafe_variedade_bom ?>],
          ['Regular',  <?php echo $cafe_variedade_regular ?>],
          ['Ruim', <?php echo $cafe_variedade_ruim ?>],
        ]);
        var options = {
          title: 'VARIEDADE'
        };
        var chart = new google.visualization.PieChart(document.getElementById('cafe_variedade'));
        chart.draw(data, options);
      
   //----------------------------------------- 
   var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['??timo',   <?php echo $cafe_cordialidade_otimo ?> ],
          ['Bom',      <?php echo $cafe_cordialidade_bom ?>],
          ['Regular',  <?php echo $cafe_cordialidade_regular ?>],
          ['Ruim', <?php echo $cafe_cordialidade_ruim ?>],
        ]);
        var options = {
          title: 'CORDIALIDADE'
        };
        var chart = new google.visualization.PieChart(document.getElementById('cafe_cordialidade'));
        chart.draw(data, options);
      
   //----------------------------------------- 
   var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['??timo',   <?php echo $cafe_valores_otimo ?> ],
          ['Bom',      <?php echo $cafe_valores_bom ?>],
          ['Regular',  <?php echo $cafe_valores_regular ?>],
          ['Ruim', <?php echo $cafe_valores_ruim ?>],
        ]);
        var options = {
          title: 'VALORES'
        };
        var chart = new google.visualization.PieChart(document.getElementById('cafe_valores'));
        chart.draw(data, options);
      
   //----------------------------------------- 
   var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['??timo',   <?php echo $loja_atendimento_otimo ?> ],
          ['Bom',      <?php echo $loja_atendimento_bom ?>],
          ['Regular',  <?php echo $loja_atendimento_regular ?>],
          ['Ruim', <?php echo $loja_atendimento_ruim ?>],
        ]);
        var options = {
          title: 'ATENDIMENTO'
        };
        var chart = new google.visualization.PieChart(document.getElementById('loja_atendimento'));
        chart.draw(data, options);
      
   //----------------------------------------- 
   var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['??timo',   <?php echo $loja_variedade_otimo ?> ],
          ['Bom',      <?php echo $loja_variedade_bom ?>],
          ['Regular',  <?php echo $loja_variedade_regular ?>],
          ['Ruim', <?php echo $loja_variedade_ruim ?>],
        ]);
        var options = {
          title: 'VARIEDADE'
        };
        var chart = new google.visualization.PieChart(document.getElementById('loja_variedade'));
        chart.draw(data, options);
      
   //----------------------------------------- 
   var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['??timo',   <?php echo $loja_cordialidade_otimo ?> ],
          ['Bom',      <?php echo $loja_cordialidade_bom ?>],
          ['Regular',  <?php echo $loja_cordialidade_regular ?>],
          ['Ruim', <?php echo $loja_cordialidade_ruim ?>],
        ]);
        var options = {
          title: 'CORDIALIDADE'
        };
        var chart = new google.visualization.PieChart(document.getElementById('loja_cordialidade'));
        chart.draw(data, options);
      
   //----------------------------------------- 
   var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['??timo',   <?php echo $loja_valores_otimo ?> ],
          ['Bom',      <?php echo $loja_valores_bom ?>],
          ['Regular',  <?php echo $loja_valores_regular ?>],
          ['Ruim', <?php echo $loja_valores_ruim ?>],
        ]);
        var options = {
          title: 'VALORES'
        };
        var chart = new google.visualization.PieChart(document.getElementById('loja_valores'));
        chart.draw(data, options);
       //----------------------------------------- 
       
   var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['??timo',   <?php echo $bilheteria_atendimento_otimo ?> ],
          ['Bom',      <?php echo $bilheteria_atendimento_bom ?>],
          ['Regular',  <?php echo $bilheteria_atendimento_regular ?>],
          ['Ruim', <?php echo $bilheteria_atendimento_ruim ?>],
        ]);
        var options = {
          title: 'ATENDIMENTO'
        };
        var chart = new google.visualization.PieChart(document.getElementById('bilheteria_atendimento'));
        chart.draw(data, options);

         //----------------------------------------- 
       
   var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['??timo',   <?php echo $bilheteria_eficiencia_otimo ?> ],
          ['Bom',      <?php echo $bilheteria_eficiencia_bom ?>],
          ['Regular',  <?php echo $bilheteria_eficiencia_regular ?>],
          ['Ruim', <?php echo $bilheteria_eficiencia_ruim ?>],
        ]);
        var options = {
          title: 'EFICI??NCIA'
        };
        var chart = new google.visualization.PieChart(document.getElementById('bilheteria_eficiencia'));
        chart.draw(data, options);
 //----------------------------------------- 
       
 var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['??timo',   <?php echo $bilheteria_cordialidade_otimo ?> ],
          ['Bom',      <?php echo $bilheteria_cordialidade_bom ?>],
          ['Regular',  <?php echo $bilheteria_cordialidade_regular ?>],
          ['Ruim', <?php echo $bilheteria_cordialidade_ruim ?>],
        ]);
        var options = {
          title: 'CORDIALIDADE'
        };
        var chart = new google.visualization.PieChart(document.getElementById('bilheteria_cordialidade'));
        chart.draw(data, options);
  //----------------------------------------- 
       
 var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['??timo',   <?php echo $condutores_cordialidade_otimo ?> ],
          ['Bom',      <?php echo $condutores_cordialidade_bom ?>],
          ['Regular',  <?php echo $condutores_cordialidade_regular ?>],
          ['Ruim', <?php echo $condutores_cordialidade_ruim ?>],
        ]);
        var options = {
          title: 'CORDIALIDADE'
        };
        var chart = new google.visualization.PieChart(document.getElementById('condutores_cordialidade'));
        chart.draw(data, options);
         //----------------------------------------- 
       
 var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['??timo',   <?php echo $condutores_postura_otimo ?> ],
          ['Bom',      <?php echo $condutores_postura_bom ?>],
          ['Regular',  <?php echo $condutores_postura_regular ?>],
          ['Ruim', <?php echo $condutores_postura_ruim ?>],
        ]);
        var options = {
          title: 'POSTURA'
        };
        var chart = new google.visualization.PieChart(document.getElementById('condutores_postura'));
        chart.draw(data, options);
         //----------------------------------------- 
       
 var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['??timo',   <?php echo $condutores_contex_otimo ?> ],
          ['Bom',      <?php echo $condutores_contex_bom ?>],
          ['Regular',  <?php echo $condutores_contex_regular ?>],
          ['Ruim', <?php echo $condutores_contex_ruim ?>],
        ]);
        var options = {
          title: 'CONTEXTO'
        };
        var chart = new google.visualization.PieChart(document.getElementById('condutores_contex'));
        chart.draw(data, options);
         //----------------------------------------- 
       
 var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['??timo',   <?php echo $condutores_valores_otimo ?> ],
          ['Bom',      <?php echo $condutores_valores_bom ?>],
          ['Regular',  <?php echo $condutores_valores_regular ?>],
          ['Ruim', <?php echo $condutores_valores_ruim ?>],
        ]);
        var options = {
          title: 'VALORES'
        };
        var chart = new google.visualization.PieChart(document.getElementById('condutores_valores'));
        chart.draw(data, options);
       //----------------------------------------- 
       
 var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['??timo',   <?php echo $instalacoes_conforto_otimo ?> ],
          ['Bom',      <?php echo $instalacoes_conforto_bom ?>],
          ['Regular',  <?php echo $instalacoes_conforto_regular ?>],
          ['Ruim', <?php echo $instalacoes_conforto_ruim ?>],
        ]);
        var options = {
          title: 'CONFORTO'
        };
        var chart = new google.visualization.PieChart(document.getElementById('instalacoes_conforto'));
        chart.draw(data, options);
       //----------------------------------------- 
       
 var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['??timo',   <?php echo $instalacoes_sinalizacao_otimo ?> ],
          ['Bom',      <?php echo $instalacoes_sinalizacao_bom ?>],
          ['Regular',  <?php echo $instalacoes_sinalizacao_regular ?>],
          ['Ruim', <?php echo $instalacoes_sinalizacao_ruim ?>],
        ]);
        var options = {
          title: 'SINALIZA????O'
        };
        var chart = new google.visualization.PieChart(document.getElementById('instalacoes_sinalizacao'));
        chart.draw(data, options);
       //----------------------------------------- 
       
 var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['??timo',   <?php echo $instalacoes_limpeza_otimo ?> ],
          ['Bom',      <?php echo $instalacoes_limpeza_bom ?>],
          ['Regular',  <?php echo $instalacoes_limpeza_regular ?>],
          ['Ruim', <?php echo $instalacoes_limpeza_ruim ?>],
        ]);
        var options = {
          title: 'LIMPEZA'
        };
        var chart = new google.visualization.PieChart(document.getElementById('instalacoes_limpeza'));
        chart.draw(data, options);
       //----------------------------------------- 
       
 var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['??timo',   <?php echo $instalacoes_conservacao_otimo ?> ],
          ['Bom',      <?php echo $instalacoes_conservacao_bom ?>],
          ['Regular',  <?php echo $instalacoes_conservacao_regular ?>],
          ['Ruim', <?php echo $instalacoes_conservacao_ruim ?>],
        ]);
        var options = {
          title: 'CONSERVA????O'
        };
        var chart = new google.visualization.PieChart(document.getElementById('instalacoes_conservacao'));
        chart.draw(data, options);
      
      }
    </script>
    <style>

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%; 
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  
}

/* Clear floats */
.row:after {
  content: "";
  display: table;
  clear: both;
  padding: 20px;
  }
  .column:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  
}
.title{
  float: center;
}
    </style>
  </head>
  <body>
<div class="row">
  <h1 class = "title" >CAF??</h1>
  <div class="column" id="cafe_atendimento" style="width: 300px; height: 200px;"></div>
  <div class="column" id="cafe_variedade" style="width: 300px; height: 200px;"></div>
  <div class="column" id="cafe_cordialidade" style="width: 300px; height: 200px;"></div>
  <div class="column" id="cafe_valores" style="width: 300px; height: 200px;"></div>
</div>

<div class="row">

<h1 class = "title" >LOJA</h1>
  <div class="column" id="loja_atendimento" style="width: 300px; height: 200px;"></div>
  <div class="column" id="loja_variedade" style="width: 300px; height: 200px;"></div>
  <div class="column" id="loja_cordialidade" style="width: 300px; height: 200px;"></div>
  <div class="column" id="loja_valores" style="width: 300px; height: 200px;"></div>
</div>

<div class="row">
  
<h1 class = "title" >BILHETERIA</h1>
  <div class="column" id="bilheteria_atendimento" style="width: 300px; height: 200px;"></div>
  <div class="column" id="bilheteria_eficiencia" style="width: 300px; height: 200px;"></div>
  <div class="column" id="bilheteria_cordialidade" style="width: 300px; height: 200px;"></div>

</div>


<div class="row">

<h1 class = "title" >CONDUTORES</h1>
  <div class="column" id="condutores_cordialidade" style="width: 300px; height: 200px;"></div>
  <div class="column" id="condutores_postura" style="width: 300px; height: 200px;"></div>
  <div class="column" id="condutores_contex" style="width: 300px; height: 200px;"></div>
  <div class="column" id="condutores_valores" style="width: 300px; height: 200px;"></div>
</div>

<div class="row">

<h1 class = "title" >INSTALA????ES</h1>
  <div class="column" id="instalacoes_conforto" style="width: 300px; height: 200px;"></div>
  <div class="column" id="instalacoes_sinalizacao" style="width: 300px; height: 200px;"></div>
  <div class="column" id="instalacoes_limpeza" style="width: 300px; height: 200px;"></div>
  <div class="column" id="instalacoes_conservacao" style="width: 300px; height: 200px;"></div>
</div>

  </body>
</html>
