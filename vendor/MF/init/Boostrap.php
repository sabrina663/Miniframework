<?php
    namespace MF\Init;
    abstract class Boostrap{
        private $routes;
        public function __construct(){
            $this->initRoutes();
            $this->run($this->getUrl());
        }
        
        abstract protected function initRoutes();
        public function getRoutes(){
            return $this->routes;
        }
        public function setRoutes($routes){
            $this->routes = $routes;
        }
        protected function getUrl(){
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            
        }
        protected function run($url){
            foreach($this->getRoutes() as $key => $route ){
                if($url == $route['route']){
                    $class = "App\\Controllers\\".ucfirst($route['controller']);
                    $controller = new $class;
                    $action = $route['action'];
                    $controller->$action();
                }
            }
        }
    }

?>