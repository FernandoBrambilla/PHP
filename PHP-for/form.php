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
    $num=$_GET['num'];
    $totmult=0;
    echo "Analisando o número $num..."; 
    echo "<br/>";
    echo "Valores Múltiplos: "; 
    for($cont=1;$cont<=$num;$cont++){
        if($num%$cont==0){
            echo "$cont ";
            $totmult++;
        }
    }
    echo "<br/>";
        if($totmult<=2){
            echo "O número $num É PRIMO";
        }
        else{
            echo "O número $num NÃO É PRIMO";
        }
    echo "<br/>";
    echo "Total de Múltiplos: $totmult";
    echo "<br/>";    
?>      
<br/>
<br/>
<br/>
<a class="botao" href="index.html">VOLTAR</a>

</div>

</body>
</html>