<?php

    class ClientSocket{

        public function __construct(){
            error_reporting(E_ALL);

            $host = '127.0.0.1';
            $port = 3000;
        
            $message = 'Olá, mundo!';
            $socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
            $result = socket_connect($socket, $host, $port) or die("Could not connect toserver\n");
            socket_write($socket, $message, strlen($message)) or die("Could not send data to server\n");
            $result = socket_read($socket, 1024) or die("Could not read server response\n");
            echo "Reply From Server: \n" . $result;
        
            socket_close($socket);
        }
    }

    
    new ClientSocket;
?>