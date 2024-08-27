<?php
$val=$_GET['val'];
$con=new mysqli("localhost","root","","ams");
if($con->connect_error){
    die("Error in the database connection.");
    $con->close();
}else{
    $sql1="select *from farmer where id='$val'";
    $result=$con->query($sql1);
    if($result->num_rows>0){
        $row=$result->fetch_assoc();
        $id=$row['id'];
        $sql2="insert into buyerlogin(id)values('$id')";
$r=$con->query($sql2);
if($r>0){
    echo "<script>alert('Operation Successful')</script>";
}else{
    echo "<script>alert('error in the data insertion')</script>";
  
}
echo "<script>window.location.href = 'approve.php';</script>";
}
      
    

    else{
        echo "<script>alert('error in fetching data')</script>";
        $con->close();
    }}


?>
