<?php
$name=$_REQUEST['Name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];

if(isset($_POST['button'])){
    $host="localhost";
    $user="root";
    $pass="";
    $db="aya";



    $conn = mysqli_connect($host,$user,$pass,$db);
    $insert="insert into customers values('$name','$email','$message')";
    mysqli_query($conn,$insert);
    if($conn){
        
        echo("<h1 style=color:green;> Your Registartion is Done!</h1>");
        

    }
    else{
        echo("<h1 style=color:red;> Your Registartion is Failed </h1>");
    }
   
}





?>
