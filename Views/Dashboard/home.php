<?php
    $request = new Request;
    $currency = $request->currency();
    $response = $request->nfts();
?>
<section class="content home">
    <div class="columns-two-bedroom">
        <div class="container">
            <div class="head-container">
                <div class="box-left">
                    <div><img src="<?php echo INCLUDE_PATH ?>assets/Bitcoin.png" /></div>
                    <div><h6>Bitcoin</h6><span>BTC</span></div>
                </div>
            </div>
                <div id="chart-timeline"></div>
        </div>
        <div class="container table">
            <div class="head-container">
                <h5>Top Coins Moment</h5>
                <a class="button">View All</a>
            </div>

            <ul class="list">
                <?php
                    $i = 1;
                    foreach($currency->data->coins as $key => $value){
                ?>
                <li class="columns-five">
                    <div><p><?php echo $i++; ?></p></div>
                    <div><img src="<?php echo $currency->data->coins[$key]->iconUrl ?>" /></div>
                    <div><h6><?php echo $currency->data->coins[$key]->name ?></h6></div>
                    <div><p><?php echo $currency->data->coins[$key]->price ?></p></div>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <div class="separator"></div>

    <div class="columns-three">
        <div class="container">
            <div class="head-container">
                <div><h5>My Wallet</h5></div>
                <div><h4 class="price">$1000 <i data-feather="arrow-up"></i></h5><span class="label">This Wook</span></div>
            </div>
            <div class="metrics">
                
                <div class="metric-single">
                    <div class="metric-head">
                        <div class="columns-two">
                            <img src="<?php ?>" />
                            <h6>Optimazation</h6>
                        </div>
                        <div>
                            <h6>72%</h6>
                        </div>
                    </div>
                    <div class="chart-progress" style="width: 72%;"></div>
                </div>

                <div class="metric-single">
                    <div class="metric-head">
                        <div class="columns-two">
                            <img src="<?php ?>" />
                            <h6>Errors</h6>
                        </div>
                        <div>
                            <h6>35%</h6>
                        </div>
                    </div>
                    <div class="chart-progress" style="width: 35%;"></div>
                </div>

                <div class="metric-single">
                    <div class="metric-head">
                        <div class="columns-two">
                            <img src="<?php ?>" />
                            <h6>Quality</h6>
                        </div>
                        <div>
                            <h6>97%</h6>
                        </div>
                    </div>
                    <div class="chart-progress" style="width: 97%;"></div>
                </div>

                <div class="metric-single">
                    <div class="metric-head">
                        <div class="columns-two">
                            <img src="<?php ?>" />
                            <h6>Velocity</h6>
                        </div>
                        <div>
                            <h6>68%</h6>
                        </div>
                    </div>
                    <div class="chart-progress" style="width: 68%;"></div>
                </div>

            </div>
        </div>
        <div class="container table">
            <form method="post">
            <div class="calculator">
                <select name="currency">
                    <?php
                        foreach($currency->data->coins as $key => $value){
                    ?>
                    <option value="<?php echo $currency->data->coins[$key]->symbol ?>"><?php echo $currency->data->coins[$key]->symbol ?></option>
                    <?php } ?>
                </select>
                <input type="number" name="value" autocomplete="off" value="1" />
                <span>
                <?php
                    if(isset($_POST['calculate'])){
                        $value = new Request;
                        echo $value->exchangeRates($_POST['currency'], $_POST['value']);
                    }
                ?>
                </span>
            </div>
            <div class="float">
                <input type="submit" name="calculate" style="display:none;" id="calculate" />
                <label for="calculate"><button class="icon"><i data-feather="refresh-cw"></i></button></label>
            </div>
            <div class="calculator-tax">
                <select>
                    <option>Bitcoin</option>
                </select>
                <input type="number" value="1" />
            </div>
        </div>
        </form>
        <div class="container table">
            <div class="head-container">
                <h5>Top Coins Moment</h5>
                <a class="button">View All</a>
            </div>

            <ul class="list two">
                <?php
                    foreach($response->data->nfts as $key => $value){
                ?>
                <li class="columns-five">
                    <div><p><?php echo ++$i ?></p></div>
                    <div><img src="<?php echo $response->data->nfts[$key]->image ?>" /></div>
                    <div><h6><?php echo $response->data->nfts[$key]->name ?></h6></div>
                    <div><p>$<?php echo number_format($response->data->nfts[$key]->priceInDollar, 2); ?></p></div>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>