
<?php
    class App{
        
        protected $controller = "NotFound";
        protected $action = "Show";
        protected $paramas = array('page'=> 'notfound');


        function __construct()
        {
            $arr = $this->URL();// url sau "/" 
 
            $check_exists = 1;          
         
            $par = array('page'=> 'notfound');

            if(count($arr) > 0)
            {
                 // xử lý controller:
                if(file_exists("./app/controllers/".$arr[0].".php")) //"http://localhost/Home/a" arr -> [Home, a] => arr[0] = Home
                {
                    $contr = $arr[0];

                    unset($arr[0]);

                    require_once "./app/controllers/". $contr.".php";
                    
                    if(isset($arr[1]))
                    {
                        if(method_exists( $contr, $arr[1])) 
                        {
                            $act = $arr[1];
                        }
                      
                        unset($arr[1]);
                        
                        $par = $arr ? array_values($arr) : [];
                    }
                    else // khong truyen action
                    {
                        $act = "show";
                        $par=[];
                    }
                   
                    //echo "ok";
                   
                }
              
                if(isset($contr) && isset( $act))
                {
                    $this->controller = $contr;
                    $this->action= $act;
                    $this->paramas = $par ? array('page'=>array_values($arr)) : [];
                }
                else
                {
                    require_once "./app/controllers/NotFound.php";
                }
               
                

                
               
                // xu ly params
                
            }
            else // neu khonh nhap gi tren url
            {
                $this->controller = "Home";
                $this->action = "Show";
                $this->paramas = array('page'=> 'home');
                require_once "./app/controllers/Home.php";
            }
          
            // * 
            $control = new $this->controller; // create new object controller
            // echo $this->action . "<br/>" . $this->controller;
        //    $this->controller = new $this->controller; // create new object controller
            // print_r($this->controller);
            // print_r($this->action);
            
            //echo  "core/app " . "<br/>"; 
           // print_r($this->paramas);

           call_user_func_array(array($control, $this->action), array($this->paramas));// call function in controller:(callback, array aguments)
           //https://www.php.net/manual/en/function.call-user-func-array.php


        }

        function URL()
        {
            if(isset($_GET["url"]))
            {
               // print_r(explode("/", filter_var(trim($url = $_GET["url"], "/"))));
                return explode("/", filter_var(trim($url = $_GET["url"], "/")));
            }
            else{
                return array();
            }
           // echo $_GET["url"];
        }
    }
?>