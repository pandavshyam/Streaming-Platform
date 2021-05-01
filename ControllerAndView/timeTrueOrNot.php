<?php
    session_start();
    if (!(isset($_SESSION['email']))){
        header("refresh:0;url=login.php");
    }
    include 'db.php';
    date_default_timezone_set("Asia/Calcutta");

    $streamDate = $_SESSION['streamDate'];
    $startTime = $_SESSION['startTime'];
    $endTime = $_SESSION['endTime'];

    $new = substr($streamDate,8,2);
    

    $today = date('d');
    $msg = "";
    $currentHour =  date('H');
    $startTime = substr($startTime,0,2);
    $endTime = substr($endTime,0,2);
    echo $currentHour;
    echo "<br>";
    echo $startTime;
    echo "<br>";
    echo $endTime;
    if (!($new == $today)){
        $msg = "Streaming will be avalaible on $streamDate";
    } else {
        if ($currentHour >= $startTime && $currentHour <= $endTime){
            header("refresh:0;url=http://localhost:3000/emitter.html");
        } else {
            $msg .= "Streaming will be started at $startTime:00";
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Stream</title>
</head>

<body>
    <center>
        <h1><?php echo $msg;?></h1>
    </center>
</body>

</html>