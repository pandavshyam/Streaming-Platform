<?php
    include 'header.php';
    // if (!(isset($_SESSION['email']))){
    //     header("refresh:0;url=loginAdmin.php");
    // }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <script src="public/jquery-3.2.1.min.js">
    <script>
            $(document).ready(function(){
                $.get("getlivecount.php",function(data,success){
                    console.log(data+" "+success);
                    var data=JSON.parse(data);
                    var livecount=data['count'];
                    $("#livecount").text(livecount);
                    console.log(livecount)
                });
                
              
                    $.get("getliveusers.php",function(data,success){
                    console.log(data+" "+success);
                    var data=JSON.parse(data);
                    for(var i=0;i<data.length;i++){
                        $("#liveusers").append('<p>'+data[i].username+'</p>');
                    }
                    console.log(data)
            });
            });
    </script>
    <style>
        .grid-container {
            display: grid;
            grid-template-areas: 'left right';
            grid-gap: 10px;
            padding: 10px;
            margin-top: 50px;
            margin-left: 50px;
            margin-right: 50px;
        }
        
        .item1 {
            grid-area: left;
            background-color: black;
            height: 500px;
            border-radius: 10%;
        }
        
        .item2 {
            grid-area: right;
            background-color: tomato;
            height: 500px;
            border-radius: 10%;
        }
    </style>
</head>

<body>
    <div class="grid-container">
        <div class="item1">
        <div> 
            <p id="livecount"></p>
        </div>
        </div>
        <div class="item2">
        <div id="liveusers">
        </div>
        </div>
    </div>
</body>

</html>