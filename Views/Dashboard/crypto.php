<?php
    $symbols = (new Request)->symbols();
?>
<section class="content">
    <div class="head-container">
        <div><h3>Market Cryptos</h3></div>
        <div>
            <a href="" class="button"><i data-feather="star"></i> Filter</a>
            <a href="" class="button"><i data-feather="star"></i> Filter</a>
        </div>
    </div>
    <div class="container table">
        <table class="columns-seven">
            <thead>
                <tr>
                    <td>Currecy</td>
                    <td>Currency Scale</td>
                    <td>Status</td>
                    <td>Min Price</td>
                    <td>Auction Price</td>
                    <td>Auction Size</td>
                    <td>Imbalance</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($symbols as $key => $value){
                ?>
                <tr>
                    <td class="columns-two">
                        <div><i data-feather="chevron-right"></i></div>
                        <div><?php echo $symbols->$key->counter_currency; ?></div>
                    </td>
                    <td><?php echo $symbols->$key->base_currency_scale; ?></td>
                    <td><?php echo $symbols->$key->status; ?></td>
                    <td><?php echo $symbols->$key->min_price_increment_scale; ?></td>
                    <td><?php echo $symbols->$key->auction_price; ?></td>
                    <td><?php echo $symbols->$key->auction_size; ?></td>
                    <td><?php echo $symbols->$key->imbalance; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>