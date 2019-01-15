<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1</title>
        <link rel="stylesheet" type="text/css" href="css/imc.css">
    </head>
    <body>
        
        <section class="IMC">
        <?php
        $estatura = $_GET['estatura'];
        $peso = $_GET['peso'];
        if ($estatura == 0) {
            $imc = "ERROR ESTATURA 0";
        } else {
            $imc = $peso / ($estatura * $estatura);
        }
        
        if($imc<16)
        {
        $mensaje="Infrapeso: Delgadez severa";
        }elseif($imc>=16 && $imc<=16.99)
            {
            $mensaje="Infrapeso: Delgadez moderarda";
            }elseif($imc>=17 && $imc<=18.49)
            {
            $mensaje="Infrapeso: Delgadez aceptable";
            }elseif($imc>=18.50 && $imc<=24.99)
            {
            $mensaje="Peso normal";
            }elseif($imc>=25 && $imc<=29.99)
            {
            $mensaje="Sobrepeso";
            }elseif($imc>=30 && $imc<=34.99)
            {
            $mensaje="Obeso: Tipo I";
            }elseif($imc>=35 && $imc<=40)
            {
            $mensaje="Obeso: Tipo II";
            }elseif($imc>40)
            {
            $mensaje="Obeso: Tipo III";
            }                  
        ?>
              
            <h2>El IMC es: <?php echo $imc ?> </h2> 
            <table>
        <?php 
        if($estatura!=0)
                {
                  echo "Atendiendo el IMC, tiene: ".$mensaje."</br></br></br>";
                  echo "Clasificación de la Oraganización Mundial de la Salud: </br>";
                  echo "<tr><td>ÍNDICE MASA CORPORAL</td> <td>CLASIFICACÓN</td></tr>";
                  echo "<tr><td> <16.00 </td>        <td>Infrapeso: Delgadez severa</td></tr>";
                  echo "<tr><td>16.00 - 16.99</td>   <td>Infrapeso: Delgadez moderada</td></tr>";
                  echo "<tr><td>17.00 - 18.49</td>   <td>Infrapeso: Delgadez aceptable</td></tr>";
                  echo "<tr><td>18.50 - 24.99</td>   <td>Peso Normal</td></tr>";
                  echo "<tr><td>25.00 - 29.99</td>   <td>Sobrepeso</td></tr>";
                  echo "<tr><td>30.00 - 34.99</td>   <td>Obeso: Tipo I</td></tr>";
                  echo "<tr><td>15.50 - 40.00</td>   <td>Obeso: Tipo II</td></tr>";
                  echo "<tr><td>>40.00</td>          <td>Obeso: Tipo III</td></tr>";
                }
                
        ?>
        </table>
        </section>
       
        
    </body>
</html>
