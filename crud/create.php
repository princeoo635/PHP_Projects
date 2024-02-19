<?php

if($_SERVER['REQUEST_METHOD']== 'POST')
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $gender=$_POST['gender'];
  $mobile=$_POST['mobile'];
  $address=$_POST['address'];
echo $gender;
$conn=new mysqli("localhost","root","","prince");
if($conn){
    // echo "connection successfully";
    $qry="insert into crud(name,email,password,gender,mobile,address)values('$name','$email','$password','$gender',$mobile,'$address')";
    $result=mysqli_query($conn,$qry);
    if($result){
       header('location:crud.php');
    
    }
    else{

        die(mysqli_error($conn));
    }
}
else{
    die(mysqli_error($conn));
}
}
else{
    echo "Invalid Method";

}
?>