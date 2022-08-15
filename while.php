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
        <!-- While Loop -->
        <?php
          $i = 0;

          while($i < count($cars)){
            //   $car = $cars[$i];
            echo "<tr>
                <td>$cars[$i]</td>
            </tr>";

            $i++;
          } 
        ?>
    </table>




</body>
</html>