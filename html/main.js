function logOut(){
    if(confirm("Are you sure you want to logout??")){
        window.history.replaceState(null, null, "../Buyer/buyerlogin.php");
        window.location="../Buyer/buyerlogin.php";
    }
}
function logOut1(){
    if(confirm("Are you sure you want to logout??")){
        window.history.replaceState(null, null, "../farmer/farmerlogin.php");
        window.location= "../farmer/farmerlogin.php"
    }
}
function logOut2(){
    if(confirm("Are you sure you want to logout??")){
        window.history.replaceState(null, null, "../technician/technicianlogin.php");
        window.location= "../technician/technicianlogin.php";
    }
}
function logOut3(){
    if(confirm("Are you sure you want to logout??")){
        window.history.replaceState(null, null, "../Admin/adminlogin.php");
        window.location= "../Admin/adminlogin.php";
    }
}
function upload(){
    window.location="upload.php";
}
function techupload(){
    window.location="techupload.php";
}
function profile(){
    window.location="../html/profile.php";
}
function home(){
    window.location="technicianmain.php";
}
function home1(){
    window.location="adminmain.php";
}
function home2(){
    window.location="farmermain.php"
}
function update(){
    window.location="update.php";
}