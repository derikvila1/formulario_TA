
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/relatorio.css">
    <title>Relatório</title>
</head>
<body>
    

    <div class="container" style="overflow-x:auto ;">
    
        <table class="table">
        
        <h1 class="titulo">CRITICAS E ELOGIOS</h1>
            
        <thead>
              <tr class="tra">
                <th scope="col">Nome</th>
                <td>
                <th scope="col">Contato</th>
                <td>
                <th scope="col">Pais</th>
                <td>
                <th scope="col">Cidade</th>
                <td>
                <th scope="col">Criticas/Elogios</th>
                <td>
                <th scope="col">Data_Visita</th>
                <td>
              </tr>
            </thead>
            <tbody>
                <?php

                    foreach ( $status as $fi ) {
                        //echo($fi->nome);
                            echo"<tr>";
                          echo"<td>".($fi->nome)."<td>";
                          echo"<td>".($fi->contato)."<td>";
                          echo"<td>".($fi->pais)."<td>";
                          echo"<td>".($fi->cidade)."<td>";
                          echo"<td>".($fi->criticas_elogios)."<td>";
                          echo"<td>".($fi->created_at)."<td>";
                          echo"</tr>";
                    }       
                ?>
            </tbody>
          </table>
    </div>

</body>
</html>