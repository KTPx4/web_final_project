<?php 
require_once __DIR__ . "/../../config/db.php";
    // header("Content-type: application/json; charset=utf-8");
class film{

        
        function get_all_film() {

            $query = "select * from table_film";
            $data = get_DATA($query);

           
      
            // return json_encode($data);
            return $data;
        }

      function get_top_film($top) // top by day update
      {
            $query = "select table_film.* FROM table_film ORDER BY film_day_update DESC LIMIT " . $top;
            return  get_DATA($query);
      }

      function get_top_hot($top)
      {
        $query ='select table_film.*, table_category.category_name FROM table_film, table_category WHERE table_film.category_id = table_category.category_id ORDER BY film_view DESC LIMIT '. $top;
        return get_DATA($query);
      }

    }
?>