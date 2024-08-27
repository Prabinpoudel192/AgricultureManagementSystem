<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/approval.css">
    <title>Admin Approval Panel</title>
</head>
<body>
    <h1 style="text-align:center; color:blue;">Welcome to the Admin Panel</h1>
    <?php
    $con=new mysqli("localhost","root","","ams");
    if($con->connect_error){
        die("Error in the connection");
    }else{
        $sql="select *from buyer";
        $r=$con->query($sql);
    }?>
    
    <table border="1" id="pra">
        
    
    <tr id="pra1"><th colspan="10">Approval request of Buyers</th></tr>    
    <tr id="pra1"><th>First Name</th>
                  <th>Middle Name</th>
                  <th>Last Name</th>
                  <th>Gender</th>
                  <th>Mobile</th>
                  <th>Address</th>
                  <th>User Name</th>
                  <th>Document</th>
                  <th>Password</th>
                  <th>Operation</th></tr>
                  <?php
    
    while($row=$r->fetch_assoc()){
       $id=$row['id'];
       $document=$row['document'];
       $bsql="select *from farmer where id='$id'";
       $res=$con->query($bsql);
       $roow=$res->fetch_assoc();
       if($roow>0){
       $fname=$roow['fname'];
       $mname=$roow['mname'];
       $lname=$roow['lname'];
       $gender=$roow['gender'];
       $mobile=$roow['mobile'];
       $address=$roow['address'];
       $uname=$roow['uname'];
       $password=$roow['password'];
       }
        echo "
        <tr><td>$fname</td>
        <td>$mname</td>
        <td>$lname</td>
        <td>$gender</td>
        <td>$mobile</td>
        <td>$address</td>
        <td>$uname</td>
        <td><a href='$document' style='text-decoration:none;'>View Document</a></td>
        <td>$password</td>
        <td><a href='buyerapprove.php?val=$id'><button id='pra2'>Approve</button></a><a href='buyerdelete.php?val=$id'><button id='pra3'>Delete</button></a></td>
        </tr>";
    }
    
    
    ?></table>
    <?php
    if($con->connect_error){
        die("Error in the connection");
    }else{
        $sql="select *from technician";
        $r=$con->query($sql);
    }?>
    
    <table border="1" id="pra">
        
    
    <tr id="pra1"><th colspan="10">Approval request of Technician</th></tr>    
    <tr id="pra1"><th>First Name</th>
                  <th>Middle Name</th>
                  <th>Last Name</th>
                  <th>Gender</th>
                  <th>Mobile</th>
                  <th>Address</th>
                  <th>User Name</th>
                  <th>Document</th>
                  <th>Password</th>
                  <th>Operation</th></tr>
                  <?php
    
    while($row=$r->fetch_assoc()){
        $tid=$row['id'];
        $csql="select *from farmer where id='$tid'";
        $resu=$con->query($csql);
        if($resu){
            $rooow=$resu->fetch_assoc();
        
        $fname=$rooow['fname'];
        $mname=$rooow['mname'];
        $lname=$rooow['lname'];
        $gender=$rooow['gender'];
        $mobile=$rooow['mobile'];
        $address=$rooow['address'];
        $uname=$rooow['uname'];
        $document=$row['document'];
        $password=$rooow['password'];
        echo "
        <tr><td>$fname</td>
        <td>$mname</td>
        <td>$lname</td>
        <td>$gender</td>
        <td>$mobile</td>
        <td>$address</td>
        <td>$uname</td>
        <td><a href='$document' style='text-decoration:none;'>View Document</a></td>
        <td>$password</td>
        <td><a href='technicianapprove.php?val=$tid'><button id='pra2'>Approve</button></a><a href='techniciandelete.php?val=$tid'><button id='pra3'>Delete</button></a></td>
        </tr>";
    }}
    
    
    ?></table>
</body>
</html>