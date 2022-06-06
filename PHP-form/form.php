<!DOCTYPE html>
<html lang="pt">
<head>
    <?php
    $text= $_GET["t"];
    $tam= $_GET["tam"];
    $cor=$_GET["cor"];
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    

<div>
    
<span class="texto">
    <?php
    echo $text;
    ?>
</span>

<link rel="stylesheet" href="">


</div>

</body>
</html>