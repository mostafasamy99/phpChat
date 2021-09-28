<?php

session_start();
include_once "config.php";

$fname=mysqli_real_escape_string($con,$_POST['fname']);
$lname=mysqli_real_escape_string($con,$_POST['lname']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$pass=mysqli_real_escape_string($con,$_POST['pass']);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($pass)){
    
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        $sql =mysqli_query($con ,"SELECT email FROM users WHERE email ='{$email}'");
        if(mysqli_num_rows($sql)>0){
            echo "$email -already exist";
        }else{
            if(assert($_FILES['image'])){
                $img_name=$_FILES['image']['name'];
               // $img_type=$_FILES['image']['type'];
                $tmp_name=$_FILES['image']['tmp_name'];

                $img_explde=explode('.',$img_name);
                $img_ext=end($img_explde);

                $extenstions =['png','jpeg','jpg'];
                if(in_array($img_ext,$extenstions)===true){
                    $time=time();

                    $new_img_name=$time.$img_name;

                    if(move_uploaded_file($tmp_name,"images/".$new_img_name)){
                        $status="Active now";
                        $random_id= rand(time(), 100000);

                        $sql2=mysqli_query($con ,"INSERT INTO users (unique_id,fname,lname,email,password,img,status)
                                                                VALUES ({$random_id},'{$fname}','{$lname}','{$email}','{$pass}','{$new_img_name}','{$status}')");

                        if($sql2){
                            $sql3=mysqli_query($con,"SELECT * FROM users WHERE email= '{$email}'");
                            if(mysqli_num_rows($sql3)>0){
                                $row =mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id']=$row['unique_id'];
                                echo "success";
                            }
                        }else{
                            echo "something went wrong";
                        }
                                                                
                    }
                }else{
                    echo "select an vaild image ";
                }

            }else{
                echo "select an image";
            }
        }
    }
    else{
        echo "$email -This is not a valid email";
    }
}
else{
    echo "All inputs fields are required";
}
?>