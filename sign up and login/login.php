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
// else
// {
//     echo "successfully connected";
// }
$qry="select username,password from `login` where username='$user' && password='$password'";
$result=$conn->query($qry);
if($result->num_rows > 0)
{
    // $row=$result->fetch_assoc();
    // echo "username:".$row["username"];
    // echo "<br>";
    // echo "login successful";
    session_start();
    $_SESSION['username']=$user;
    header('location:mri.html');
}
else{
    echo "Not an existing User";
}

?>