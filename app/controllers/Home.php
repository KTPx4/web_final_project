<?php 
    // require_once __DIR__ . "./app/core/controllers.php";
    // require_once "./app/core/controllers.php";
    class Home extends controllers{
        // default method call in class home 
        function Sayhi($arr_para)
        { 
            // if(!empty($arr_para) > 0)
            // {
            //     foreach($arr_para as $a)
            //     {
            //         echo $a . " + ";

            //     }
            // }

            $model_student = $this->model("Student"); // call in controller of core

            // print_r($model_student->GetSV());
            print_r($arr_para);
            echo "<br/> say hi in Home" . "<br/>";
        }
        
        function Show($arr_para)
        {
            // if(!empty($arr_para) > 0)
            // {
            //     foreach($arr_para as $a)
            //     {
            //         echo $a . " + ";

            //     }
            // }
            // $model_student = $this->model("Student"); // call in controller of core

            // print_r($model_student->Get_values_test());
            // $this->view("home");
            // $this->view("home", $arr_para);
            
            $model = $this->model("Student"); // function model 
                        // new Student()
            $arr = $model->Get_values_test();

            $para = $arr_para;
           
            echo "Home - controllers ";
            print_r($para);
            
            if(count($arr_para) < 1)
            {
                $para = array('page'=> 'home');
            }
            $this->view("views", $arr, $para); // function view 

            // echo "<br/> show in Home" . "<br/>";
        }
    }
?>