<?php

$con=mysqli_connect("localhost","root","","chatphp");
if(!$con){
    echo "database connected". mysqli_connect_error();
}
?>