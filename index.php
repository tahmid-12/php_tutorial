<?php

    include('./partials/header.php');

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        
        if ($email == false) {
          $status = 'Please enter a valid email address';
        }
    }

    // if (isset($_POST['login'])) {
    //   output($_POST);
    // }


?>
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="text" name="email" id="email" />
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" id="password" />
            </div>
            <div class="from-group">
                <input type="submit" name="login" value="Login" />
            </div>
        </form>
    </div>
    <div class="row">
        <?php 
          if (isset($status)) {
            echo $status;
          }
        ?>
    </div>
    
<?php 
    include('./partials/footer.php')
?>