<?php
    if(isset($_POST['action'])){
        $wallet_user = Models::getSingle('wallets',"WHERE user_id = '$_SESSION[user_id]'");
        $address_crypto = (new Request)->nftSingle($_GET['id']);
        $return = (new Wallet)->makePayment($wallet_user['guid'], $_POST['password'], $address_crypto->data->nft->metadata->payout_address, $address_crypto->data->nft->price);    }
?>
<section class="checkout">
    <div class="checkout-form">
        <form method="post">
            <h3>Payment Details!</h3>
            <input type="text" name="password" placeholder="Name" />
            <input type="text" name="password" placeholder="Email" />
            <input type="text" name="password" placeholder="Address" />
            <input type="password" name="password" placeholder="password strong" />
            <input type="submit" name="action" value="Buy Order" />
        </form>
    </div>

    <div class="checkout-description">

    </div>
</section>