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
        <section class="Datos2">
        <form action="depreciacion_calc.php">
            Nombre del bien: </br>
            <input type="text" name="nombre" required="true "  class="nombre"/></br>
            Valor: </br>
            <input type="text" name="valor" required="true "  placeholder="Dolares" class="valor"/></br>
            Vida útil: </br>
            <input type="number" name="vida" required="true "  placeholder="Años" class="vida" /></br>
            <input type="submit" value="Calcular depreciación" class="CalDep"/>
        </form>
        </section>
    </body>
</html>
