<?php 
    class App{
        protected $controller = "NotFound";
        protected $page = 'home.php';
       
        function __construct()
        {
            $URL = $this->URL();
            // print_r($URL);
            if(count($URL) > 0) // if have input url
            {
                // if exists Controller -> call this controller
                if(file_exists("./app/controllers/".$URL[0].".php")) 
                {
                    $this->controller = $URL[0]; //
                    // print_r($this->controller);
                    unset($URL[0]); 

                    if(isset($URL[1])) // if have page -follow to: http://localhost/controller/pages?query=
                    {

                        $query = explode("?", filter_var(trim($URL[1], "?"))); // get query after pages
                        if(!isset($query)) // if call pages without query for type or film -> not found

                        {
                            $this->controller = "NotFound"; 

                        }
                        $pages = $query[0] ?$query[0]: "";
                        $queryString = "";
                        if(isset($query[1]))
                        {
                            $queryString = $query[1] ? $query[1] : "";

                        }
                        
                       
                        
                        // print_r($URL);
                       

                        // push query to method get 
                        parse_str($queryString, $_GET);
                        
                        

                       // if exists page and method get
                        if(file_exists("./app/views/pages/".$pages.".php") && (isset($_GET['type']) || isset($_GET['film'])))

                        {
                          
                            $nameFile =  $pages.".php";
                            $this->page =  $nameFile;
                            // $_GET['type'] =  
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
                    $this->page = 'home.php';
                }

            } 
            else
            {
                $this->controller = "Home";
                $this->page = 'home.php';
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
               
                
                return explode("/", filter_var(trim($url = $_GET["url"], "/")));
            }
            else{
                return array();
            }
          
        }
    }
?>