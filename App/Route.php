<?php
    namespace App;

    use MF\Init\Boostrap;

    class Route extends Boostrap{
        protected function initRoutes(){
            $routes['home'] = array (
                "route" => "/",
                "controller" => "IndexController",
                "action" => "index"
            );
            $routes['sobre'] = array (
                "route" => "/sobre",
                "controller" => "IndexController",
                "action" => "sobre"
            );
            $this->setRoute($routes);
        }
        
    };