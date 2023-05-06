<?php 
class controllers{
    // get data
    public function model($model)
    {
        require_once "./app/models/". $model. ".php";

        return new $model; // call type model in folder model

    }

    // show view for user
    public function view($view, $Data, $page)
    {
       
        $array_info = $Data; // data from database
        
        $arr_page = explode(".", $page); // "home.html" => 'home' , 'html'
        
        $title = $arr_page[0]; // title of page is firt char

        $pathPage = "./app/views/pages/" .$page ;
        
        $pathCss =  $arr_page[0] . ".css"; // path css
        
        require_once "./app/views/" . $view . ".php";

    }

}
    
?>