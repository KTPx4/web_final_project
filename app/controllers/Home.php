<?php 
    // require_once __DIR__ . "./app/core/controllers.php";
    // require_once "./app/core/controllers.php";
    class Home extends controllers{
        // default method call in class home 
               
        function Show($page)
        {
            
            
            $model = $this->model("Student"); // function model 
                       
            $Data = $model->Get_values_test(); // This is model
            

            // if category not have values, not show page, only show home
            if(!isset($_POST['category']))
            {
                $page = "home.php";
            }
            
            $this->view("views", $Data, $page); // function view 

           
        }
    }
?>