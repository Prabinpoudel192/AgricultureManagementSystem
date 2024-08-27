<?php 
$con = new mysqli("localhost", "root", "", "ams");

if ($con->connect_error) {
    die("Error in the database connection.");
} else {
    $val = $_GET['val'];
    
    $sql_select = "SELECT document FROM technician WHERE id='$val'";
    $result = $con->query($sql_select);  
    if ($result && $row = $result->fetch_assoc()) {
        $file_path = $row['document'];
        
        if (unlink($file_path)) {
            $sql_delete = "DELETE FROM technician, WHERE id='$val'";
            $r = $con->query($sql_delete);
            
            if ($r > 0) {
                echo "<script>alert('File Successfully Deleted.')</script>";
                echo "<script>window.location.href = 'approve.php';</script>";
                exit(); 
            } else {
                echo "<script>alert('Error could not delete data.')</script>";
            }
        } else {
            echo "<script>alert('Error could not delete file.')</script>";
        }
    } else {
        echo "<script>alert('Error: Couldnot find the file.')</script>";
        echo "<script>window.location.href = 'approve.php';</script>";
        exit();
    }
    echo "<script>alert('Error: Couldnot find the file.')</script>";
    echo "<script>window.location.href = 'approve.php';</script>";
    exit();
    $con->close();
}
?>
