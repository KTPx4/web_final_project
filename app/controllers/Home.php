<?php 
    // require_once __DIR__ . "./app/core/controllers.php";
    // require_once "./app/core/controllers.php";
    class Home extends controllers{
        // default method call in class home 
               
        function Show($page)
        {
            $Data = "";
            
            // $model = $this->model("Student"); // function model 
                       
            // $Data = $model->Get_values_test(); // This is model
            

            // if category not have values, not show page, only show home
          
            // if(!isset($_POST['category']))
            // {
            //     $page = "home.php";
            // }

            // will show category or page home

            if($page != "home.php" && $page != "category.php" && $page!="viewDetail.php")
            {

                $this->view("notfound", $Data, $page); // function view 
                
            }else{

                if($page == "category.php")
                {
                    $model = $this->model("category");
                    $Data = $model->get_category();
                }
                else if($page == "home.php")
                {
                    $model = $this->model("category");
                    $Data = $model->get_category();
                }

                $this->view("views", $Data, $page); // function view 

            }

           
        }
    }
?>