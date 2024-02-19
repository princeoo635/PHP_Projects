<?php
$conn=new mysqli("localhost","root","","prince");
if(!$conn){
    die(mysqli_error($conn));
}
if(isset($_GET['uid']))
{
    $id=$_GET['uid'];
    $qry="select * from crud where id=$id";
    $result=mysqli_query($conn,$qry);

        $row=mysqli_fetch_assoc($result);
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $password=$row['password'];
        $gender=$row['gender'];
        $mobile=$row['mobile'];
        $address=$row['address'];
    
    // echo $id;
    // echo $name;
    // echo $email;
    // echo $password;
    // echo $gender;
    // echo $mobile;
    // echo $address;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>update</h1>
        <form action="update.php" method="post">
        <div class="box">
                <label for="id">id</label>
                <input type="number" id="id" name="id" value="<?php echo $id; ?>">
                </div>
            <div class="box">
                <label for="name">name</label>
                <input type="text" id="name" name="name"  value="<?php echo $name; ?>">
                </div>
                <div class="box">
                <label for="email">email</label>
                <input type="email" id="email" name="email"  value="<?php echo $email; ?>">
                </div>
                <div class="box">
                <label for="password">password</label>
                <input type="possword" id="password" name="password"  value="<?php echo $password; ?>">
                </div>
                <div class="box">
                <div>
                <label for="gender">gender</label>
                <input type="radio" name="gender" value="Male" <?php if($gender=="Male"){echo "checked";} ?>>
                <span>male</span>
                <input type="radio" name="gender" value="Female" <?php if($gender=="Female"){echo "checked";} ?>><span>female</span>
                <input type="radio" name="gender" value="Other" <?php if($gender=="Other"){echo "checked";} ?>><span>other</span>
                </div>
                </div>
                <div class="box">
                <label for="mobile">mobile</label>
                <input type="number" id="mobile" name="mobile"  value="<?php echo $mobile; ?>">
                </div>
                <div class="box">
                <label for="address">address</label>
                <textarea name="address" id="address" cols="30" rows="2"><?php echo $address; ?></textarea>
                </div>
                <div class="btn">
                <button><a href="crud.php">back</a></button>
                <button name="submit" type="submit">update</button>
                </div>
        </form>
    </div>               
</body>
</html>
