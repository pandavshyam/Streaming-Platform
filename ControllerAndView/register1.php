<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
</head>

<body>
    <h4 style="text-align: center;">Register Form</h4>
    <div id="register-page" class="row" style="width: 500px;">
        <div class="col s12 z-depth-6 card-panel">
            <form class="register-form" method="POST" action="register1.php">
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-social-person-outline prefix"></i>
                        <input id="user_name" type="text" class="validate" name="user_name">
                        <label for="user_name" class="center-align">Name</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-communication-email prefix"></i>
                        <input id="user_email" type="email" class="validate" name="email">
                        <label for="user_email" class="center-align">Email</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-action-lock-outline prefix"></i>
                        <input id="user_passw" type="password" class="validate" name="password">
                        <label for="user_passw">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <a href="#" class="btn waves-effect waves-light col s12"><input type="submit" value="Register Now" name="submit"></a>
                    </div>
                    <div class="input-field col s12">
                        <p class="margin center medium-small sign-up">Already have an account? <a href="login.html">Login</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<?php
    require 'db.php';
    session_start();
    if(isset($_POST['submit'])){
        $name = $_POST['user_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "insert into signUp (name,email,password) values ('$name','$email','$password')";
        $success = $conn->query($sql);
        if($success){
            $_SESSION['msg'] = "Registration Successfull! Please Log in to continue..";
            header('Location: login.php');
        } else {
            echo "Error in creating account";
        }
    }
?>

</html>