<?php
$conn=new mysqli("localhost","root","","prince");
if(!$conn){
    die(mysqli_error($conn));
}
else{
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $qry="delete from crud where id=$id";
        $result=mysqli_query($conn,$qry);
        header('location:crud.php');
    }
    else{
        die(mysqli_error($conn)); 
    }
}
?>
