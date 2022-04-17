<?php
    namespace MF\Init;

    abstract class Boostrap{
        private $route;
        public function __construct(){
            $this->initRoutes();
            $this->run($this->getUrl());
        }
        public function setRoute(array $routes){
            $this->route = $routes;
        }
        public function getRoute(){
            return $this->route;
        }
        protected function getUrl(){
            return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
        }
        protected function run($url){
            foreach ($this->getRoute() as $key => $route) {
                if($route['route'] === $url){
                    $class = "App\\Controllers\\".ucfirst($route['controller']);
                    $controller = new $class;
                    $action = $route['action'];
                    $controller->$action();
                }
            }
        }
    }