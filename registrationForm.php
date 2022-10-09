<?php
session_start();
    if(isset($_POST['name'])){
    $con= mysqli_connect('localhost','root',"");
    mysqli_select_db($con,'personal');
    echo 'I am here';
    $name = $_POST['fullname'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $phone= $_POST['age'];
    $address=$_POST['religion'];
    $query= "select * from usertable where email='$email'";
    $result= mysqli_query($con,$query);
    $num = mysqli_num_rows($result);
    if($num == 1){
        echo "This email already taken please give new email";
    }
    else{
        $query2="insert into usertable(name,email,phone,address)
        values('$name','$email','$password','$phone','$address')";
        mysqli_query($con,$query2);
        echo "Registration is successfull";
        header('location:logInForm.html');

    }
    }else{
        echo "Invalid attempt";
    }









?>