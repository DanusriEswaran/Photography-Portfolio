<?php
include'dat.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $city=$_POST['city'];
    $number=$_POST['number'];
    $event=$_POST['event'];
    $message=$_POST['message'];
    $sql="insert into contact(name,email,city,number,event,message) 
         values('$name','$email','$city','$number','$event','$message')";
        if(mysqli_query($con,$sql))
        {
            echo '<script src="sweetalert/lib/sweetalert.min.js">';
            echo '<link rel="stylesheet" type="text/css" href="sweetalert/lib/sweet-alert.css">';
            echo 'swal({   title: "Record added successfully!",   
                           text: "I will close  in 2 seconds.",   
                            timer: 2000 
                   });';
            echo '</script>';
        }
        else
        {
            echo "error: ".mysqli_error($con);
        }
        mysqli_close($con);
}
?>
