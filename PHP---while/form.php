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
        $ini=$_GET["ini"]?$_GET["ini"]:"";
        $fim=$_GET["fim"]?$_GET["fim"]:"";
        $incr=$_GET["incr"]?$_GET["incr"]:"";
        if ($ini<$fim){
            while($ini<=$fim){
                echo "$ini ";
                $ini=$ini+$incr;
            }
        }
        else {
            while($ini>=$fim){
                echo "$ini ";
                $ini=$ini-$incr;
            }
        }
    ?>
    <br/>
    <br/>
    <br/>
    <a class="botao" href="index.html">VOLTAR</a>
</div>
</body>
</html>