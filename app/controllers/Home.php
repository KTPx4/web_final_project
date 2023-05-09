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

            if($page != "home.php" && $page != "category.php" && $page!="viewDetail.php" )
            {

                $this->view("notfound", $Data, $page); // function view 
                
            }else{

                $model_film = $this->model("film");
                
                $data_all_film = "";
                $data_top_6 = ""; // top update
                $data_content = "";
                $data_year= "";

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



                if($page == "category.php" )
                {
                  
                        $model = $this->model("category");
                       
                        $arr_category = $model->get_from_type($_GET['type']) ;
                        if($arr_category['code'] == 0)
                        {   
                            $data_content = $arr_category['data'];
                        }
                       
                }
                else if($page == "home.php")
                {
                    
                    $arr_top_hot = $model_film->get_top_hot("9");
                    if( $arr_top_hot['code'] == 0)
                    {   
                        $data_content =  $arr_top_hot['data'];
                    }

                }

                $arr_Data = array(
                    'list_film' => $data_all_film,
                    'top_update'=>$data_top_6,
                    'content' => $data_content,
                    'year' => $data_year
                );

                $Data = json_encode($arr_Data);
                
                $this->view("views", $Data, $page); // function view 

            }

           
        }
    }
?>