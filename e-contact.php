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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYKA - Contact</title>
    <link rel="shortcut icon" type="x-icon" href="img/logo1.png">
    <link rel="stylesheet" href="css.files/ec.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<nav id="nav">
        <div class="navTop">
            <div class="navItem" style="font-size: 35px; font-weight: bolder;"><a href="e.html">.MYKA</a></div>
            <div class="navItem">
                <div class="search" >
                    <a href="e.html">HOME</a>
                    <!-- <a href="e-shop.html">SHOP</a> -->
                    <a href="e-about.html">ABOUT</a>
                    <a href="e-contact.html">CONTACT</a>
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
          <button type="submit"><a href="e.php?logout=<?php echo $user_id; ?>" onclick="return confirm('Are You Sure, You Want To Logout?');" class="delete-btn">Logout</a></button>
            </div>
        </div>
          <div class="s.icon">
            <h4 onclick=showSidebar() class="menu-button"><a href="#"><i class='bx bx-menu-alt-left'></i></a></h4>
          </div>
          <div class="sidebar">
            <ul>
              <li onclick=hideSidebar()><i class='bx bx-arrow-back'></i></li>
              <li>
                <h4 style="color:white;"><a href="e-about.html" class="link" style="cursor: default; color: white;">MYKA</a></h4>
              </li><br>
              <li>
                <h4 style="color: #fff;"><a href="e.html" class="link" style="color: #fff;">HOME</a></h4>
              </li><br>
              <li>
                <!-- <h4 style="color: #fff;"><a href="e-shop.html" class="link" style="color: #fff;">SHOP</a></h4> -->
              </li><br>
              <LI>
                <h4 style="color: #fff;"><a href="e-contact.html" class="link" style="color: #fff;">HELP</a></h4>
              </LI><br>
              <li>
                <h4 style="color: #fff;"><a href="e-login.html" class="link" style="color: #fff;"><button type="submit"><i
                        class='bx bx-user'></i></button></a></h4>
              </li>
            </ul>
          </div></nav><br><br><br><br><br><br><br>

        <div class="p-or-w">
            <div class="card">
                <div class="content">
                  <div class="back">
                    <div class="back-content">
                      <svg stroke="#ffffff" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" height="50px" width="50px" fill="#ffffff">
              
                      <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
              
                      <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
              
                      <g id="SVGRepo_iconCarrier">
              
                      <img src="img/logo1.png" width="250px" height="250px" alt="" srcset="">
              
                      </g>
              
                      </svg>
                      <strong>Any Help Regarding Product ?</strong>
                      <strong>Hover Here</strong>
                    </div>
                  </div>
                  <div class="front">
                    
                    <div class="img">
                      <div class="circle">
                      </div>
                      <div class="circle" id="right">
                      </div>
                      <div class="circle" id="bottom">
                      </div>
                    </div>
              
                    <div class="front-content">
                      <small class="badge">MYKA</small>
                      <div class="description">
                        <div class="title">
                          <p class="title">
                            <strong>Product Help</strong>
                          </p><br><br><br>
                        </div>
                        <div class="middle">
                            <form action="">
                                <label for=""><strong>User-Email : </strong></label>
                                <input type="email" name="" id=""><br><br>
                                <label for=""><strong>Product-Name/ID : </strong></label>
                                <input type="text" name="" id=""><br><br>
                                <label for=""><strong>What Is The Problem? : </strong></label>
                                <textarea name="" style="background: transparent; color: #fff; font-size: 11px; border-radius: 5px; border: 2px solid #fff;" id="" cols="40" rows="5"></textarea><br><br>
                                <label for=""><strong>Any Suggestions On Brand Improvement? : </strong></label>
                                <textarea name="" style="background: transparent; color: #fff; font-size: 11px; border-radius: 5px; border: 2px solid #fff;" id="" cols="40" rows="5"></textarea><BR></BR>
                                <button type="submit">POST</button><br><br>
                            </form>
                        </div>
                        <p class="card-footer">
                          WAYNE ENTERPRISES &nbsp; | &nbsp; MYKA &nbsp; | &nbsp; +140-777-777-7777, +140-161-161-1616
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="content">
                  <div class="back">
                    <div class="back-content">
                      <svg stroke="#ffffff" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" height="50px" width="50px" fill="#ffffff">
              
                      <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
              
                      <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
              
                      <g id="SVGRepo_iconCarrier">
              
                      <img src="img/logo1.png" width="250px" height="250px" alt="" srcset="">
              
                      </g>
              
                      </svg>
                      <strong>Any Help Regarding Website ?</strong>
                      <strong>Hover Here</strong>
                    </div>
                  </div>
                  <div class="front">
                    
                    <div class="img">
                      <div class="circle">
                      </div>
                      <div class="circle" id="right">
                      </div>
                      <div class="circle" id="bottom">
                      </div>
                    </div>
              
                    <div class="front-content">
                      <small class="badge">MYKA</small>
                      <div class="description">
                        <div class="title">
                          <p class="title">
                            <strong>Website Help</strong>
                            <br><br><br>
                          </p>
                        </div>
                        <div class="middle">
                            <form action="">
                                <label for=""><strong>User-Email : </strong></label>
                                <input type="email" name="" id=""><br><br>
                                <label for=""><strong>Area Problem At? : </strong></label>
                                <input type="text" name="" id=""><br><br>
                                <label for=""><strong>What Is The Problem? : </strong></label>
                                <textarea name="" style="background: transparent; color: #fff; font-size: 11px; border-radius: 5px; border: 2px solid #fff;" id="" cols="40" rows="5"></textarea><br><br>
                                <label for=""><strong>Any Suggestions To Improve? : </strong></label>
                                <textarea name="" style="background: transparent; color: #fff; font-size: 11px; border-radius: 5px; border: 2px solid #fff;" id="" cols="40" rows="5"></textarea><BR></BR>
                                <button type="submit">POST</button><br><br>
                            </form>
                        </div>
                        <p class="card-footer">
                          WAYNE ENTERPRISES &nbsp; | &nbsp; MYKA &nbsp; | &nbsp; +140-777-777-7777, +140-161-161-1616
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div><br><br><br><br><br><br><br><br><br>

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
            <br>
            <hr><br>
            <p style="font-size: 10px;">© WAYNE ENTERPRISES | MYKA Company, Inc &nbsp; | &nbsp; +140-777-777-7777, +140-161-161-1616</p>

        </div>
</body>
</html>