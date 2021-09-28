<?php

session_start();
if(isset($_SESSION['unique_id'])){
    include_once "config.php";
    $outgoing_id=mysqli_real_escape_string($con,$_POST['outgoing_id']);
    $ingoing_id=mysqli_real_escape_string($con,$_POST['ingoing_id']);
    $message=mysqli_real_escape_string($con,$_POST['message']);

    if(!empty($message)){
        $sql= mysqli_query($con,"INSERT INTO messages (ingoing_msg_id,outgoing_msg_id,msg)
                            VALUES ({$ingoing_id},{$outgoing_id},'{$message}')") or die();
    }
}else{
    header("../login.php");
}

?>