<?php
$con=new mysqli("localhost","root","","ams");
if($con->connect_error){
    die("Problem with the connection.");
}else{
    $sql="select *from upload";
    $ra=$con->query($sql);
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
            <li><a href="buyermain.php"><div id="home"></div></a></li>
            <li><a href="aboutus.html">About us</a></li>
            <li><a href="contactus.html">Contact us</a></li></ul>
            </div>
    
<div id="pra2"><marquee scrollamount="2" direction="up" behaviour="scroll" style="height:100%; width:50%; font-size:35px; margin:0px 50px 0px 50px;">This page is designed by mr.prabin Poudel and mr.shanker mahato,To ensure that 
        the farmers would learn the modern farming techniques. This site will provide farmers all the techinical support with 
        non-profit approach and it will attempt to establish the link between farmer and buyer so that if any financial transaction has to be done, then they can
        do it with out middle man. This site gives the platform to the farmers to advertise their products.  
       </marquee></div>
<div id="pra3">
<?php 
while ($row = $ra->fetch_assoc()) {
    $id = $row['id'];
    $comment=$row['comment'];
    $file = $row['image']; 
    $ssql="select fname,lname from farmer where id='$id'";
    $res=$con->query($ssql);
    $roow=$res->fetch_assoc();
    $fname=$roow['fname'];
    $lname=$roow['lname'];
    $file_extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    
    echo "<div class='media-item'>";
    echo "<div class='indiv'><div class='indiv1'></div><div class='indiv2'>".$fname." ".$lname."</div><br><div class='indiv4'>$comment</div>";
    echo "<a href='profile.php?val=$id'><button id='pra3'><button style='height:50px; width: 100px; border-radius:25px; background-color:#A5C01F; float:right; color:white; margin:10px;' onclick='profile()'>Profile</button></a>";
    echo "</div><div class='indiv3'>";
    if (in_array($file_extension, array('jpg', 'jpeg', 'png', 'gif'))) {
        
        echo "<img src='$file' alt='image unavailable' class='media-content'><br><br>";
        
    } 
    else if (in_array($file_extension, array('mp4', 'avi', 'mov', 'wmv'))) {
        echo "<video src='$file' alt='video Unavailable' controls class='media-content'><br><br>";
    }
    echo "</div></div>";
}
?>


</div>
<div id="pra4">
<button onclick="logOut()"><div id="aag"></div></button>
</div>
    <script defer src="main.js"></script>
</body>

</html>