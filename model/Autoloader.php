<?php

namespace Model;

    class Autoloder{

        static function register(){
            spl_autoload_register(array(__CLASS__, 'autolod'));
        }

        static function autolod($class){
            if (strpos($class, __NAMESPACE__. '\\') == 0){
                $class= str_replace(__NAMESPACE__. '\\', '', $class);
                $class = str_replace('\\', '/', $class);
                require __DIR__. '/'. $class. '.php';
            } 
        }

    }

?>
