<?php
    if(isset($_POST['action'])){
        $wallet = new Wallet;
        $response = $wallet->createWallet($_POST['password'],$_POST['email']);
        $wallet_register = PostgreSQL::connect()->prepare("INSERT INTO wallets VALUES (?, ?, ?, ?, ?, ?)");
        $wallet_register->execute(array(hexdec(uniqid()), $_SESSION['user_id'], $response->guid, $_POST['email'], $_POST['password'], $response->address));
    }
?>
<section class="content">
    <div class="container">
        <div class="head-container">
            <h3>Cadaster New</h3>
        </div>

        <form method="post">
            <input type="text" name="label" placeholder="Name Wallet" />
            <input type="email" name="email" placeholder="Email" />
            <input type="password" name="password" placeholder="Password" />
            <input type="submit" name="action" value="Send" />
        </form>
    </div>
</section>