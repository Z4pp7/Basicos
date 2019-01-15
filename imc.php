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
       
        <section class="Datos">
        <form action="calculoimc.php">
            Ingrese su estatura:</br>
            <input type="text" name="estatura" required="true " placeholder="Metros" class="estatura"/></br>
            Ingrese su peso:</br>
            <input type="text" name="peso" required="true" placeholder="Kilogramos" class="peso"/></br>
            <input type="submit" value="Calcular IMC" class="CalIMC"/>
        </form>
        </section>    
    </body>
</html>
