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
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- public js -->
    <script src="public/js/account/script.js"></script>
  </head>
  <body>

      <!-- menu bar - mo phat -->
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <!-- <a class="navbar-brand" href="#"><img src="" alt="">logo</a> -->
          <div class="logo-container">
            <a href="#"><img src="<?=$root_img?>logo/Logo.png" alt="Logo"></a>
            <h1 class="logo-text">ANIME</h1>
          </div>
          
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle dropdown" href="#" role="button" data-bs-toggle="dropdown">GENRES</a>
                <ul class="dropdown-menu dropdown-content">
                  <li><a class="dropdown-item" href="#">Detective</a></li>
                  <li><a class="dropdown-item" href="#">Adventure</a></li>
                  <li><a class="dropdown-item" href="#">Action Anime</a></li>
                  <li><a class="dropdown-item" href="#">Romantic Comedy</a></li>
                  <li><a class="dropdown-item" href="#">Science Fiction</a></li>
                </ul>
              </li>  

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle dropdown" href="#" role="button" data-bs-toggle="dropdown">TOP ANIME</a>
                <ul class="dropdown-menu dropdown-content">
                  <li><a class="dropdown-item" href="#">Odd TaxI - Chuyến Taxi bất ổn (2021)</a></li>
                </ul>
              </li>  

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle dropdown" href="#" role="button" data-bs-toggle="dropdown">SEASON</a>
                <ul class="dropdown-menu dropdown-content">
                  <li><a class="dropdown-item" href="#">Odd TaxI - Chuyến Taxi bất ổn (2021)</a></li>
                </ul>
              </li>  
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle dropdown" href="#" role="button" data-bs-toggle="dropdown">COMMING SOON</a>
                <ul class="dropdown-menu dropdown-content">
                  <li><a class="dropdown-item" href="#">Odd TaxI - Chuyến Taxi bất ổn (2021)</a></li>
                </ul>
              </li>  
            </ul>
          </div>

          <!--SEARCH-->
          <!--SEARCH-->
          <div class="col-lg-3">
            <div id="searchBar" class="v1_root_deaVh v1_focus_V1FN7">
              <input type="text" value placeholder="Film name, Anime, Comic, Cast..." class="v1_input_BkI8D search-bar_input">
            </div>
          </div>

          <!--LOGIN AND REGISTER-->
          <div class="login-register w-50">
            <button class="login-btn">LOG IN</button>
            <button class="register-btn">REGISTER</button>
          </div>
  
          <div id="wrapper">
            <input type="checkbox" name="" class="switch-toggle" id="light-dark">
          </div>
         
        </div>
      </nav>

      <!-- content -->
      <div class="container-xxl">
            <div class="row">
                <div class="col-12 col-sm-10 col-xl-10  border">
                    <div class="content-change">
              
                        <?php 
                            require_once($pathPage);
                        ?>    
                    
                    </div>
                </div>
                
                <div class="col-12 col-sm-2 col-xl-2  border">
                    <div class="top-update">
                        <div class="label-top-update "><h3>Top Update</h3></div>
                        <div class="table-top-update">
                          <table >
                            <tbody>
                                <tr class="tr-top-update">              
                                  <td><a href=""><img class="img-top-update" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top update" ></img></a></td>
                                  <td>description 1</td>
                                </tr>
                                <tr class="tr-top-update">              
                                  <td><a href=""><img class="img-top-update" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top update" ></img></a></td>
                                  <td>description 1</td>
                                </tr>
                                <tr class="tr-top-update">              
                                  <td><a href=""><img class="img-top-update" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top update" ></img></a></td>
                                  <td>description 1</td>
                                </tr>
                                <tr class="tr-top-update">              
                                  <td><a href=""><img class="img-top-update" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top update" ></img></a></td>
                                  <td>description 1</td>
                                </tr>
                                <tr class="tr-top-update">              
                                  <td><a href=""><img class="img-top-update" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top update" ></img></a></td>
                                  <td>description 1</td>
                                </tr>

                            </tbody>
                              
                                               
                          </table>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    
        
        <!-- top film -->
        <div class="container-xxl ">
            <div class="row">
                <div class="label-top-film ">Top Film</div>
            </div>
            <div class="row border">
                <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>
                <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>
                <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>
                <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>
                <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>
                <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>               
            </div>           
            <div class="row border">
                <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>
                <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>
                <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>
                <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>
                <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>
                <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>               
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
      
      
      
        <!-- footer -->
        <footer class="container-xxl text-center border">
            <div class="row">
                <div class="col-6">
                    <div class="description">
                        <p style="text-align: center;">Web Programming and Applications</p>
                        <p><i class="fa-solid fa-copyright" style="color: #000000;"></i></i>Copyright belongs to Group 18(N2_HK2_2223_503073)</p>
                        <p><i class="fa-solid fa-calendar-days" style="color: #000000;"></i>The execution time is from April 7th to May 7th.</p>
                        <p><i class="fa-regular fa-circle-check" style="color: #000000;"></i>Final Project</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="member">
                        <p style="text-align: center; margin-bottom: 0px;">Member</p>
                        <a href="https://www.facebook.com/px4.k3"><i class="fa-brands fa-facebook" style="color: #5b68c0;"></i>Kiều Thành Phát - 521H0125</a>
                        <a href="https://www.facebook.com/profile.php?id=100015495856167"><i class="fa-brands fa-facebook" style="color: #5b68c0;"></i>Trần Đặng Đăng Khoa - 521H0086</a>
                        <a href="https://www.facebook.com/thuc.nguyenhuu.5494"><i class="fa-brands fa-facebook" style="color: #5b68c0;"></i>Nguyễn Trí Thức - 521H0311</a>
                    </div>
                </div>
            </div>          
        </footer>

      <!-- <div class="top-film dark-mode">
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
      </div> -->
     
    

  </body>
</html>