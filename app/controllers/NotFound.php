<?php 
    // require_once "./app/core/controllers.php";
   
    class NotFound extends controllers{
        function Show($page)
        {
            $this->view("NotFound",array(), $page);

        }
    }
?>