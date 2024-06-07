<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>x: </label><br>
        <input type="text" name="x">
        <label>y: </label><br>
        <input type="text" name="y">
        <label>z: </label><br>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    //$total = abs($x); // modul
    //$total = round($x); // yuvarlaqlasdirma
    //$total = floor($x); // yuvarlaqlasdirma min
    //$total = ceil($x); // yuvarlaqlasdirma max
    //$total = sqrt($x); // kokalti
    //$total = pow($x, $y); // quvvet ustu
    //$total = max($x, $y, $z); // max olan verir
    //$total = min($x, $y, $z); // min olan verir
    //$total = pi(); 3.14
    //$total = rand(1, 6); random ededler - araliqda

    // echo $x;
    echo $total;
?>