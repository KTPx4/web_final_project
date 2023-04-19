<?php
  $root_img='http://'.$_SERVER['HTTP_HOST'] . "/public/img/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel= "stylesheet" href="<?=$root='http://'.$_SERVER['HTTP_HOST']?>/public/css/css.css" type="text/css">
    <link rel= "stylesheet" href="<?=$root='http://'.$_SERVER['HTTP_HOST']?>/public/css/cssImg.css" type="text/css">

</head>
<body>
<div>
      <div class="navbar">
    <div class="logo-text">
      <div class="logo">
        <a href="#"><img src='<?=$root_img?>logo/Logo.png' alt="Logo"></a>
      </div>
      <div class="text">ANIME</div>
    </div>
    <div class="menu">

      <a href="#">TRANG CHỦ</a>

      <div class="dropdown">
        <a href="#">DẠNG ANIME</a>
        <div class="dropdown-content">
          <a href="<?=$root='http://'.$_SERVER['HTTP_HOST']?>/Home/sayhi">TV Series</a>
          <a href="<?=$root='http://'.$_SERVER['HTTP_HOST']?>/Home/show/account">Trung Quốc</a>
          <a href="#">Anime Đang Chiếu</a>
          <a href="#">Movie vs OVA</a>
          <a href="#">Anime Sắp Chiếu</a>
          <a href="#">Anime Trọn Bộ</a>
        </div>
      </div>
      <div class="dropdown">
        <a href="#">TOP ANIME</a>
        <div class="dropdown-content">
          <a href="#">Theo Ngày</a>
          <a href="#">Theo Tháng</a>
          <a href="#">Theo Năm</a>
          <a href="#">Yêu Thích</a>
          <a href="#">Theo Mùa</a>
        </div>
      </div>
      <a href="#">Liên hệ</a>
    </div>
    <div class="toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>
    
  </div>

  <div class="content">
      <div class="content-changes">
        <?php 
            require_once  $detail;
        ?>
      </div>
      <div class="content-default">
          <div class="list-top">
            <p style="text-align: center;">Top 10</p>
            <table class="scrollable-table">
              <tbody>

                <tr>
                  <td >
                    <div class="top">
                      <img class="top-10" src="<?=$root='http://'.$_SERVER['HTTP_HOST']?>/public/img/picture/test1.jpg" alt="">
                    </div>
                    <div class="text-top">                    
                      <p>img1</p>
                      <p>description for img1</p>
                    </div>
                  </td>                
                </tr>
                <tr>
                  <td >
                    <div class="top">
                      <img class="top-10" src="<?=$root='http://'.$_SERVER['HTTP_HOST']?>/public/img/picture/test1.jpg" alt="">
                    </div>
                    <div class="text-top">                    
                      <p>img1</p>
                      <p>description for img1</p>
                    </div>
                  </td>                
                
                
               
                <tr>
                  <td >
                    <div class="top">
                      <img class="top-10" src="<?=$root='http://'.$_SERVER['HTTP_HOST']?>/public/img/picture/test1.jpg" alt="">
                    </div>
                    <div class="text-top">                    
                      <p>img1</p>
                      <p>description for img1</p>
                    </div>
                  </td>                
                </tr>
                <tr>
                  <td >
                    <div class="top">
                      <img class="top-10" src="<?=$root='http://'.$_SERVER['HTTP_HOST']?>/public/img/picture/test1.jpg" alt="">
                    </div>
                    <div class="text-top">                    
                      <p>img1</p>
                      <p>description for img1</p>
                    </div>
                  </td>                
                </tr>
                <tr>
                  <td >
                    <div class="top">
                      <img class="top-10" src="<?=$root='http://'.$_SERVER['HTTP_HOST']?>/public/img/picture/test1.jpg" alt="">
                    </div>
                    <div class="text-top">                    
                      <p>img1</p>
                      <p>description for img1</p>
                    </div>
                  </td>                
                </tr>
                <tr>
                  <td >
                    <div class="top">
                      <img class="top-10" src="<?=$root='http://'.$_SERVER['HTTP_HOST']?>/public/img/picture/test1.jpg" alt="">
                    </div>
                    <div class="text-top">                    
                      <p>img1</p>
                      <p>description for img1</p>
                    </div>
                  </td>                
                </tr>
                <tr>
                  <td >
                    <div class="top">
                      <img class="top-10" src="<?=$root='http://'.$_SERVER['HTTP_HOST']?>/public/img/picture/test1.jpg" alt="">
                    </div>
                    <div class="text-top">                    
                      <p>img1</p>
                      <p>description for img1</p>
                    </div>
                  </td>                
                </tr>
                <tr>
                  <td >
                    <div class="top">
                      <img class="top-10" src="<?=$root='http://'.$_SERVER['HTTP_HOST']?>/public/img/picture/test1.jpg" alt="">
                    </div>
                    <div class="text-top">                    
                      <p>img1</p>
                      <p>description for img1</p>
                    </div>
                  </td>                
                </tr>
                <tr>
                  <td >
                    <div class="top">
                      <img class="top-10" src="<?=$root='http://'.$_SERVER['HTTP_HOST']?>/public/img/picture/test1.jpg" alt="">
                    </div>
                    <div class="text-top">                    
                      <p>img1</p>
                      <p>description for img1</p>
                    </div>
                  </td>                
                </tr>
                

              </tbody>
             
            </table>
          </div>
      </div>

  </div>


  <div class="footer">
    
     <div>
      <ul id="num" >
          <li class="num-pages"><a class="num" href="">1</a></li>
          <li class="num-pages"><a class="num" href="">2</a></li>
          <li class="num-pages"><a class="num" href="">3</a></li>
          <li class="num-pages"><a class="num" href="">4</a></li>
          <li class="num-pages"><a class="num" href="">5</a></li>
        </ul>
     </div>
 
  </div>
</div>



</body>
</html>