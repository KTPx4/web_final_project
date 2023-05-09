<?php 
        require_once "./db.php";
        function get_from_type($type)
        {
            $query ="select table_film.*, table_category.* FROM table_film INNER JOIN table_category ON table_film.category_id = table_category.category_id WHERE table_category.category_id = '" . $type ."';";
        
            $data = get_DATA($query);
            // print_r($data);
            return json_encode($data);
        }

        if($_SERVER['REQUEST_METHOD'] == 'GET' &&  isset($_GET['type']))
        {
         
            // $film = $model->get_from_type($_GET['type']);
            echo get_from_type($_GET['type']);
           
        }
       
?>