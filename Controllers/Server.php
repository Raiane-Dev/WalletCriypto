<?php
    
    class ServerSocket{
        public function __construct(){
            $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
            $bind = socket_bind($socket, 0, 3000) or die('Error Bind');
            $listen = socket_listen($socket, 1) or die('Error Listen');

            do{
                $accept = socket_accept($socket) or die('Error to Accept');
                
                $msg = 'Welcome User Raiane devs!';

                socket_write($accept, $msg, strlen($msg));

                do{
                    $read = socket_read($accept, 2048, PHP_NORMAL_READ) or die('Error in read');

                    if(!$read = trim($read)){
                        continue;
                    }
                    if($read == 'quit'){
                        break;
                    }
                    if($read == 'shutdown'){
                        socket_close($accept);
                        break 2;
                    }

                    $callback = "Você disse: ";
                    socket_write($accept, $callback, strlen($callback));
                    echo $read;
                }while(true);

                socket_close($accept);

            }while(true);

            socket_close($socket);

        }
    }

    new ServerSocket;
?>