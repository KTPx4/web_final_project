<?php 
    class App{
        protected $controller = "NotFound";
        protected $page = 'home.html';

        function __construct()
        {
            $URL = $this->URL();
            // print_r($URL);
            if(count($URL) > 0)
            {
                // if exists Controller -> call this controller
                if(file_exists("./app/controllers/".$URL[0].".php")) 
                {
                    
                    $this->controller = $URL[0];
                    unset($URL[0]);

                    if(isset($URL[1]))
                    {
                        if(file_exists("./app/views/pages/".$URL[1].".html"))
                        {
                          
                            $nameFile =  $URL[1].".html";
                            $this->page =  $nameFile;
                        }
                        else
                        {
                            $this->controller = "NotFound";

                        }
                        unset($URL[1]);
                    }
                }
                else
                {
                    $this->controller = "NotFound";
                    $this->page = 'home.html';
                }

            } 
            else
            {
                $this->controller = "Home";
                $this->page = 'home.html';
            }
            
            // print_r($this->page);

            require_once "./app/controllers/". $this->controller .".php";

            $ctrl = new $this->controller;
            
          
            $p = array($this->page);

            call_user_func_array(array($ctrl, "Show"), $p);// call function in controller:(callback, array aguments)
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