<?php 
    // require_once _DIR_ . "./app/core/controllers.php";
    // require_once "./app/core/controllers.php";
    class Views extends controllers{
        // default method call in class home 
               
        function Show($page)
        {
            
            
            $model = $this->model("Student"); // function model 
                       
            $Data = $model->Get_values_test(); // This is model
            
            $views = 'views';
            if(isset($_GET['film']) || isset($_GET['type']))
            {
                $page ='viewFilm.php';
            }
            else{
               
                $views = 'notfound';
            }
            
            
            $this->view($views, $Data, $page); // function view 

           
        }
    }
?>