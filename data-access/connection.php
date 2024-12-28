<?php
    class Connection{
        public static function connect(){
            define("server","localhost");
            define("dbName","avianca");
            define("user","root");
            define("password","");

            $preferrences = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

            try{
                return new PDO("mysql:host=".server."; dbname=".dbName,user,password,$preferrences);
            }catch(Exception $ex){
                die("Error al intentar establcer connexión: " . $ex->getMessage());
            }
        }
    }
?>