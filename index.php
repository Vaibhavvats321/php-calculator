<?php
$error = "";
$x= "";
$y= "";
$result= "";

echo "hello1";
 if(isset($_GET['operation'])){
    $x = $_GET['num1'];
    $y= $_GET['num2'];
    $op=$_GET['operation'];

if(is_numeric($x) && is_numeric($y)){
    switch ($op) {
        case 'add': $result = $x + $y;
            break;
        case 'sub': $result = $x - $y;
            break;
        case 'mult': $result = $x * $y;
            break;
        case 'div': $result = $x  / $y;
            break;
    }
}

else{
    $error ="Enter number first";
}

 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php calculator</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<div id="headerSection">

<h1>CALCULATOR USING PHP</h1>
<hr>
</div>

<div id="bodySection">
    <h1><?=$error?></h1>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" id="vaibhav">

    <!-- NUMBER1 -->
    <div>
        <label for="num1">NUMBER 1</label>
        <input type="number" name="num1" id="num1" value="<?= $x ?>">
    </div>
    <br>
    <br>
    
    <!-- NUMBER 2 -->
    <div>
        <label for="num2">NUMBER 2</label>
        <input type="number" name="num2" id="num2"  value="<?= $y ?>">
    </div>
<br>
<br>

    <!-- RESULT -->
    <div>
    <label for="result">RESULT</label>
        <input type="number" id="result" name="result" value="<?= $result ?>" disable>
    </div>
<br>
<br>
    <!-- OPERATIONS -->
    <div>
        <input type="submit" value="add" name="operation">
        <input type="submit" value="sub" name="operation">
        <input type="submit" value="mult" name="operation">
        <input type="submit" value="div" name="operation">
    </div>
    </form>
</div>
</body>
</html>