<?php
include 'config.php';
session_start();

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $cpassword = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

    $select = mysqli_query($conn, "SELECT * FROM `signup` WHERE email = '$email' AND cpassword = '$cpassword'") or die('Query Failed');

    if(mysqli_num_rows($select)>0){
        $row = mysqli_fetch_assoc($select);
        $_SESSION['user_id'] = $row['id'];
        header('location:e.php');
    }
    else{
        echo "<div><h1>Invalid Password or E-mail (Please Check And Try Again)</h1></div>";
    }
}
?>