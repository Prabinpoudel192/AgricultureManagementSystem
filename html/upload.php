<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/upload.css">
    <title>Product Advertisement.</title>
</head>
<body>
    
    <form action="" method="POST" enctype="multipart/form-data">
      <h4><em><bold>Product upload for advertisement page</bold></em></h4>
    <div id="aaa">
    <label>Please choose your file.</label><br><input type="file" name="file"><br>
    <label>Comment</label><br><input type="text" name="ycmt" id="aab"><br>
    <input type="submit" name="post"></div>
</form>
    <?php
    session_start();
    if(isset($_SESSION['userid'])){
      $id=$_SESSION['userid'];
    }
    else{
        echo "<script>window.location='farmermain.php'</script>";
        exit();
    }
    if(isset($_POST['post'])){
        $comment=$_POST["ycmt"];
        $file_name=$_FILES["file"]["name"];
        $file_type=$_FILES["file"]["type"];
        $temp_name=$_FILES["file"]["tmp_name"];
        $file_folder="../dbimage/".$file_name;

      if(move_uploaded_file($temp_name,$file_folder)){
      $con=new mysqli("localhost","root","","ams");
      if($con->connect_error){
        die("Error with the connection");
       } else{
          $sql="insert into upload(id,comment,image)values('$id','$comment','$file_folder')";
          $r=$con->query($sql);
          if($r>0){
            echo "<script>alert('Data inserted successfully')</script>";
            echo "<script>window.location.href='farmermain.php';</script>";
          }
          else{
            echo "<script>alert('Error in data insertion')</script>";
          }

        }
      }else{
         echo "<script>alert('operation unsucessful')</script>";
      }
      $con->close();
    }
   
    ?>
</body>
</html>