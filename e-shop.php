<?php
include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
  header('location:e-login.php');
}
if(isset($_GET['logout'])){
  unset($user_id);
  session_destroy();
  header('location:e-login.php');
}

?>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="shortcut icon" type="x-icon" href="img/logo1.png">
  <link rel="stylesheet" href="css.files/ea.css">
  <title>MYKA - Gearup Your Fitness | Shoppin</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css.files/es.css">
</head>
<body>
  <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content" style="background:transparent; backdrop-filter:blur(7px); color:#fff;">
      <div class="modal-header">
      <div class="heading"style="font-size: 20px;"><i>ORDER DETAILS:</i></div>
        <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="post" style="text-align: center;"><div class="modal-body">
        <lable><i><u>Email-Id:</u></i></lable>
        <input type="email" style="font-size:14px;" name="email" id="email" required/><br><br>
        <lable><i><u>Quantity:</u></i></lable>
        <input type="number" style="width: 60px;" name="qun" id="qun" required/><br><br>
        <lable><i><u>Size:</u></i></lable>
        <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="size" id="size" value="M">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="size" id="size" value="L">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="size" id="size" value="XL">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="size" id="size" value="XXL">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div><br>
      </div>
      <lable><i><u>Address For Delivery:</u></i></lable><br>
      <textarea name="" style="background: transparent; color: #fff; font-size: 11px; border-radius: 5px; border: 2px solid #fff;" id="" cols="40" rows="5" requred></textarea><br><br>
      <lable><i><u>Any Suggestions Or Comments On The product?:</u></i></lable><br>
      <textarea name="" style="background: transparent; color: #fff; font-size: 11px; border-radius: 5px; border: 2px solid #fff;" id="" cols="40" rows="5"></textarea><br><br><br>
      <p style="font-size: 10px;">Note: Sorry At This Particular Time We Can Only Offer CASH-ON Delivery.!</p><hr>
      
        <button type="button" class="btn-secondary" data-bs-dismiss="modal"><i class='bx bx-dislike' ></i>back</button>
        <button type="submit" class="btn-primary"><i class='bx bx-like' ></i>Order</button>
      </form>
    </div>
  </div>
</div>
    <nav id="nav">
        <div class="navTop">
            <div class="navItem" style="font-size: 35px; font-weight: bolder;"><a href="e.php">.MYKA</a></div>
            <div class="navItem">
                <div class="search" >
                    <a href="e.php">HOME</a>
                    <!-- <a href="e-shop.html">SHOP</a> -->
                    <a href="e-shop.php">SHOP</a>
                    <a href="e-contact.php">CONTACT</a>
                </div>
            </div>
            <div class="navItem">
              <a href="#" class="link"><i class='bx bx-cart-alt'></i></a>
              <?php
                $select_user = mysqli_query($conn, "SELECT * FROM `signup` WHERE id = '$user_id'") or die('Query Failed');
                if(mysqli_num_rows($select_user)>0){
                  $fetch_user = mysqli_fetch_assoc($select_user);
                };
              ?>
          <span><?php echo $fetch_user['Username']; ?></span>
          <button><a href="e.php?logout=<?php echo $user_id; ?>" onclick="return confirm('Are You Sure, You Want To Logout?');" class="delete-btn">Logout</a></button>
            </div>
        </div>
          <div class="s.icon">
            <h4 onclick=showSidebar() class="menu-button"><a href="#"><i class='bx bx-menu-alt-left'></i></a></h4>
          </div>
          <div class="sidebar">
            <ul>
              <li onclick=hideSidebar()><i class='bx bx-arrow-back'></i></li>
              <li>
                <h4 style="color:white;"><a href="e.php" class="link" style="cursor: default; color: white;">MYKA</a></h4>
              </li><br>
              <li>
                <h4 style="color: #fff;"><a href="e.php" class="link" style="color: #fff;">HOME</a></h4>
              </li><br>
              <li>
                <!-- <h4 style="color: #fff;"><a href="e-shop.html" class="link" style="color: #fff;">SHOP</a></h4> -->
              </li><br>
              <LI>
                <h4 style="color: #fff;"><a href="e-contact.php" class="link" style="color: #fff;">HELP</a></h4>
              </LI><br>
              <li>
                <h4 style="color: #fff;"><a href="e-login.php" class="link" style="color: #fff;"><button type="submit"><i class='bx bx-user'></i></button></a></h4>
              </li>
            </ul>
          </div>
          <div class="navBottom">
            <h3 class="menuItem">MEN's GEAR</h3>
            <h3 class="menuItem">WOMEN's GEAR</h3>
            <h3 class="menuItem">YOUNG's GEAR</h3>
            <h3 class="menuItem">SPORTS KIT</h3>
            <h3 class="menuItem">FITNESS KIT</h3>
        </div>
        </nav><br>
        <div class="slider">
            <div class="sliderWrapper">
                <div class="sliderItem">
                    <img src="img/mens.png" alt="" class="sliderImg">
                    <div class="sliderBg"></div>
                    <h1 class="sliderTitle">MEN's</br> NEW</br> SEASON</h1>
                    <h2 class="sliderPrice">₹4,999</h2>
                    <a href="#">
                        <button class="buyButton"><a href="#MW">BUY NOW!</a></button>
                    </a>
                </div>
                <div class="sliderItem">
                    <img src="img/womens.png" alt="" class="sliderImg">
                    <div class="sliderBg"></div>
                    <h1 class="sliderTitle">WOMEN's</br> NEW</br> SEASON</h1>
                    <h2 class="sliderPrice">₹3,999</h2>
                    <a href="#">
                        <button class="buyButton"><a href="#WW">BUY NOW!</a</button>
                    </a>
                </div>
                <div class="sliderItem">
                    <img src="img/youngs.png" alt="" class="sliderImg">
                    <div class="sliderBg"></div>
                    <h1 class="sliderTitle">YOUNG's</br> NEW</br> SEASON</h1>
                    <h2 class="sliderPrice">₹1,999</h2>
                    <a href="#">
                        <button class="buyButton"><a href="#YW">BUY NOW!</a></button>
                    </a>
                </div>
                <div class="sliderItem">
                    <img src="img/sk.png" alt="" class="sliderImg">
                    <div class="sliderBg"></div>
                    <h1 class="sliderTitle">SPORTS's KIT</br> NEW</br> SEASON</h1>
                    <h2 class="sliderPrice">₹19,999</h2>
                    <a href="#">
                        <button class="buyButton"><a href="#SG">BUY NOW!</a></button>
                    </a>
                </div>
                <div class="sliderItem">
                    <img src="img/fg.png" alt="" class="sliderImg">
                    <div class="sliderBg"></div>
                    <h1 class="sliderTitle">FITNESS FREAK</br> NEW</br> SEASON</h1>
                    <h2 class="sliderPrice">₹9,999</h2>
                    <a href="#">
                        <button class="buyButton"><a href="#GF">BUY NOW!</a></button>
                    </a>
                </div>
            </div>
        </div><br><br><br>



        
        <div class="heading" id="MW">MENS WORLD</div><br>
        <div class="cds">
        <div class="card">
          <div class="card-img"><img src="img/mps.png" style="padding-left: 50px;" width="200px" height="150px"></div>
          <div class="card-info">
            <p class="text-title">PUMA TRACK SHIRT</p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">2,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/pmp.png" style="padding-left: 50px;" width="250px" height="170px"></div>
          <div class="card-info">
            <p class="text-title">PUMA TRACK PANT</p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">2,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/air.png" style="padding-left: 80px;" width="200px" height="150px"></div>
          <div class="card-info">
            <p class="text-title">AIR JORDANS [NIKE]</p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>8F</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>9F</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>10F</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>11F</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">10,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/MJ.png" style="padding-left: 50px;" width="200px" height="150px"></div>
          <div class="card-info">
            <p class="text-title">INDIAN JERSEY</p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">2,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/MFJ.png" style="padding-left: 50px;" width="200px" height="150px"></div>
          <div class="card-info">
            <p class="text-title">INDIAN JERSEY [FOOTBALL]</p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">2,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/MIPL.png" style="padding-left: 50px;" width="200px" height="150px"></div>
          <div class="card-info">
            <p class="text-title">SRH JERSEY [IPL]</p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">2,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        </div> <br><br><br><br><br>




        <div class="heading" id="WW">WOMENS WORLD</div><br>
        <div class="cds">
        <div class="card">
          <div class="card-img"><img src="img/WPS.png" style="padding-left: 50px;" width="200px" height="150px"></div>
          <div class="card-info">
            <p class="text-title">PUMA TRACK SHIRT</p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">2,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/WPP.png" style="padding-left: 50px;" width="250px" height="150px"></div>
          <div class="card-info">
            <p class="text-title">PUMA TRACK PANT</p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">2,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/WAJ.png" style="padding-left: 50px;" width="200px" height="150px"></div>
          <div class="card-info">
            <p class="text-title">AIR JORDANS [NIKE]</p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>8F</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>9F</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>10F</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>11F</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">10,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/WCJ.png" style="padding-left: 50px;" width="200px" height="150px"></div>
          <div class="card-info">
            <p class="text-title">INDIAN JERSEY</p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">2,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/WFJ.png" style="padding-left: 50px;" width="200px" height="150px"></div>
          <div class="card-info">
            <p class="text-title">INDIAN JERSEY [FOOTBALL]</p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">2,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/WIJ.png" style="padding-left: 50px;" width="200px" height="150px"></div>
          <div class="card-info">
            <p class="text-title">SRH JERSEY [IPL]</p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">2,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        </div> <br><br><br><br><br>




        <div class="heading" id="YW">YOUNG WORLD</div><br>
        <div class="cds">
        <div class="card">
          <div class="card-img"><img src="img/YPS.png" style="padding-left: 50px;" width="200px" height="150px"></div>
          <div class="card-info">
            <p class="text-title">PUMA TRACK SHIRT</p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">2,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/YPP.png" style="padding-left: 50px;" width="230px" height="150px"></div>
          <div class="card-info">
            <p class="text-title">PUMA TRACK PANT</p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">2,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/YAJ.png" style="padding-left: 50px;" width="200px" height="150px"></div>
          <div class="card-info">
            <p class="text-title">AIR JORDANS [NIKE]</p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>8F</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>9F</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>10F</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>11F</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">10,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/YCJ.png" style="padding-left: 50px;" width="200px" height="150px"></div>
          <div class="card-info">
            <p class="text-title">INDIAN JERSEY</p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">2,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/YFJ.png" style="padding-left: 50px;" width="200px" height="150px"></div>
          <div class="card-info">
            <p class="text-title">INDIAN JERSEY [FOOTBALL]</p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">2,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/YIJ.png" style="padding-left: 80px;" width="200px" height="150px"></div>
          <div class="card-info">
            <p class="text-title">SRH JERSEY [IPL]</p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">2,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        </div> <br><br><br><br><br>




        <div class="heading" id="SG">SPORTS GEARS</div><br>
        <div class="cds">
        <div class="card">
          <div class="card-img"><img src="img/CK.png" style="padding-left: 30px;" width="250px" height="180px"></div>
          <div class="card-info">
            <p class="text-title"><i>CRICKET KIT</i></p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">20,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/FK.png" style="padding-left: 50px;" width="230px" height="170px"></div>
          <div class="card-info">
            <p class="text-title"><i>FOOTBALL KIT</i></p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">20,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/BK.png" style="padding-left: 50px;" width="220px" height="150px"></div>
          <div class="card-info">
            <p class="text-title"><i>BASKET BALL KIT</i></p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>8F</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>9F</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>10F</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>11F</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">15,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/RK.png" style="padding-left: 30px;" width="250px" height="200px"></div>
          <div class="card-info">
            <p class="text-title"><i>RUGBY KIT</i></p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">20,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/GK.png" style="padding-left: 50px;" width="200px" height="150px"></div>
          <div class="card-info">
            <p class="text-title"><i>GOLF KIT</i></p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">25,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/BaK.png" style="padding-left: 80px;" width="200px" height="170px"></div>
          <div class="card-info">
            <p class="text-title"><i>BASEBALL KIT</i></p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">20,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        </div> <br><br><br><br><br>



        <div class="heading" id="SG"><i>FITNESS FREAK</i></div><br>
        <div class="cds">
        <div class="card">
          <div class="card-img"><img src="img/GYK.png" style="padding-left: 30px;" width="250px" height="170px"></div>
          <div class="card-info">
            <p class="text-title"><i>GYM KIT</i></p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">20,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/PB.png" style="padding-left: 50px;" width="230px" height="170px"></div>
          <div class="card-info">
            <p class="text-title"><i>PUNCHING BAG [SET]</i></p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">20,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/T.png" style="padding-left: 50px;" width="230px" height="170px"></div>
          <div class="card-info">
            <p class="text-title"><i>THREADMIL</i></p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>8F</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>9F</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>10F</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>11F</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">15,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        <div class="card">
          <div class="card-img"><img src="img/CM.png" style="padding-left: 30px;" width="250px" height="175px"></div>
          <div class="card-info">
            <p class="text-title"><i>CYCLING</i></p>
            <form action="" method="post"><div class="quan">
              <lable><i>Quantity:</i></lable>
              <input type="number" name="quan" style="background-color: transparent; width: 60px; border:none; border-bottom:2px solid #fff; border-radius: 5px;" id="quan"/>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><i>M</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>L</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XL</i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><i>XXL</i></label>
            </div>
          </div>
          <div class="card-footer">
          <span class="text-title">20,000₹</span>
          <button type="button" class="btn-primary" style="background: transparent; width:28px; border-radius:20px; border:#fff solid 1px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class='bx bxs-cart-add' style="padding-right: 20px;"></i>
          </button>
        </div></form></div>
        </div> <br><br><br><br><br>









        <script src="e.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>