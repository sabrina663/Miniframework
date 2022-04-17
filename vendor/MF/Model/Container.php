<?php

    namespace MF\Model;

    use App\Connection;

    class Container{

        public static function getModel($model){
            $class = "\\App\\Models\\".ucfirst($model);            
            $conexao = Connection::conection();
            return new $class($conexao);
        }
    }