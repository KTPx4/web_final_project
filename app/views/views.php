<?php
  $root_img='http://'.$_SERVER['HTTP_HOST'] . "/public/img/";
  $HOST = "http://".$_SERVER['HTTP_HOST'];
  define('HOST', $HOST);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?=$title?></title>

    <link rel="stylesheet" href="<?=HOST?>/public/css/home.css" type="text/css">
    <link rel="stylesheet" href="<?=HOST?>/public/css/cssElm.css" type="text/css">
    <link rel="stylesheet" href="<?=HOST?>/public/css/cssImg.css" type="text/css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <script src="public/js/account/script.js"></script>
  </head>
  <body>

  <div class="main-container">
  <div class="logo-container">
    <a href="#"><img src="<?=$root_img?>logo/Logo.png" alt="Logo"></a>
    <h1 class="logo-text">ANIME</h1>
  </div>

  <div class="menu">
    <div class="dropdown">
      <a href="#">GENRES</a>
      <div class="dropdown-content">
        <a href="#">Detective</a>
        <a href="#">Adventure</a>
        <a href="#">Action Anime</a>
        <a href="#">Romantic Comedy</a>
        <a href="#">Science Fiction</a>
      </div>
    </div>

    <div class="dropdown">
      <a href="#">TOP ANIME</a>
      <div class="dropdown-content">
        <a href="#">Odd TaxI - Chuyến Taxi bất ổn (2021)</a>
        <a href="#">One Piece - Đảo Hải Tặc (1999)</a>
        <a href="#">Naruto - Cửu Vĩ Hồ (2002)</a>
        <a href="#">Conan Movie 25 - Nàng Dâu Halloween (2022)</a>
        <a href="#">Pocket Monsters - Pokemon (1997)</a>
      </div>
    </div>

    <a href="#">SEASON</a>
    <a href="#">LIBRARY</a>
    <a href="#">COMMING SOON</a>

    <div id="search-box">
      <input type="text" id="search-text" placeholder="Search..." required>
      <button id="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
    </div>

    <div class="login-register">
      <button class="login-btn">LOG IN</button>
      <button class="register-btn">REGISTER</button>
    </div>

    <div id="wrapper">
      <input type="checkbox" name="" class="switch-toggle" id="light-dark">
    </div>

  </div>
</div>




      
      <div class="content dark-mode">
          <div class="content-change">
            
              <?php 
                  require_once($pathPage);
              ?>    
          
          </div>
          
          <div class="top-update">
            <div class="label-top-update"><h2>Top Update</h2></div>
            <div class="table-top-update">
              <table >
                  <tr class="tr-top-update">              
                    <td><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-update" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top update"></img></a></td>
                    <td>description 1</td>
                  </tr>
                  <tr class="tr-top-update">
                    <td><a href="<?=HOST?>/home/viewFilm?name=top-update-2"><img class="img-top-update" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top update"></img></a></td>
                    <td>description 2</td>
                  </tr>
                  <tr class="tr-top-update">
                    <td><a href="<?=HOST?>/home/viewFilm?name=top-update-3"><img class="img-top-update" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top update"></img></a></td>
                    <td>description 3</td>
                  </tr>
                  <tr class="tr-top-update">
                    <td><a href="<?=HOST?>/home/viewFilm?name=top-update-4"><img class="img-top-update" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top update"></img></a></td>
                    <td>description 4</td>
                  </tr>
                  <tr class="tr-top-update">
                    <td><a href="<?=HOST?>/home/viewFilm?name=top-update-5"><img class="img-top-update" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top update"></img></a></td>
                    <td>description 5</td>
                  </tr>
                  
              </table>
            </div>
          </div>

      </div>

      <div class="top-film dark-mode">
          <div class="label-top-film"><h2>Top Film</h2></div>
          
          <div class="content-top-film">
                <table >
                    <tr class="tr-top-film">              
                      <td><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></td>
                    </tr>
                    <tr class="tr-top-film">
                      <td><a href="<?=HOST?>/home/viewFilm?name=top-update-2"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></td>
                    </tr>
                    <tr class="tr-top-film">
                      <td><a href="<?=HOST?>/home/viewFilm?name=top-update-3"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></td>
                    </tr>
                    <tr class="tr-top-film">
                      <td><a href="<?=HOST?>/home/viewFilm?name=top-update-4"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></td>
                    </tr>
                    <tr class="tr-top-film">
                      <td><a href="<?=HOST?>/home/viewFilm?name=top-update-5"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></td>
                    </tr>
                    
                </table>
          </div>

          <div class="page-number">
              <div class="numParent">
                <div class="num"><a href="">1</a></div>
                <div class="num"><a href="">1</a></div>
                <div class="num"><a href="">1</a></div>
                <div class="num"><a href="">1</a></div>
                <div class="num"><a href="">1</a></div>
              </div>
          </div>

      </div>

      <div class="footer">
          <div class="description">
              <p style="text-align: center;">Web Programming and Applications</p>
              <p><i class="fa-solid fa-copyright" style="color: #000000;"></i></i>Copyright belongs to Group 18(N2_HK2_2223_503073)</p>
              <p><i class="fa-solid fa-calendar-days" style="color: #000000;"></i>The execution time is from April 7th to May 7th.</p>
              <p><i class="fa-regular fa-circle-check" style="color: #000000;"></i>Final Project</p>
          </div>

          <div class="member">
              <p style="text-align: center; margin-bottom: 0px;">Member</p>
              <a href="https://www.facebook.com/px4.k3"><i class="fa-brands fa-facebook" style="color: #5b68c0;"></i>Kiều Thành Phát - 521H0125</a>
              <a href="https://www.facebook.com/profile.php?id=100015495856167"><i class="fa-brands fa-facebook" style="color: #5b68c0;"></i>Trần Đặng Đăng Khoa - 521H0086</a>
              <a href="https://www.facebook.com/thuc.nguyenhuu.5494"><i class="fa-brands fa-facebook" style="color: #5b68c0;"></i>Nguyễn Trí Thức - 521H0311</a>
          </div>
      </div>
     
    

  </body>
</html>