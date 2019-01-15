<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio3</title>
        <link rel="stylesheet" type="text/css" href="css/dep2.css">
    </head>
    <body>
        
        <section class="D2">
          <table>
          <tr><td>PORCENTAJE</td><td>VALOR</td><td>VIDA ÚTIL</td><td>AÑO</td></tr>
        <?php
        $nombre=$_GET['nombre'];
        $valor=$_GET['valor'];
        $vida=$_GET['vida'];
        $porcentaje=$_GET['porcentaje'];
        $anio=2016;
        
        for($i=$vida;$i>0;$i--)
        {
            echo "<tr>";
            echo "<td>".$porcentaje."</td>";
            echo "<td>".$valor."</td>";
            echo "<td>".$vida."</td>";
            echo "<td>".$anio."</br>";
            echo  "</tr>";
            $valor=$valor-$valor*$porcentaje/100;
            $vida--;
            $anio++;
        }
        
        ?>
        </table>
            </section>
    </body>
</html>
