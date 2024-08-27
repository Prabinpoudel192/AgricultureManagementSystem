
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/prabin.css">
    <title>Agriculture Management System.</title>
</head>

<body>
    <form onsubmit="return validation()" action="" method="post" autocomplete="off" enctype="multipart/form-data"> 

        <div id="pra">
            <fieldset style="border-radius:10px;">
                <legend
                    style="font-size:35px; text-align:center; color:white; background-color:black; border-radius:10px; margin:10px 0px 10px 0px;">
                </legend><span id="msg1"></span><br><input type="text" name="fname" id="pra1"><br>
                <span id="msg2"></span><br><input type="text" name="mname" id="pra1"><br>
                <span id="msg3"></span><br><input type="text" name="lname" id="pra1"><br>
                <div style="font-size:25px; margin:10px 0px 10px 110px; float:left; color:black;">Male:<input type="radio"
                        name="gender" value="male" style="height:25px; width:25px;">Female:<input type="radio"
                        name="gender" value="female" style="height:25px; width:25px;"></div><br>
                       <br><br><span id="msg4"></span><br><input type="tel" name="mobile" id="pra1"><br>
                        <span id="msg5"></span><br><input type="text" name="address" id="pra1"><br>
                        <span id="msg6"></span><br><input type="text" name="uname" id="pra1"><br>
                        <span id="msg7"></span><br><input type="text" name="email" id="pra1"><br>
                        <span id="msg8"></span><br><input type="password" name="password" id="pra1"><br>
                        <span id="msg9"></span><br><input type="password" name="cpassword" id="pra1"><br>
                        <input type="file" name="file" accept="application/pdf" style="margin:10px 0px 20px 150px; font-size:20px;">
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="agree"><label style="color:black;">I accept terms of use & Privacy policy.</label><br>
                <input type="submit" value="Signup" name="post" id="pra1"><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Already have an account?<a href="buyerlogin.php">Login
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
    $file_name=$_FILES["file"]["name"];
    $temp_name=$_FILES["file"]["tmp_name"];
    $folder="../dbimage/".$file_name;
    if(move_uploaded_file($temp_name,$folder)){
$con=new mysqli("localhost","root","","ams");
if($con->connect_error){
    die("<script>alert('couldnot connect to database')</script>");
}else{
    $sql="insert into farmer(fname,mname,lname,gender,mobile,address,uname,password)values('$fname','$mname','$lname','$gender','$mobile','$address','$username','$password')";
    $r=$con->query($sql);
    if($r>0){
        $asql="select *from farmer where mobile='$mobile'";
        $re=$con->query($asql);
        if($re>0){
            $row=$re->fetch_assoc();
            $eid=$row['id'];

        $bsql="insert into buyer (id,document)values('$eid','$folder')";
        $res=$con->query($bsql);
        if($res>0){
        echo "<script>alert('Form submitted successfully.You will be able to login only after admin approves your form')</script>";
        $con->close();
        echo "<script>
        function moveOn(){
            
            window.location.href='buyerlogin.php';
        }
        setTimeout(moveOn,5000);
        </script>";

        
    }else{
        echo "<script>alert('Operation Unsuccessful')</script>";
        echo "<script>window.location.href='buyerregistration.php'</script>";
    }}else {
       echo "<script>alert('Error in the database');</script>";
       $con->close();

    }
}else{
    echo "<script>alert('Registration unsuccessful')</script>";
}}
}}
?>
<script defer src="buyerregistration.js"></script>



</html>