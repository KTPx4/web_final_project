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
            $type = 0;
            if(isset($_GET['film']) || isset($_GET['type']))
            {
                $page ='viewFilm.php';
                if(isset($_GET['type']))
                {
                    $type = $_GET['type']; // 0 for trailer, 1 for watch film
                }

                $model_film = $this->model("film");
                
                $data_all_film = "";
                $data_top_6 = "";
                $data_content = "";
                $data_year= "";
                $data_Film =""; // data of film by id

                // get all year
                $arr_year = $model_film->get_all_year();
                if($arr_year['code'] == 0)
                {
                    $data_year = $arr_year['data'];
                }
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
                

                // get cmt film
                $arr_comment_film = $model_film->get_film_by_id($_GET['film']); // get all comment info film from id
                if($arr_comment_film['code'] == 0)
                {
                    $data_comment = $arr_comment_film['data'];
                    print_r($data_Film);
                }

                // get views film
                $arr_Film = $model_film->get_Film($_GET['film']); // get all comment info film from id
                if($arr_Film['code'] == 0)
                {
                    $data_Film = $arr_Film['data'];
                    // print_r($data_Film);
                }

                // return data
                $arr_Data = array(
                    'list_film' => $data_all_film,
                    'top_update'=>$data_top_6,
                    'content' => $data_content,
                    'year' => $data_year,
                    'comment' =>$data_comment,
                    'film' => $data_Film
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