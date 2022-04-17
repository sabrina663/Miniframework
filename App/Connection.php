<?php

    namespace App;

    class Connection{
        public static function conection(){
            try {
                $conect = new \PDO(
                    "mysql:host=localhost;dbname=mvc",
                    "root",
                    ""
                );
                return $conect;

            } catch (PDOException $e) {
                //throw $th;
            }
        }
    }
