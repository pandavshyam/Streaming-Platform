<?php
require 'finaldb.php';

$anlytics=new Dbconn();

$usercount=$anlytics->getCount();

$resulttosend=array("count"=>$usercount);

echo json_encode($resulttosend);

?>