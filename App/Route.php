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
            $routes['sobre_nos'] = array(
                "route" => '/sobre_nos',
                'controller' => 'IndexController',
                'action' => 'SobreNos'
            );
            $this->setRoutes($routes);
        }
        
    }