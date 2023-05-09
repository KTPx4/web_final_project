<?php 
    // require_once _DIR_ . "./app/core/controllers.php";
    // require_once "./app/core/controllers.php";
    class Views extends controllers{
        // default method call in class home 
               
        function Show($page)
        {
            $Data = ""; // This is model
            
            
            // $model = $this->model("Student"); // function model 
                       
            // $Data = $model->Get_values_test(); // This is model
            
            
            $views = 'views';
            if(isset($_GET['film']) || isset($_GET['type']))
            {
                $page ='viewFilm.php';

                $model_film = $this->model("film");
                
                $data_all_film = "";
                $data_top_6 = "";
                $data_content = "";

                  // get all list film
                $arr_all_film = $model_film->get_all_film();
                if($arr_all_film['code'] == 0)
                {
                    $data_all_film = $arr_all_film['data'];
                }


                // get top 6 update
                $arr_top_6 = $model_film->get_top_film("6");
                if($arr_top_6['code'] == 0)
                {
                    $data_top_6 = $arr_top_6['data'];
                }
                

                // get views film



                // return data
                $arr_Data = array(
                    'list_film' => $data_all_film,
                    'top_update'=>$data_top_6,
                    'content' => $data_content
                );
                $Data = json_encode($arr_Data);
            }
            else{
               
                $views = 'notfound';
            }
            
            
            $this->view($views, $Data, $page); // function view 

           
        }
    }
?>