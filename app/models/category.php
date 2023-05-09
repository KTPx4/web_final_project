<?php 
require_once __DIR__ . "/../../config/db.php";
    // header("Content-type: application/json; charset=utf-8");
class category{

        
        function get_category() {

            // TODO: viết chức năng đọc tất cả sản phẩm ở đây
            // $query = "select * from table_film";
            
            

            /*
            $en = json_encode($data);
           
            $de = json_decode($en);
           
            // print_r($de->data); // get data

            $tb = $de->data; // get all data of json

            foreach($tb as $t) // read each array table (1 rows for 1 film)
            {
                echo "-----------------------------------------";
                print_r($t->film_id);
            }
            */
            $query = "select * from table_film";
            $data = get_DATA($query);

            // echo "hiiiiiiiiiiiiiiiii";
            // print_r($data);
            // return json_encode($data);
            return $data;

        }

       function get_from_type($type)
        {
            $query =$query ="select table_film.*, table_category.* FROM table_film INNER JOIN table_category ON table_film.category_id = table_category.category_id WHERE table_category.category_id = '" . $type ."';";;
           
            $data = get_DATA($query);
            // print_r($data);
            // return json_encode($data);
            return $data;

        }
        function get_from_year($year)
        {
            $query ="select table_film.*, table_category.* FROM table_film INNER JOIN table_category ON table_film.category_id = table_category.category_id WHERE table_film.film_year = '" . $year ."';";;
           
            $data = get_DATA($query);
            // print_r($data);
            // return json_encode($data);
            return $data;

        }
    }
?>