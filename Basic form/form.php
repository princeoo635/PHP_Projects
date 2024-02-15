<?php
$sever="localhost";
$username="root";
$dbpassword="";
$database="prince";



if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
   $email=$_POST['email'];
   $gender=$_POST['gender'];
   $mobile=$_POST['mobile'];
   $password=$_POST['password'];





$conn= new mysqli($sever,$username,$dbpassword,$database);
if($conn){
    // echo "connection made";
    $qry="insert into data(name,email,gender,mobile,password) values('$name','$email', '$gender',  '$mobile','$password')";
    $result=mysqli_query($conn,$qry);
    if($result){
        echo "data entry successful";

    }
    else{
        die(mysqli_erroor($conn));
    }

}
else{
    die(mysqli_erroor($conn));
}
}
else{
    echo "invalid Request method";
}

?>