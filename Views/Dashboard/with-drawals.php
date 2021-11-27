<?php
    $currency = (new Request)->currency();
    if(isset($_POST['action'])){
        $drawals = new Receive;
        $wallet_user = Models::getSingle('wallets',"WHERE user_id = $_SESSION[user_id]");
        $drawals->withDrawals($wallet_user['address'], $_POST['to'], $_POST['amount'], $_POST['currency'], $_POST['beneficiary']);
        print_r($drawals);
    }
?>
<section class="content">
    <div class="container">
        <div class="head-container">
            <h3>Cadaster New</h3>
        </div>

        <form method="post">
            <input type="number" name="amount" placeholder="Amount" />
            <input type="text" name="to" placeholder="To Address" />
            <input type="text" name="beneficiary" placeholder="Beneficiary" />
                <select name="currency">
                    <?php
                        foreach($currency->data->coins as $key => $value){
                    ?>
                    <option value="<?php echo $currency->data->coins[$key]->symbol ?>"><?php echo $currency->data->coins[$key]->symbol ?></option>
                    <?php } ?>
                </select>
            <input type="submit" name="action" value="Send" />
        </form>
    </div>
</section>