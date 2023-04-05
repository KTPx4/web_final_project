<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel= "stylesheet" href="<?=$root='http://'.$_SERVER['HTTP_HOST']
?>/public/css/css.css" type="text/css">

</head>
<body>
<div class="navbar">
  <div class="logo">
    <a href="#"><img src="logo.png" alt="Logo"></a>
  </div>
  <div class="menu">
    <a href="#">TRANG CHỦ</a>
    <a href="#">Giới thiệu</a>
    <div class="dropdown">
      <a href="#">Dịch vụ</a>
      <div class="dropdown-content">
        <a href="#">Dịch vụ 1</a>
        <a href="#">Dịch vụ 2</a>
        <a href="#">Dịch vụ 3</a>
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