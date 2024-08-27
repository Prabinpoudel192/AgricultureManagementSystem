<?php
$con=new mysqli("localhost","root","","ams");
if($con->connect_error){
    die("Error with the connection");
}else{
    $sql="select *from techniciancon";
    $r=$con->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/videos.css">
    <title>Training Videos</title>
</head>
<body>
    <h1>This is the training page.</h1>

    <?php
while ($row = $r->fetch_assoc()) {
    $comment = $row['comment'];
    $file = $row['image'];
    $id=$row['id'];
    $file_extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    $ssql="select fname,lname from farmer where id=$id";
    $result=$con->query($ssql);
    if($result){
        $roow=$result->fetch_assoc();
        $fname=$roow['fname'];
        $lname=$roow['lname'];
    }
    echo "<div class='pra1'>";
    
    if (in_array($file_extension, array('mp4', 'avi', 'mov', 'wmv'))) {
        echo "<div class='pra2'>";
        echo "<div class='pra3' style='background-image:url(../images/placeholder.jpg); background-size:cover; border:2px solid black;'></div>";
        echo "<div class='pra4'>";
        echo $fname." ".$lname;
        echo "</div>";
      
        echo "<div class='pra5'>".$comment."</div>";
        echo "</div>";
       
        echo "<video src='$file' alt='video Unavailable' controls style='height:280px; width:400px; position:relative; margin:110px 0px 0px 0px;'></video>";
    }
    echo "</div>";
}
?>
<button class="btn" onclick="home2()"></button>
</body>
</html>
<script defer src='main.js'></script>