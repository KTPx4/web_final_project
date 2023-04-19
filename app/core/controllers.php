<?php 
class controllers{
    // get data
    public function model($model)
    {
        require_once "./app/models/". $model. ".php";

        return new $model; // call type model in folder model

    }

    // show view for user
    public function view($view, $arr, $arr_para)
    {
        $detail = "./app/views/pages/home.php";
        if(count($arr_para) > 0)
        {
            if(isset($arr_para['page'])) // array('page' => '')
            {
                if($arr_para['page'] == 'notfound')
                {
                   // $detail = "./app/views/pages/notfound.php";
                   // 
                }
                else{

                }
            }
            $path = "./app/views/pages/" . $arr_para['page'][0] . ".php";
          
            print_r( $path );
            // $detail = $path;
            if(file_exists($path))
            {
                $detail = $path;
            }
            else{
                //$detail ="./app/views/pages/notfound.php";
                
            }
            
           
        }
        else
        {

        }
      
        $array_info = $arr;
        require_once "./app/views/" . $view . ".php";
    }
}
    
?>