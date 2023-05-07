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
    
    <link rel="stylesheet" href="<?=HOST?>/public/css/<?=$pathCss?>" type="text/css">

    <link rel="stylesheet" href="<?=HOST?>/public/css/cssElm.css" type="text/css">
    <link rel="stylesheet" href="<?=HOST?>/public/css/cssImg.css" type="text/css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
   
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- public js -->
    <script src="<?=HOST?>/public/js/account/script.js"></script>

  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="javascript:void(0)">
            <img src="<?=$root_img?>logo/Logo.png" alt="Logo" class="img-logo"> 
            <h4 class="text-logo">ANIME</h4>
          </a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
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
            <form  class="d-flex" >
              <input type="text" value placeholder="Film name, Anime, Comic, Cast..." class="v1_input_BkI8D search-bar_input">
              <button class="login-btn">LOG IN</button>
              <!-- <i class="bi bi-brightness-high-fill switch-toggle" id="toggleDark"> </i> -->
            </form>
            <button  id="dark-mode" class="dark-mode">
                <div class="img-1">
                  <img id="img1" class="img-1" src="<?=HOST?>/public/img/logo/brightness1.png" ></img>
                </div>
                <div class="img-2">
                  <img id="img2" class="img-2" src="<?=HOST?>/public/img/logo/moon2.png" ></img>
                </div>
            </button>
          </div>
        </div>
      </nav>
      
      <div class="body">

        <div class="container-fluid">
              <div class="row">
                  <div class="col-12 col-sm-9 col-xl-10 content-changes">
                      <div class="content-change">
                
                          <?php 
                              require_once($pathPage);
                          ?>    
                      
                      </div>
                  </div>
                  

                  <!-- top update - not change -->
                  <div class="col-12 col-sm-3 col-xl-2 ">
                      <div class="top-update">
                          <div class="label-top-update label"><h3>Top Update</h3></div>
                          <div class="table-top-update">
                            <table >
                              <tbody>
                                  <tr class="tr-top-update">              
                                    <td><a href=""><img class="img-top-update" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top update" ></img></a></td>
                                    <td class=""><div class="label">description 1</div></td>
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

          <div class="top-film">
            <div class="label-top-film label"><h3>TOP FILM</h3></div>

            <div class="film">
              
              <div class="container-fluid">    
                  
                      <div class="row ">
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>               
                      </div>           
                      <div class="row ">
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.jpg" alt="top film"></img></a></div>               
                      </div>        
                   
              </div>
            </div>
            <div class="page-number">
                <div class="numParent">
                  <div class="num"><a href="">1</a></div>
                  <div class="num"><a href="">2</a></div>
                  <div class="num"><a href="">3</a></div>
                  <div class="num"><a href="">4</a></div>
                  <div class="num"><a href="">5</a></div>
                </div>
            </div>
          </div>
      
      </div>
        <!-- footer  -->
      
      <footer class="container-fluid text-center">
          <div class="row" style="width: 100%;">
              <div class="col-12 col-md-6">
                  <div class="description">
                    <div class="a d-grid" >
                      <p style="text-align: center; font-size: 25px;" >Web Programming and Applications</p>
                      <p><i class="fa-solid fa-copyright" style="color: #000000;"></i></i>Copyright belongs to Group 18(N2_HK2_2223_503073)</p>
                      <p><i class="fa-solid fa-calendar-days" style="color: #000000;"></i>The execution time is from April 7th to May 7th.</p>
                      <p><i class="fa-regular fa-circle-check" style="color: #000000;"></i>Final Project</p>
                    </div>
                  </div>
              </div>
              <div class="col-12 col-md-6">
                  <div class="member">
                      <p style="text-align: center; margin-bottom: 0px;font-size: 25px;">Member</p>
                        <div class="a d-grid" >
                          <a href="https://www.facebook.com/px4.k3"><i class="fa-brands fa-facebook" style="color: #5b68c0;"></i>Kiều Thành Phát - 521H0125</a>
                          <a href="https://www.facebook.com/profile.php?id=100015495856167"><i class="fa-brands fa-facebook" style="color: #5b68c0;"></i>Trần Đặng Đăng Khoa - 521H0086</a>
                          <a href="https://www.facebook.com/thuc.nguyenhuu.5494"><i class="fa-brands fa-facebook" style="color: #5b68c0;"></i>Nguyễn Trí Thức - 521H0311</a>
                        </div>
                  </div>
              </div>
          </div>          
      </footer>
      
      
     
    

 </body>
</html>