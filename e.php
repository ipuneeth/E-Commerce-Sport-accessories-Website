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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="shortcut icon" type="x-icon" href="img/logo1.png">
  <link rel="stylesheet" href="css.files/style.css">
  <title>MYKA - Gearup Your Fitness</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  
  <nav id="nav">
    <div class="navTop">
        <div class="navItem" style="font-size: 35px; font-weight: bolder;"><a href="e.html">.MYKA</a></div>
        <div class="navItem">
            <div class="search" >
                <!-- <a href="e.html">HOME</a> -->
                <a href="e-shop.php">SHOP</a>
                <a href="e.php">HOME</a>
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
            <h4 style="color: #fff;"><a href="e-shop.php" class="link" style="color: #fff;">SHOP</a></h4>
          </li><br>
          <LI>
            <h4 style="color: #fff;"><a href="e-contact.php" class="link" style="color: #fff;">HELP</a></h4>
          </LI><br>
          <li>
            <h4 style="color: #fff;"><a href="e-login.php" class="link" style="color: #fff;"><button type="submit" value="Login"><i
                    class='bx bx-user'></i></button></a></h4>
          </li>
        </ul>
      </div>
    </nav>

  <!-- <br> -->
  <!-- <ul class="mwsa">
    <li>
      <a href="#Men"><img
          src="https://c.wallhere.com/photos/43/65/Cristiano_Ronaldo_soccer_men_sports_sport-257159.jpg!d">
        <h5>Men's Gear</h5>
      </a>
    </li>
    <li>
      <a href="#Women"><img
          src="https://c4.wallpaperflare.com/wallpaper/260/7/754/leggings-running-girl-fitness-body-activewear-sports-fashion-hd-wallpaper-preview.jpg">
        <h5>Women's Gear</h5>
      </a>
    </li>
    <li>
      <a href="#kids"><img src="https://cdn.wallpapersafari.com/32/53/eEbMp5.jpg">
        <h5>Young's Gear</h5>
      </a>
    </li>
    <li>
      <a href="#"><img
          src="https://static.vecteezy.com/system/resources/previews/036/115/058/non_2x/ai-generated-sports-equipment-on-a-wooden-table-sports-concept-black-background-ai-generated-free-photo.jpg">
        <h5>Sports Gear</h5>
      </a>
    </li>
    <li>
      <a href="#"><img
          src="https://c0.wallpaperflare.com/preview/822/951/691/pair-of-white-red-and-black-nike-air-jordan-1-shoes-on-floor.jpg">
        <h5>Accessories</h5>
      </a>
    </li>
  </ul><br> -->
  <div class="wrapper">
    <div class="image">
      <img src="img/m.png">
      <div class="content">
        <h1>Dream Big And Gearup Your Fitness</h1>
        <p>Find your best FITS which HITS your game hard. Travell with us with us by getting more exploiting gears from us 
          <a href="e-shop.php"><input type="button" class="wic" value="SHOPPIN"></a>
        </p>
      </div>
    </div>
  </div>
  <br>

<div class="cds">
  <div class="parent">
    <div class="card c1">
        <div class="content-box">
            <span class="card-title">JERSEY</span>
            <p class="card-content">
              Heart on my sleeve and game face on. It's not just a jersey; it's a badge of honor, a story woven in fabric. Every game, every cheer, encapsulated in these colors. 
            </p>
            <span class="see-more"><a href="#"><button style="width: 90px;">See More</button></a></span>
        </div>
        <div class="date-box">
          <img src="img/logo1.png" width="58.5px" height="58.5px" alt="" srcset="">
        </div>
    </div>
  </div>
  <div class="parent">
    <div class="card c2">
        <div class="content-box">
            <span class="card-title">MEN's TRACK</span>
            <p class="card-content">
              Even if you are on the right track, you will get run over if you just sit there. 
            </p>
            <span class="see-more"><a href="#"><button style="width: 90px;">See More</button></a></span>
        </div>
        <div class="date-box">
          <img src="img/logo1.png" width="58.5px" height="58.5px" alt="" srcset="">
        </div>
    </div>
  </div>
  <div class="parent">
    <div class="card c3">
        <div class="content-box">
            <span class="card-title">MEN's SHOES</span>
            <p class="card-content">
              I run to see who has the most guts. Get fit with a fit foot.  
            </p>
            <span class="see-more"><a href="#"><button style="width: 90px;">See More</button></a></span>
        </div>
        <div class="date-box">
          <img src="img/logo1.png" width="58.5px" height="58.5px" alt="" srcset="">
        </div>
    </div>
  </div>
  <div class="parent">
    <div class="card c4">
        <div class="content-box">
            <span class="card-title">WOMEN's TRACK</span>
            <p class="card-content">
                Fation and Fitness is equal to everyone, So make it an opportunity to embrace the success.
            </p>
            <span class="see-more"><a href="#"><button style="width: 90px;">See More</button></a></span>
        </div>
        <div class="date-box">
          <img src="img/logo1.png" width="58.5px" height="58.5px" alt="" srcset="">
        </div>
    </div>
  </div>
  <div class="parent">
    <div class="card c5">
        <div class="content-box">
            <span class="card-title">WOMEN's SHOES</span>
            <p class="card-content">
              Even if you are on the right track, you will get run over if you just sit there. 
            </p>
            <span class="see-more"><a href="#"><button style="width: 90px;">See More</button></a></span>
        </div>
        <div class="date-box">
          <img src="img/logo1.png" width="58.5px" height="58.5px" alt="" srcset="">
        </div>
    </div>
  </div>
  <div class="parent">
    <div class="card c6">
        <div class="content-box">
            <span class="card-title">YOUNG's TRACK</span>
            <p class="card-content">
              Every sports field is a canvas, and you're the artist creating your masterpiece.
            </p>
            <span class="see-more"><a href="#"><button style="width: 90px;">See More</button></a></span>
        </div>
        <div class="date-box">
          <img src="img/logo1.png" width="58.5px" height="58.5px" alt="" srcset="">
        </div>
    </div>
  </div>
  <div class="parent">
    <div class="card c7">
        <div class="content-box">
            <span class="card-title">YOUNG's SHOES</span>
            <p class="card-content">
              The shoes that change lives. The shoes that speak to you. The shoes that make miles fly by.
            </p>
            <span class="see-more"><a href="#"><button style="width: 90px;">See More</button></a></span>
        </div>
        <div class="date-box">
          <img src="img/logo1.png" width="58.5px" height="58.5px" alt="" srcset="">
        </div>
    </div>
  </div>
  <div class="parent">
    <div class="card c8">
        <div class="content-box">
            <span class="card-title">SPORTS GEARS</span>
            <p class="card-content">
              One man practicing sportsmanship is far better than 50 preaching it. 
            </p>
            <span class="see-more"><a href="#"><button style="width: 90px;">See More</button></a></span>
        </div>
        <div class="date-box">
          <img src="img/logo1.png" width="58.5px" height="58.5px" alt="" srcset="">
        </div>
    </div>
  </div>
  <div class="parent">
    <div class="card c9">
        <div class="content-box">
            <span class="card-title">FITNESS GEAR</span>
            <p class="card-content">
              Our bodies are capable of anything… It’s our minds we have to convince. 
            </p>
            <span class="see-more"><a href="#"><button style="width: 90px;">See More</button></a></span>
        </div>
        <div class="date-box">
          <img src="img/logo1.png" width="58.5px" height="58.5px" alt="" srcset="">
        </div>
    </div>
  </div>
</div>
  <br><br>
  <div class="footer">
    <ul>
        <li><div class="tooltip-container">
            <div class="tooltip">
              <div class="profile">
                <div class="user">
                  <div class="img">WE</div>
                  <div class="details">
                    <div class="name">MYKA</div>
                    <div class="username">@myka.we</div>
                  </div>
                </div>
                <div class="about">10M+ Followers</div>
              </div>
            </div>
            <div class="text">
              <a class="icon" href="#">
                <div class="layer">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  <span class="fab fa-linkedin">
                    <i class='bx bxl-instagram' style='color:#f8f8f8'></i>
                  </span>
                </div>
                <div class="text">Instagram</div>
              </a>
            </div>
          </div>
          </li>
        <li><div class="tooltip-container">
            <div class="tooltip">
              <div class="profile">
                <div class="user">
                  <div class="img">WE</div>
                  <div class="details">
                    <div class="name">MYKA</div>
                    <div class="username">@myka.we</div>
                  </div>
                </div>
                <div class="about">8M+ Followers</div>
              </div>
            </div>
            <div class="text">
              <a class="icon" href="#">
                <div class="layer">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  <span class="fab fa-linkedin">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="28" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                      <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                     </svg>
                  </span>
                </div>
                <div class="text">Twitter</div>
              </a>
            </div>
          </div></li>
        <li><div class="tooltip-container">
            <div class="tooltip">
              <div class="profile">
                <div class="user">
                  <div class="img">WE</div>
                  <div class="details">
                    <div class="name">MYKA</div>
                    <div class="username">myka.we@gmail.com</div>
                  </div>
                </div>
                <div class="about">500k+ Communications</div>
              </div>
            </div>
            <div class="text">
              <a class="icon" href="mailto: myka.we@gmail.com">
                <div class="layer">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  <span class="fab fa-linkedin">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="28" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
                        <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                      </svg>
                  </span>
                </div>
                <div class="text">Mail</div>
              </a>
            </div>
          </div></li>
        <li><div class="tooltip-container">
            <div class="tooltip">
              <div class="profile">
                <div class="user">
                  <div class="img">WE</div>
                  <div class="details">
                    <div class="name">MYKA</div>
                    <div class="username">@myka.we</div>
                  </div>
                </div>
                <div class="about">5M+ Followers</div>
              </div>
            </div>
            <div class="text">
              <a class="icon" href="#">
                <div class="layer">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  <span class="fab fa-linkedin">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="28" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                    </svg>
                  </span>
                </div>
                <div class="text">FaceBook</div>
              </a>
            </div>
          </div></li>
    </ul>
    <!-- <br> -->
    <hr>
    <p style="font-size: 10px;">© WAYNE ENTERPRISES | MYKA Company, Inc &nbsp; | &nbsp; +140-777-777-7777, +140-161-161-1616 <br><br>
      <a href="e.html" class="f">HOME</a> &nbsp; | &nbsp; <a href="e-contact.html" class="f">CONTACT</a> &nbsp; | &nbsp; <a href="e-about.html" class="f">ABOUT</a> &nbsp; | &nbsp; <a href="e-shop.html" class="f">SHOP</a></p>
</div>









  <script>
    function showSidebar() {
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display = 'flex'
      sidebar.style.color = '#fff'
    }
    function hideSidebar() {
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display = 'none'
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>