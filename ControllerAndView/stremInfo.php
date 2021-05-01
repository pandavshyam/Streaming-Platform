<?php
    session_start();
    include 'db.php';
    $msg = "";
    if (isset($_POST['action'])){
        $title = $_POST['Title'];
        $streamDate = $_POST['streamDate'];
        $startTime = $_POST['startTime'];
        $endTime = $_POST['endTime'];
        $_SESSION['streamDate'] = $streamDate;
        $_SESSION['startTime'] = $startTime;
        $_SESSION['endTime'] = $endTime;

        $sql = "insert into streamInfo (title,date,start,end) values ('$title','$streamDate','$startTime','$endTime')";
        $result = $conn->query($sql);
        if ($result){
            $msg = "Saved";
            header("refresh:0;url=home.php");
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Details</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="public/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="public/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />


    <link rel="stylesheet" type="text/css" media="screen" href="public/css/materialize.css">
    <link rel="stylesheet" type="text/css" media="screen" href="public/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <script src="public/jquery-3.2.1.min.js"></script>

    <script src="public/js/materialize.js"></script>
    <script src="public/js/materialize.min.js"></script>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <section style="margin-top: 50px;" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form class="contact__form" method="POST" action="stremInfo.php" autocomplete="off">
                        <div class="card">
                            <div class="card-body">
                                <h5><center><b><?php echo $msg;?></b></center></h5>
                                <h6 style="color: teal;"><b>Stream Detail</b></h6>
                                <!-- form element -->
                                <div class="row">
                                    <div class="col s12">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input name="Title" id="Title" type="text" class="validate"  required>
                                                <label for="Title">Title</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="row">
                                            <div class="input-field col s4">
                                                <input name="streamDate" id="streamDate" type="date" class=""  required>
                                                <label for="streamDate">Stream Date</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <input name="startTime" id="startTime" type="time"  required>
                                                <label for="startTime">Start Time</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <input name="endTime" id="endTime" type="time"  required>
                                                <label for="endTime">End Date</label>
                                            </div>
                                        </div>
                                        <div class="col s6 offset-s3 center" id="submitform">
                                            <button class="btn waves-effect waves-light teal lighten-1" type="submit" name="action" style="color: white;">Save
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
<script>
    $('.datepicker').datepicker({
        //dateFormat:"dd/mm/yy",
        yearRange: [1919, 2019],
        changeMonth: true,

        //changeYear:true

    });
</script>

</html>