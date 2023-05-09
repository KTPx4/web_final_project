<?php

  // Bắt đầu session
//   if (session_status() == PHP_SESSION_NONE) {
//     session_start();
// }

//   // Lưu giá trị $_GET['film'] vào session
//   if (isset($_GET['film'])) {
//     $_SESSION['film'] = $_GET['film'];
//   }

//   if (isset($_GET['type'])) {
//     $_SESSION['type'] = $_GET['type'];
//   }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta root-img="<?= ROOT_IMG ?>" />
    <meta root-trailer="<?= ROOT_TRAILER ?>" />
    <meta root-host="<?= HOST ?>" />

    <title><?=$title?></title>
    <link rel="icon" type="image/x-icon" href="<?=ROOT_IMG?>logo/Logo.ico">

    <!-- public css -->
    <link rel="stylesheet" href="<?=HOST?>/public/css/home.css" type="text/css">
    <link rel="stylesheet" href="<?=HOST?>/public/css/<?=$pathCss?>" type="text/css">
    <link rel="stylesheet" href="<?=HOST?>/public/css/cssElm.css" type="text/css">
    
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
   
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- public js -->
    <script src="<?=HOST?>/public/js/script.js"></script>
    <script src="<?=HOST?>/public/js/<?=$title?>.js"></script>

  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="http://localhost">
            <img src="<?=ROOT_IMG?>logo/Logo.png" alt="Logo" class="img-logo"> 
            <h4 class="text-logo" >ANIME</h4>
          </a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle dropdown" href="" role="button" data-bs-toggle="dropdown">GENRES</a>
                  <ul class="dropdown-menu dropdown-content">
                    <li><a  class="dropdown-item type-category" href="http://localhost/category?type=CAT01" type-value="CAT01">Detective</a></li>
                    <li><a class="dropdown-item type-category" href="http://localhost/category?type=CAT02" type-value="CAT02">Adventure</a></li>
                    <li><a class="dropdown-item type-category" href="http://localhost/category?type=CAT03" type-value="CAT03">Action Anime</a></li>
                    <li><a class="dropdown-item type-category" href="http://localhost/category?type=CAT04" type-value="CAT04">Romantic Comedy</a></li>
                    <li><a class="dropdown-item type-category" href="http://localhost/category?type=CAT05" type-value="CAT05">Science Fiction</a></li>
                  </ul>

              </li>  

              

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle dropdown" href="#" role="button" data-bs-toggle="dropdown">YEAR</a>
                <ul class="dropdown-menu dropdown-content year-nvbar">
                  <!-- <li><a class="dropdown-item type-category" href="#">2021</a></li> -->
                  
                </ul>
              </li>  
<!-- 
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle dropdown" href="#" role="button" data-bs-toggle="dropdown">LIBRARY</a>
                  <ul class="dropdown-menu dropdown-content">
                    <li><a class="dropdown-item type-category" href="#">All Film</a></li>
                   
                  </ul>
              </li> -->

             
            </ul>

            <form  class="form-nvbar" action="<?=HOST?>/login" method="POST">
              <div class="input-search">
                <input type="text" value placeholder="Film..." class="v1_input_BkI8D search-bar_input"></input>
              </div>  
              <div class="bnt-login">
                <button class="login-btn">LOG IN</button>
              </div>
              <!-- <i class="bi bi-brightness-high-fill switch-toggle" id="toggleDark"> </i> -->
            </form>
            <button  id="dark-mode" class="dark-mode">
                <div class="img-1">
                  <img id="img1" class="img-1" src="<?=ROOT_IMG?>logo/brightness1.png" ></img>
                </div>
                <div class="img-2">
                  <img id="img2" class="img-2" src="<?=ROOT_IMG?>logo/moon2.png" ></img>
                </div>
            </button>
          </div>
        </div>
      </nav>
      
      <div class="body">
        <div class="d-none" id="my-data" data-json="<?php  echo base64_encode($Data); ?>"></div>

        <div class="content-body">
          <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-7 col-lg-9 content-changes">
                        <div class="content-change">
                  
                            <?php 
                                require_once($pathPage);
                            ?>    
                        
                        </div>
                    </div>                 
  
                    <!-- top update - not change -->
                    <div class="col-12 col-sm-5 col-lg-3 ">
                        <div class="top-update">
                            <div class="label-top-update label"><h3>Top Update</h3></div>
                            <div class="table-top-update">
                              <table >
                                <tbody class="tbody-top-update">
  
                                    
                                </tbody>
                                  
                                                  
                              </table>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
            
        <!-- top film -->
          <div class="top-film">
            <div class="label-top-film label"><h3>LIST FILM</h3></div>

            <div class="film">
              
              <div class="container-fluid">    
                      <div class="row list-all-film">

                      </div>
                      <!-- <div class="row ">
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.png" alt="top film"></img></a></div>
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.png" alt="top film"></img></a></div>
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.png" alt="top film"></img></a></div>
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.png" alt="top film"></img></a></div>
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.png" alt="top film"></img></a></div>
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.png" alt="top film"></img></a></div>               
                      </div>           
                      <div class="row ">
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.png" alt="top film"></img></a></div>
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.png" alt="top film"></img></a></div>
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.png" alt="top film"></img></a></div>
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.png" alt="top film"></img></a></div>
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.png" alt="top film"></img></a></div>
                          <div class="col-4 col-md-2"><a href="<?=HOST?>/home/viewFilm?name=top-update-1"><img class="img-top-film" src="<?=HOST?>/public/img/picture/test1.png" alt="top film"></img></a></div>               
                      </div>        
                    -->
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
                  <div class="foot-description">
                    <div class="a d-grid" >
                      <div class="text-foot">
                          <p style="text-align: center; font-size: 25px;" >Web Programming and Applications</p>
                      </div>
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