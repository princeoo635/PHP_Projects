<?php  
$servername="localhost";
$username="root";
$dbpasssword="";
$dbname="prince";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $user=$_POST['user'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    
    $conn= new mysqli($servername,$username,$dbpasssword,$dbname);
    if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
    }
    else
    {
       if( $password== $cpassword)
       {
           $qry="insert into login(username,password) values(?,?)";
           $stmt=$conn->prepare($qry);
           $stmt->bind_param("ss",$user,$password);
           $stmt->execute();   
           header('location:login.html');
        }
        else{
            echo "Enter the same password";
        }
    }    
}
else{
    echo "Invalid Request Method";
}
?>