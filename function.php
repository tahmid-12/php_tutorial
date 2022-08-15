<?php
    $title = "Function";

    function sum($a, $b){
        return $a + $b;
    }

    $result = sum(2,5);

    function output($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }

    $value = [
        "Toyota",
        "Nissan",
        "Honda"
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document <?= $title ?></title>
</head>
<body>
    <?=
        $result; 
        output($value)
    ?>
</body>
</html>