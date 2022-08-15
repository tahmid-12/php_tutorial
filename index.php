<?php
 
    // $cars = ["Toyota","Nissan","Honda","Suzuki"];
    // echo $cars;
    // print_r($cars);
    // echo $cars[8];
    // if(isset($cars[8])){
    //     echo $cars[8];
    // }else{
    //     echo "Not found in array as it exceeds the array length";
    // }

    $models = [
        "Nissan" => "X-Trail",
        "Toyota" => "Prado",
        "Honda" => "Vezel",
        "Suzuki" => "Altima"
    ];

    if(isset($models["toyota"])){
        echo $models["Toyota"];
    }else{
        echo "Not Found";
    }

?>