<?php
    require_once "define.php";

    function get_connection()
    {
        $conn = new mysqli(HOSTDB, USER, PASS, DB);
        if ($conn->connect_errno) {
            die('Connect failed with message: ' . $conn->connect_error);
        }
        $conn->set_charset("utf8");
        return $conn;
    }

    function get_DATA($query)
    {
            $conn = get_connection();
            $rs = $conn->query($query);
    
            if (!$rs) return null;
    
            $film = array();
    
            for ($i = 0; $i < $rs->num_rows; $i++) 
            {
                $films = $rs->fetch_assoc();
                $film[$i] = $films;
            }
            // print_r($film);
            $data = array(
                'code' => 0,
                'message'=>'get product success',
                'data' => $film
            );
            return $data;
    }
?>