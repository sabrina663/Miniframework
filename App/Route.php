<?php
    namespace App;
    use MF\init\Boostrap;
    class Route extends Boostrap {
        public function initRoutes(){
            $routes['home'] = array(
                "route" => '/',
                'controller' => 'IndexController',
                'action' => 'index'
            );
            $this->setRoutes($routes);
        }
        
    }