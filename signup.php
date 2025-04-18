<?php

    $email=$_POST['email'];
    $password=$_POST['password'];   
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];

    if (strlen($password) < 8) {
        echo "<script>alert('Password must be at least 8 characters long.');</script>";
        include 'signup.html'; 
        exit(); 
    }
    
    $cn=mysqli_connect("localhost","root","","grocery_management");
    if($cn)
    {
        $qry="insert into sign values('$email','$password','$fname','$lname')";
        mysqli_query($cn,$qry);
        echo "<script>alert('Your id is succcessfully updated');</script>";
        include 'signup.html';     
        
        header('location:index.html');
        mysqli_close($cn);
    }
    else
    {
        echo "Error in connection";
    }
?>


