<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2</title>
          <link rel="stylesheet" type="text/css" href="css/dep.css">
    </head>
    <body>

        <section class="D1">
            <table >
                <tr><td>VALOR</td><td>VIDA ÚTIL</td><td>AÑO</td></tr>
                <?php
                $nombre = $_GET['nombre'];
                $valor = $_GET['valor'];
                $vida = $_GET['vida'];
                $anio = 2016;

                for ($i = $vida; $i > 0; $i--) {
                    
                  
                    echo "<tr>";
                    echo "<td>" . $valor . "</td>";
                    echo "<td>" . $vida . "</td>";
                    echo "<td>" . $anio . "</br>";
                    echo "</tr>";
                    $valor = $valor * 0.7;
                    $vida--;
                    $anio++;
                }
                ?>
            </table>
        </section>
    </body>
</html>
