<?php
    session_start();
    include('PostgreeSQL.php');
    date_default_timezone_set('America/Sao_Paulo');
    define('INCLUDE_PATH','http://localhost/PHP/Wallet/');
    define('INCLUDE_PATH_DASHBOARD','http://localhost/PHP/Wallet/Dashboard/');


    function autoload($class){
        if(file_exists('Controllers/'.$class.'.php')){
            include('Controllers/'.$class.'.php');
        }
        if(file_exists('Models/'.$class.'.php')){
            include('Models/'.$class.'.php');
        }
    }

    spl_autoload_register("autoload");


    function error(){
        if(error_reporting(1)){
            error_log('E_ERROR: '.error_get_last(), error_reporting(1), 'raiane.dev@gmail.com');
        }else if(error_reporting(2)){
            error_log('E_WARNING: '.error_get_last(), error_reporting(2), 'raiane.dev@gmail.com');
        }else if(error_reporting(3)){
            error_log('E_PARSE: '.error_get_last(), error_reporting(3), 'raiane.dev@gmail.com');
        }else if(error_reporting(4)){
            error_log('E_NOTICE: '.error_get_last(), error_reporting(4), 'raiane.dev@gmail.com');
        }else if(error_reporting(5)){
            error_log('E_CORE_ERROR: '.error_get_last(), error_reporting(5), 'raiane.dev@gmail.com');
        }
    }

?>