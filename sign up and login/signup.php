<?php  
$user=$_POST['user'];
$password=$_POST['password'];
$servername="localhost";
$username="root";
$dbpasssword="";
$dbname="prince";
 
$conn= new mysqli($servername,$username,$dbpasssword,$dbname);
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
else
{
    echo "successfully connected";
    $qry="insert into login(username,password) values(?,?)";
    $stmt=$conn->prepare($qry);
    $stmt->bind_param("ss",$user,$password);
    $stmt->execute();
    
    
    header('location:login.html');
}


?>