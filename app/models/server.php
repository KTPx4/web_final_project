<?php 
        // function get_from_type($type)
        // {
        //     require_once "./db.php";
        //     $query ="select table_film.*, table_category.* FROM table_film INNER JOIN table_category ON table_film.category_id = table_category.category_id WHERE table_category.category_id = '" . $type ."';";
        
        //     $data = get_DATA($query);
        //     // print_r($data);
        //     return json_encode($data);
        // }

        require_once "./category.php";
        
        if($_SERVER['REQUEST_METHOD'] == 'GET' )
        {

            $model = new category;
            if(isset($_GET['type'])) // request from id category
            {
                $datas = $model->get_from_type( $_GET['type'] );
                // $film = $model->get_from_type($_GET['type']);
                echo json_encode( $datas);

            }
            if(isset($_GET['year'])) // if request year of film
            {
                $datas = $model->get_from_year( $_GET['year'] );
                // $film = $model->get_from_type($_GET['type']);
                echo json_encode( $datas);
            }
           
        }
       
?>