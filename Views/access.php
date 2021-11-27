<?php
    if(isset($_POST['register'])){
        Controller::register($_POST['name'], $_POST['email'], $_POST['password'], $_FILES['image']);
    }
    if(isset($_POST['login'])){
        Controller::login($_POST['email'], $_POST['password']);
    }
?>
<section class="access">
    <div class="banner-access">
        <div class="cards-icons">
            <span class="card"><i data-feather="play"></i></span>
            <span class="card"><i data-feather="play"></i></span>
            <span class="card"><i data-feather="play"></i></span>
        </div>
        <div class="cards-icons">
            <span class="card round"><i data-feather="cloud"></i></span>
        </div>
        <div class="read">
            <h3>Lorem ipsum dolor amet</h3>
            <span>Lorem ipsum dolor amet</span>
        </div>
    </div>
    <div class="forms">
        <h6>Raiane Devs</h6>
        <?php if(!isset($_GET['login'])){ ?>
        <form method="post" enctype="multipart/form-data">
            <h2>Welcome!</h2>
            <input type="text" name="name" placeholder="Name" />
            <input type="email" name="email" placeholder="Your best email" />
            <input type="password" name="password" placeholder="password strong" />
            <input type="file" name="image" />
            <input type="submit" name="register" value="Register" />
        </form>
        <?php }else{ ?>
            <form method="post" enctype="multipart/form-data">
            <h2>Welcome!</h2>
            <input type="email" name="email" placeholder="Your best email" />
            <input type="password" name="password" placeholder="password strong" />
            <input type="submit" name="login" value="Login" />
        </form>
        <?php } ?>
    </div>
</section>
