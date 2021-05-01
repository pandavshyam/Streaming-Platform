<?php

class Dbconn{
public $connection;
function __construct(){
    
    $this->connection=new mysqli("localhost","root","password","wtProject");
    if ($this->connection->connect_error) {
        die("Connection failed: " . $this->connection->connect_error);
    }
    
}

public function getallUsers(){
    
    $getdata="select email from signUp";
    $result=mysqli_query($this->connection, $getdata);   
    if ($result->num_rows>0) {
        return $result;
    } else {
        return false;
    }
}

public function getcount(){
    $cityquery="select * from signUp";
    $result=mysqli_query($this->connection,$cityquery);

    return $result->num_rows;
}
}
?>