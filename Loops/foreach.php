<?php
    $title = "For Each";

    $cars = [
        'Toyota',
        'Nissan',
        'Honda'
    ];

    $models = [
        "Nissan" => "X-Trail",
        "Toyota" => "Prado",
        "Honda" => "Vezel",
        "Suzuki" => "Altima"
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
        <?php
          foreach($cars as $car){
              echo "<tr>
                <td>$car</td>
              </tr>";
          }
        ?>
    </table>

    <table>
        <?php
          foreach($models as $key => $car){
              echo "<tr>
                <td>$key</td><td>$car</td>
              </tr>";
          }
        ?>
    </table>
</body>
</html>