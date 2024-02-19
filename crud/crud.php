<?php
$conn=new mysqli("localhost","root","","prince");
if(!$conn){
    die(mysqli_error($conn));
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation in php</title>
    <link rel="stylesheet" href="crud.css">
</head>
<body>
    <div class="container">
    <button id="create"><a href="create.html">create</a></button>
<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Gender</th>
        <th>Mobile</th>
        <th>Address</th>
        <th>Operation</th>
    </thead>
<?php
$qry="select * from crud";
$result=mysqli_query($conn,$qry);
if($result){
    // echo "data retrived";
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        echo '<tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['email'].'</td>
        <td>'.$row['password'].'</td>
        <td>'.$row['gender'].'</td>
        <td>'.$row['mobile'].'</td>
        <td>'.$row['address'].'</td>
        <td>
        <button id="update"><a href="updateform.php?uid='.$id.'">update</a></button>
        <button id="delete"><a href="delete.php?id='.$id.'">delete</a></button>
        </td>
    </tr>';
    }
}
?>


</table>
    </div>
   
</body>
</html>