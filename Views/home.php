<?php
    $response = (new Request)->nfts();

    $currency = (new Request)->currency();
?>
<section class="content">
    <div class="banner">
        <h2>Lorem ipsum <br /> Dolor Amet</h2>
        <span>Lorem ipsum dolor amet.</span>
        <div>
            <a class="button sample">Discover</a>
            <a class="button sample">Discord</a>
        </div>
    </div>

    <div class="cryptos">
        <div class="section-head">
            <h3>Top Sellers</h3>
            <a class="button dark"><i data-feather="clock"></i> Today</a>
        </div>
    </div>

    <div class="cryptos-list vertical">
        <?php
            foreach($currency->data->coins as $key => $value){
        ?>
        <div class="crypto-single">
            <div class="images">
                <img src="<?php echo $currency->data->coins[$key]->iconUrl ?>" />
            </div>

            <div class="info">
                <img src="<?php echo INCLUDE_PATH ?>assets/Bitcoin.png" />
                <h4><?php echo $currency->data->coins[$key]->name ?></h4>
                <p> <?php echo $currency->data->coins[$key]->price ?><span> <?php echo $currency->data->coins[$key]->symbol ?></span></p>
            </div>
        </div>
        <?php } ?>
    </div>

    <div class="section-head">
        <h3>Top Sellers</h3>
        <a class="button dark"><i data-feather="clock"></i> Today</a>
    </div>

    <div class="cryptos-list columns-four">
        <?php
            foreach($response->data->nfts as $key => $value){
        ?>
        <div class="crypto-single">
            <div class="boxes">
                <div>
                    <div><img src="<?php echo INCLUDE_PATH ?>assets/amanda-doe.jpg" /></div>
                    <div><span>Lorem ipsum</span>
                    <h6>Lorem</h6></div>
                </div>
                <div>
                    <i data-feather="heart"></i>
                    <i data-feather="more-horizontal"></i>
                </div>
            </div>
            <div class="details">
                <img src="<?php echo $response->data->nfts[$key]->image ?>" />
                <div class="info">
                    <div>
                        <h4><?php echo $response->data->nfts[$key]->name ?></h4>
                        <span>$ <?php echo $response->data->nfts[$key]->priceInDollar ?></span>
                    </div>
           
                </div>
            </div>
            <div class="details-footer">
                <div>
                    <img src="<?php echo INCLUDE_PATH ?>assets/amanda-doe.jpg" />
                    <img src="<?php echo INCLUDE_PATH ?>assets/client.jpg" />
                </div>
                <div>
                    <a href="<?php echo INCLUDE_PATH ?>single?id=<?php echo $response->data->nfts[$key]->id; ?>" class="button light">Buy Order</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

</section>