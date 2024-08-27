
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/prabin.css">
    <title>Agriculture Management System.</title>
</head>

<body>
    <form onsubmit="return validation()" action="" method="post" autocomplete="off"> 

        <div id="pra">
            <fieldset style="border-radius:10px;">
                <legend
                    style="font-size:35px; text-align:center; color:white; background-color:black; border-radius:10px; margin:10px 0px 10px 0px;">
                </legend><span id="msg1"></span><br><input type="text" name="fname" id="pra1" placeholder="First Name"><br>
                <span id="msg2"></span><br><input type="text" name="mname" id="pra1" placeholder="Middle Name"><br>
                <span id="msg3"></span><br><input type="text" name="lname" id="pra1" placeholder="Last Name"><br>
                <div style="font-size:25px; margin:10px 0px 10px 110px; float:left; color:black;">Male:<input type="radio"
                        name="gender" value="male" style="height:25px; width:25px;">Female:<input type="radio"
                        name="gender" value="female" style="height:25px; width:25px;"></div><br>
                       <br><br><span id="msg4"></span><br><input type="number" name="mobile" id="pra1"><br>
                        <span id="msg5"></span><br><input type="text" name="address" id="pra1"><br>
                        <span id="msg6"></span><br><input type="text" name="uname" id="pra1"><br>
                        <span id="msg7"></span><br><input type="email" name="email" id="pra1"><br>
                        <span id="msg8"></span><br><input type="password" name="password" id="pra1"><br>
                        <span id="msg9"></span><br><input type="password" name="cpassword" id="pra1"><br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="agree"><label style="color:black;">I accept terms of use & Privacy policy.</label><br>
                <input type="submit" value="Signup" name="post" id="pra1"><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Already have an account?<a href="farmerlogin.php">Login
                    here</a><br>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright
                    @ p2Foundation</p>
            </fieldset>
            
        </div>

    </form>
    <?php 
    ?>
</body>

<?php
if(isset($_POST['post'])){
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $username=$_POST['uname'];
    $password=$_POST['password'];
$con=new mysqli("localhost","root","","ams");
if($con->connect_error){
    die("<script>alert('couldnot connect to database')</script>");
}else{
    if($mname==""){
        $mname=NULL;
        }
    $sql="insert into farmer(fname,mname,lname,mobile,gender,address,uname,password)values('$fname','$mname','$lname','$mobile','$gender',
    '$address','$username','$password')";
    $r=$con->query($sql);
    if($r>0){
        echo "<script>alert('Form submitted successfully');</script>";
        $con->close();
        echo "<script>alert('Use same username and password for login.')</script>";
        echo "<script>
        function moveOn(){
            window.location.href='farmerlogin.php';
        }
        setTimeout(moveOn,5000);
        </script>";

        
    } else {
       echo "<script>ALert();</script>";
       $con->close();

    }
}
}
?>
<script defer src="farmerregistration.js"></script>



</html>