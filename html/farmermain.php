<?php
session_start();
if(isset($_SESSION['userid'])){
}
else{
    echo "<script>window.location='../farmer/farmerlogin.php'</script>";

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Agriculture Management System.</title>
</head>

<body>
    <div id="pra1">
        <ul>
            <div id="aac"></div>
            <li><a href="farmermain.php"><div id="home"></div></a></li>
            <li><a href="farmervideos.php"><div id="videos"></div></a></li>
            <li><a href="farmernotice.php">Notifications</a><li>
            <li><a href="aboutus.html">About us</a></li>
            <li><a href="contactus.html">Contact us</a></li>
            </ul>
            </div>
    
<div id="pra2"><marquee scrollamount="2" direction="up" behaviour="scroll" style="height:100%; width:50%; font-size:35px; margin:0px 50px 0px 50px;">This page is designed by mr.prabin Poudel and mr.shanker mahato,To ensure that 
        the farmers would learn the modern farming techniques. This site will provide farmers all the techinical support with 
        non-profit approach and it will attempt to establish the link between farmer and buyer so that if any financial transaction has to be done, then they can
        do it with out middle man. This site gives the platform to the farmers to advertise their products.  
       </marquee></div>
<div id="pra3">
<?php 
$con=new mysqli("localhost","root","","ams");
if($con->connect_error){
    die("Problem with the connection.");
}else{
    $sql = "SELECT *from upload";
    $ra=$con->query($sql);

while ($row = $ra->fetch_assoc()) {
    $file_extension = strtolower(pathinfo($row['image'], PATHINFO_EXTENSION));
    $sqls="select *from farmer where id=".$row['id'];
    $r=$con->query($sqls);
    if($r){
        $roww=$r->fetch_assoc();
        $firstname=$roww['fname'];
        $lastname=$roww['lname'];

    }
    echo "<div class='media-item'>";
    echo "<div class='indiv'><div class='indiv1'></div><div class='indiv2'>" . $firstname. " " .$lastname. "</div><br><div class='indiv4'>".$row['comment']."</div>";
    echo "</div><div class='indiv3'>";
    if (in_array($file_extension, array('jpg', 'jpeg', 'png', 'gif'))) {
        
        echo "<img src='{$row['image']}' alt='image unavailable' class='media-content'><br><br>";
        
    } 
    else if (in_array($file_extension, array('mp4', 'avi', 'mov', 'wmv'))) {
        echo "<video src='{$row['image']}' alt='video Unavailable' controls class='media-content'><br><br>";
    }
    echo "</div></div>";
}}
?>


</div>
<div id="pra4"><button onclick="upload()"><div id="aaf"></div></button>
            <button onclick="logOut1()"><div id="aag"></div></button>
            <button onclick="update()"><div id="aah"></div></button>
</div>
    <script defer src="main.js"></script>
</body>

</html>