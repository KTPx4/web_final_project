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
  
  </head>
  <body>

    <?php 
        require_once($pathPage);
    ?>

  </body>
</html>