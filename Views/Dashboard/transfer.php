<?php
    if(isset($_POST['action'])){
        $wallet = new Wallet;
        $wallet_user = Models::getSingle('wallets',"WHERE user_id = '$_SESSION[user_id]'");
        $wallet->sendMany($wallet_user['guid'], $_POST['password'], $_POST['to'], $_POST['amount']);
    }
?>
<section class="content">
    <div class="container">
        <div class="head-container">
            <h3>Cadaster New</h3>
        </div>

        <form method="post">
            <input type="text" name="to" placeholder="To Address" />
            <input type="number" name="amount" placeholder="Amount" />
            <input type="password" name="password" placeholder="Password" />
            <input type="submit" name="action" value="Send" />
        </form>
    </div>
</section>