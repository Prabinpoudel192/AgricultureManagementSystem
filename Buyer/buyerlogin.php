<?php
$con=new mysqli("localhost","root","","ams");
if($con->connect_error){
  die("Error in the connection");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/prabin.css">
    <title>Agriculture Management System.</title>
</head>
<body>
    <form onsubmit="return lvalidation()" action="" method="post" autocomplete="off">
     <div id="pra4">
     UserName<br><input type="text" placeholder="username" name="username" id="pra1"><br>
      Password<br><input type="password" placeholder="password" name="password" id="pra1"><br>
    
      <input type="submit" value="Log in" name="post" style="height:40px; width:200px; margin:10px 0px 10px 40px; border-radius:30px;background-color:black; 
      color:white;font-size:25px; text-align:center;"><br>
     <div style="height:200px; width:100%; margin:0px; font-size:20px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if you don't have an account?<a href="buyerregistration.php">register here</a><br>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright @ p2Foundation</p></div>
    </div>

    </form> 
</body>
</html>
<?php
if (isset($_POST['post'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT id FROM farmer WHERE uname='$username' and password='$password'";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $ssql="select  *from buyerlogin";
      $sresult=$con->query($ssql);
      $roow=$sresult->fetch_assoc();
      if ($roow>0 && ($row['id']=$roow['id'])) {
        session_start();
        $_SESSION['userid']=$row['id'];
        echo "<script>window.location='../html/buyermain.php'</script>";
          exit();
      } else {
          echo "<script>alert('Your password is incorrect')</script>";
          echo "<script>window.location='buyerlogin.php'</script>";
      }
  } else {
      echo "<script>alert('User not found')</script>";
      echo "<script>window.location='buyerlogin.php'</script>";
  }
  $con->close();
}
?>
<script defer src='buyerregistration.js'></script>
