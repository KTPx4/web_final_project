<?php 
    // require_once "./app/core/controllers.php";
   
    class login extends controllers{
        function Show($page)
        {
            $this->view("login",array(), $page);

        }
    }
?>