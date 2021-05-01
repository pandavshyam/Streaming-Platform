<?php
require 'finaldb.php';

$anlytics=new Dbconn();

$liveusers=$anlytics->getallUsers();
$allusers=array();
while($row=$liveusers->fetch_assoc()){
    $allusers[]=$row;

}

echo json_encode($allusers);

?>