<?php 
require_once __DIR__ . "/../../config/db.php";
    // header("Content-type: application/json; charset=utf-8");
class film{

        function get_film_by_id($id)
        {
            $query = "select table_comment.*, table_user.user_name  FROM table_comment, table_film, table_user WHERE table_film.film_id = table_comment.film_id and table_comment.user_id = table_user.user_id and table_film.film_id='" . $id ."'";
            $data = get_DATA($query);
            return $data;
        }
        function get_all_film() {

            $query = "select * from table_film";
            $data = get_DATA($query);

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
      function get_all_year()
      {
          $query ='select DISTINCT film_year FROM table_film order by table_film.film_year DESC';
          return get_DATA($query);
      }

      function get_Film($id)
      {
        $query = "select table_film.* from table_film WHERE table_film.film_id= '" . $id. "'";
        return  get_DATA($query);
      }
      

    }
?>