<?php 
    // require_once __DIR__ . "./app/core/controllers.php";
    // require_once "./app/core/controllers.php";
    class Views extends controllers{
        // default method call in class home 
               
        function Show($page)
        {
            
            
            $model = $this->model("Student"); // function model 
                       
            $Data = $model->Get_values_test(); // This is model
            

            if(isset($_POST['film']) || isset($_POST['trailer']))
            {
                $page = "viewFilm.php";
            }
            
            else if(isset($_POST['details']))
            {
                $page = "detailFilm.php";

            }
            else{
                $page = "home.php";

            }
            
            $this->view("views", $Data, $page); // function view 

           
        }
    }
?>