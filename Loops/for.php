<?php
    $title = "For Loop";

    $cars = [
        'Toyota',
        'Nissan',
        'Honda'
    ];

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
    <table>
        <!-- For Loop -->
        <?php
            for($i=0; $i<count($cars); $i++){
                // $car = $cars[$i];
                // echo "$car<br />";
                echo "<td>$cars[$i]</td>";
            } 
        ?>
        <!-- For Each Loop -->
        <?php
          foreach($cars as $car){
              echo "<tr>
                <td>$car</td>
              </tr>";
          }
        ?>
    </table>




</body>
</html>