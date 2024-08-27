<?php
$val=$_GET['val'];
$con=new mysqli("localhost","root","","ams");
if($con->connect_error){
  die("Error in database connection");
}else{
  $sql="select *from upload where id='$val'";

  $r=$con->query($sql);
  if ($r){
    $row=$r->fetch_assoc();
    $id=$row['id'];
    $ssql="select *from farmer where id='$id'";
    $ra=$con->query($ssql);
    if($ra){
      $roow=$ra->fetch_assoc();
      $fname=$roow['fname'];
      $lname=$roow['lname'];
      $mobile=$roow['mobile'];
      $address=$roow['address'];
    echo "<table border=1 ><tr><td style='color:black; font-weight:bolder; text-align:center; background:skyblue;'>
           <p>Hello my name is ".$fname." ".$lname.". I am from ".$address."<br> If you want to buy my product then you can contact me
           in this <br>number: ".$mobile."</p></td></tr>
           <table>";

  }else{
    echo "Error in fetching data";
  }
echo "<a href='buyermain.php'><button style='height:60px; width:60px; border-radius:50px; background-image:url(../images/home.jpg); background-size:cover; position:fixed; margin:20px;'></button></a>";
}}
?>