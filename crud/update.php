<?php
$conn=new mysqli("localhost","root","","prince");
if(!$conn){
    die(mysqli_error($conn));
}

  if($_SERVER['REQUEST_METHOD']== 'POST'){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    // echo $id;
    // echo $name;
    // echo $email;
    // echo $password;
    // echo $gender;
    // echo $mobile;
    // echo $address;
      $qry="update crud set id=$id,name='$name',email='$email',password='$password',gender='$gender',mobile=$mobile,address='$address' where id=$id";
      $result=mysqli_query($conn,$qry);
      if($result){
        // echo "update successful";
        header('location:crud.php');
      }
      else{
        die(mysqli_error($conn));
      }
  }  


?>
 

                