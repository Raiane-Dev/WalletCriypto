<?php

    class Controller{
        public function index(){
            $url = isset($_GET['url']) ? $_GET['url'] : 'home';
            $slug = explode('/', $url);

            if(file_exists('Views/'.$slug[0].'.php')){
                include('Views/templates/header.php');
                include('Views/'.$slug[0].'.php');
                include('Views/templates/footer.php');
            }
            else if(file_exists('Views/Dashboard/'.$slug[1].'.php')){
                include('Views/Dashboard/templates/header.php');
                include('Views/Dashboard/'.$slug[1].'.php');
                include('Views/Dashboard/templates/footer.php');
            }
            else{
                die('Não existe');
            }
        }

        public static function register($name, $email, $password, $image){
            $extension_image = pathinfo("../assets/{$image['name']}")['basename'];
            if(empty($extension_image) == 'png' || $extension_image == 'jpg' || $extension_image == 'jpeg'){
                move_uploaded_file($image['tmp_name'], dirname(__DIR__, 1)."assets/{$image['name']}");
            }

            if(filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($password) > 8){
                $insert = \PostgreSQL::connect()->prepare('INSERT INTO users VALUES (?, ?, ?, ?, ?)');
                $insert->execute(array(hexdec(uniqid()), $name, $email, password_hash($password, PASSWORD_DEFAULT), $image['name']));
            }else{
                echo '<script> alert("Error"); </script>';
            }
            
        }

        public static function login($email, $password){
            $login = \PostgreSQL::connect()->prepare("SELECT * FROM users WHERE email = ?");
            $login->execute(array($email));
            $login_info = $login->fetch();
            if($login->rowCount() >= 0 && password_verify($password, password_hash($password, PASSWORD_DEFAULT)) && $login_info !== false){
                echo \Models::alert('Success');
                $verify_password = password_verify($password, password_hash($password, PASSWORD_DEFAULT));
                $_SESSION['login'] = true;
                $_SESSION['user_id'] = $login_info['id'];
                $_SESSION['email'] = $login_info['email'];
                $_SESSION['password'] = $verify_password;
                echo '<div class="success"><h6>Success.</h6></div>';
                echo '<script> alert("Success"); </script>';
            }else{
                echo '<script> alert("Error! Email or password incorrect."); </script>';
            }
        }

        public static function git($command){
            readline($command);
        }
    }
?>