<?php
include 'config.php';

if(isset($_POST['submit'])){
    $Username = mysqli_real_escape_string($conn, $_POST['Username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $cpassword = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

    $select = mysqli_query($conn, "SELECT * FROM `signup` WHERE email = '$email' AND cpassword = '$cpassword'") or die('Query Failed');

    if(mysqli_num_rows($select)>0){
        $message[] = 'User Already Existed!';
    } else{
        mysqli_query($conn, "INSERT INTO `signup`(Username,email,cpassword) VALUES('$Username','$email','$cpassword')") or die('Query Failed');
        $message[] = 'Registration Successfull';
        // header('location:e-login.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYKA - Login/Register</title>
    <link rel="stylesheet" href="css.files/elr.css">
    <link rel="shortcut icon" type="x-icon" href="img/logo1.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php
    if(isset($message)){
        foreach($message as $message){
            echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
        }
    }
    ?>
<div id="container" class="container">
    <!-- FORM SECTION -->
    <div class="row">
        <!-- SIGN UP -->
        <div class="col align-items-center flex-col sign-up">
            <div class="form-wrapper align-items-center">
                <div class="form sign-up">
                    <form action="" method="post">
                    <div class="input-group">
                        <i class='bx bxs-user'></i>
                        <input type="text" placeholder="Username" id="Username" name="Username">
                    </div>
                    <div class="input-group">
                        <i class='bx bx-mail-send'></i>
                        <input type="email" placeholder="Email" id="email" name="email">
                    </div>
                    <div class="input-group">
                        <i class='bx bxs-lock-alt'></i>
                        <input type="password" placeholder="Password" id="Password1" name="Password1">
                    </div>
                    <div class="input-group">
                        <i class='bx bxs-lock-alt'></i>
                        <input type="password" placeholder="Confirm password" id="cpassword" name="cpassword">
                    </div>
                    <input type="submit" name="submit" value="Sign-Up">
                    <p>
                        <span>
                            Already have an account?
                        </span>
                        <b onclick="toggle()" class="pointer">
                            Sign in here
                        </b>
                    </p>
                    </form>
                </div>
            </div>
        
        </div>
        <!-- END SIGN UP -->
        <!-- SIGN IN -->
        <div class="col align-items-center flex-col sign-in">
            <div class="form-wrapper align-items-center">
                <div class="form sign-in">
                    <form method="post" action="logco.php">
                    <div class="input-group">
                        <i class='bx bxs-user'></i>
                        <input type="text" placeholder="email" id="email" name="email" required/>
                    </div>
                    <div class="input-group">
                        <i class='bx bxs-lock-alt'></i>
                        <input type="password" placeholder="Password" id="cpassword" name="cpassword" required/>
                        <!-- <i class='bx bxs-show' style='color:#000000' style="padding-left: 100px;"  ></i> -->
                    </div>
                    <input type="submit" name="submit" value="Sign-In">
                    <p>
                        <a href="#">
                            Forgot password?
                        </a>
                    </p>
                    <p>
                        <span>
                            Don't have an account?
                        </span>
                        <b onclick="toggle()" class="pointer">
                            Sign up here
                        </b>
                    </p>
                    </form>
                </div>
            </div>
            <div class="form-wrapper">
    
            </div>
        </div>
        <!-- END SIGN IN -->
    </div>
    <!-- END FORM SECTION -->
    <!-- CONTENT SECTION -->
    <div class="row content-row">
        <!-- SIGN IN CONTENT -->
        <div class="col align-items-center flex-col">
            <div class="text sign-in">
                <h2>
                    <!-- <img src="img/logo1.png" width="200px" alt="" srcset=""><br> -->
                    Welcome <br>
                    <img src="img/logo1.png" width="230px" alt="" srcset="">
                </h2>

            </div>
            <div class="img sign-in">
    
            </div>
        </div>
        <!-- END SIGN IN CONTENT -->
        <!-- SIGN UP CONTENT -->
        <div class="col align-items-center flex-col">
            <div class="img sign-up">
            
            </div>
            <div class="text sign-up">
                <h2><br><br>
                    Join with us <br>
                    <img src="img/logo1.png" width="230px" alt="" srcset=""><br>
                </h2>

            </div>
        </div>
        <!-- END SIGN UP CONTENT -->
    </div>
    <!-- END CONTENT SECTION -->
</div>
</body>
<script>
    let container = document.getElementById('container')

toggle = () => {
	container.classList.toggle('sign-in')
	container.classList.toggle('sign-up')
}

setTimeout(() => {
	container.classList.add('sign-in')
}, 200)
</script>
</html>