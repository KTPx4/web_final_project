<?php 
    define('HOSTDB', '127.0.0.1');
    define('USER', 'root');
    define('PASS', '');
    // define('DB', 'webfilm');
    define('DB', 'webfilm');
    
    $root_img='http://'.$_SERVER['HTTP_HOST'] . '/public/img/';
    define('ROOT_IMG', $root_img);
    
    $root_trailer ='http://'.$_SERVER['HTTP_HOST'] . "/public/video-trailer/";
    define('ROOT_TRAILER', $root_trailer);
    
    
    $HOST = "http://".$_SERVER['HTTP_HOST'];
    define('HOST', $HOST);
    
?>