<?php
session_start();
if(isset($_SESSION['userid'])){
    $id=$_SESSION['userid'];
    $con=new mysqli("localhost","root","","ams");
}
$sql="select *from farmer where id='$id'";
$r=$con->query($sql);
if($r>0){
    $row=$r->fetch_assoc();
    $fname=$row['fname'];
    $mname=$row['mname'];
    $lname=$row['lname'];
    $mobile=$row['mobile'];
    $address=$row['address'];
    $uname=$row['uname'];
    $password=$row['password'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Your Profile</h1>
    <form action="" method="post" style="height:500px; width:300px; text-size:20px; text-align:center; background-color:skyblue;">
    <br><br>fname:<input type="text" name="fname" value="<?php echo "$fname" ?>"><br><br>
    mname:<input type="text" name="mname" value="<?php echo "$mname" ?>"><br><br>
    lname:<input type="text" name="lname" value="<?php echo "$lname" ?>"><br><br>
    mobile:<input type="text" name="mobile" value="<?php echo "$mobile" ?>"><br><br>
    address:<input type="text" name="address" value="<?php echo "$address" ?>"><br><br>
    username:<input type="text" name="uname" value="<?php echo "$uname" ?>"><br><br>
    fname:<input type="text" name="password" value="<?php echo "$password" ?>"><br><br>
    <button type="submit" name="post"><div style="height:30px; width:60px; border-radius:15px;">Update</div></button><br><br>
</form>  
</body>
</html>
<?php
if(isset($_POST['post'])){
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $uname=$_POST['uname'];
    $password=$_POST['password'];
    $sql = "UPDATE farmer SET fname='$fname', mname='$mname', lname='$lname', mobile='$mobile', address='$address', uname='$uname', password='$password' WHERE id='$id'";
    $res=$con->query($sql);
    if($res>0){
        echo "<script>alert('Your profile has been updated successfully')</script>";
        echo "<script>window.location='farmermain.php'</script>";
        $con->close();
    }

}

?>