<?php
    session_start();
    $msg1 = "";
    $msg = "";
    require 'db.php';
    if(isset($_SESSION['msg'])){
        $msg = $_SESSION['msg'];
    }
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "select * from signUp where email='$email'";
        $result = $conn->query($sql);
        $result1 = $result->fetch_assoc();
        if($result1){
            $_SESSION['email'] = $email;
            header('Location: home.php');
        } else {
            $msg1 = "Enter Correct Details";
        }
    }

?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
</head>

<body>
    <b><center><?php echo $msg;?></center><b>
    <h4 style="text-align: center;">Login</h4>
    <div id="user-login" class="row" style="width: 500px;">
        <div class="col s12 z-depth-6 card-panel">
            <form class="login-form" method="POST" action="login.php">
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-social-person-outline prefix"></i>
                        <input class="validate" id="user_email" type="email" name="email" required>
                        <label for="email" data-error="wrong" data-success="right" class="center-align">Email</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-action-lock-outline prefix"></i>
                        <input id="user_pass" type="password" name="password"  required>
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="submit" value="LOGIN" name="submit" class="btn waves-effect waves-light col s12">
                    </div>
                </div>
                <div class="row">
                    <b><?php echo $msg1;?></b>
                </div>
                <div class="row">
                    <div class="input-field col s6 m6 l6">
                        <p class="margin medium-small"><a href="register1.php">Register Now!</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>