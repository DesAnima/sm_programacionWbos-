<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <p> Cantidad de notas a promediar <input type="text" name="cantidad"></p>
        <input type="submit">
    </form>
    <?php 
    if($_POST){
        $cantidad = $_POST["cantidad"];
        $x=1;
        while($x<=$cantidad){
            ?>
            <p><input type="text"></p>
            <?php
            $x++;

            
        }
    }
    ?>