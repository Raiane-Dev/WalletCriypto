<?php

    class Models{

        public static function addToCart($id_wallet){
            if(!isset($_SESSION['cart_wallet'])){
                $_SESSION['cart_wallet'] = [];
            }
            $_SESSION['cart_wallet'][] = [$id_wallet];
        }

        public static function redirect($page){
            echo '<script> location.href = "'.$page.'"; </script>';
        }

        public static function alert($msg){
            echo '<script> alert('.$msg.'); </script>';
        }

        public static function getSingle($table,$where){
            $get = \PostgreSQL::connect()->prepare("SELECT * FROM $table $where");
            $get->execute();
            return $get->fetch();
        }
    }
?>