<?php

$con=new mysqli('localhost','root','','abc');
if(!$con){
    die(mysqli_error($con));
}

?>