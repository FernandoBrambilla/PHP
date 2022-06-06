<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
    </head>
<body>
    

<div>
<?php
    $estado=$_GET['estado'];
    switch ($estado){
        case "Paraná";
        case "Santa Catarina";
        case "Rio Grande do Sul";
        echo "O estado $estado fica na região Sul";
        break;
    }
    switch ($estado){
        case "São Paulo";
        case "Minas Gerais";
        case "Espírito Santo";
        case "Rio de Janeiro";
        echo "O estado $estado fica na região Suldeste";
        break;
    }
    switch ($estado){
        case "Mato Grosso do Sul";
        case "Mato Grosso";
        case "Goiás";
        case "Distrito Federal";
        echo "O estado $estado fica na região Centro-Oeste";
        break;
    }
    switch ($estado){
        case "Rondônia";
        case "Amazonas";
        case "Acre";
        case "Rorâima";
        case "Pará";
        case "Amapá";
        case "Tocantins";
        echo "O estado $estado fica na região Norte";
        break;
    }
    switch($estado){
        case "Bahia";
        case "Sergipe";
        case "Alagoas";
        case "Pernanbuco";
        case "Paraíba";
        case "Rio Grande do Norte";
        case "Ceará";
        case "Piauí";
        case "Maranhão";
        echo "O estado $estado fica na região Nordeste";
        break;
    }
?>
<br/>
<a class="botao" href="index.html">VOLTAR</a>

</div>

</body>
</html>