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
        <a href="#">TV Series</a>
        <a href="#">Trung Quốc</a>
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
</body>
</html>