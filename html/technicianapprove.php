<?php
$val=$_GET['val'];
$con=new mysqli("localhost","root","","ams");
if($con->connect_error){
    die("Error in the database connection.");
}else{
    $sql1="select *from technician where id='$val'";
    $result=$con->query($sql1);
}
$sql2="insert into technicianlogin(id)values('$val')";
$r=$con->query($sql2);
if($r>0){
    echo "<script>alert('Operation Successful')</script>";
}else{
    echo "<script>alert('error in the data insertion')</script>";
}
echo "<script>window.location.href = 'approve.php';</script>";
$con->close();
?>