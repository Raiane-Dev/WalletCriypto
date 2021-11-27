<?php
    $unique = (new Request)->nftSingle($_GET['id']);

    if(isset($_POST['wallet_cart'])){
        Models::addToCart($_GET['id']);
    }
?>
<section class="single">
    <div class="image-single">
        <img src="<?php echo @$unique->data->nft->image ?>" />
    </div>
    <div class="content-single">
        <div class="flex">
            <div>
                <h2><?php echo @$unique->data->nft->name ?></h2>
                <span><?php echo @$unique->data->nft->registryBlockchain ?></span>
            </div>
            <div>
                <span class="background-icon"><i data-feather="heart"></i></span>
                <span class="background-icon"><i data-feather="more-horizontal"></i></span>
            </div>
        </div>

        <div class="price-info">
            <button class="button sample"><?php echo @$unique->data->nft->priceInDollar ?>$</button>
            <span><?php echo @$unique->data->nft->price ?></span>
        </div>

        <div class="categories">
            <button class="button sample-two"><span class="background-icon"><i data-feather="star"></i></span> <?php echo @$unique->data->nft->metadata->collection_name; ?></button>
        </div>

        <div class="about">
            <span>About</span>
            <p><?php echo @$unique->data->nft->description ?></p>
        </div>

        <div class="tabs">
            <div class="nav-tab">
                <ul>
                    <li>Lorem</li>
                    <li>Lorem</li>
                    <li>Lorem</li>
                    <li>Lorem</li>
                </ul>
            </div>
            <div class="content-tab">
                <ul>
                    <?php
                        $traits = isset($unique->data->nft->metadata->traits) ? $unique->data->nft->metadata->traits : [];
                        foreach($traits as $key => $value){
                    ?>
                    <li>
                        <div class="box-left">
                            <div><img src="<?php echo INCLUDE_PATH ?>assets/Bitcoin.png" /></div>
                            <div>
                                <span><?php echo @$unique->data->nft->metadata->traits[$key]->trait_type; ?></span>
                                <h6><?php echo @$unique->data->nft->metadata->traits[$key]->value; ?></h6>
                            </div>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <div class="info-plus">
            <div>
                <h6>Artist Address</h6>
                <p><?php echo @$unique->data->nft->metadata->royaltyInfo->artistAddress; ?></p>
            </div>
            <div>
                <h6>Additional Payee</h6>
                <p><?php echo @$unique->data->nft->metadata->royaltyInfo->additionalPayee; ?></p>
            </div>
            <div>
                <h6>Payout Address</h6>
                <p><?php echo @$unique->data->nft->metadata->payout_address; ?></p>
            </div>
        </div>

    <form method="post">
        <div class="action">
                <input type="submit" value="Add To Cart" name="wallet_cart" />
                <a class="submit" href="<?php echo INCLUDE_PATH ?>checkout?id=<?php echo $_GET['id'] ?>">Buy</a>
        </div>
    </form>
    </div>
</section>