<?php
    class Request{
        public $base;
        public $endpoint;

        public function __construct(){
            $this->base = "https://api.blockchain.com/v3/exchange";
        }

        public function getPrices(){
            $this->endpoint = "/tickers";

            return $this->request();
        }

        public function fees(){
            $this->endpoint = "/fees";

            return $this->request();
        }

        public function ordersBook(){
            $this->endpoint = "/l2/BTC-USD";
            
            return $this->request();
        }

        public function symbols(){
            $this->endpoint = "/symbols";

            return $this->request();
        }

        public function listOrders(){
            $this->endpoint = "/orders?symbol=BTC-USD&from=1592830770594&to=1592830770594&status=OPEN&limit=100";

            return $this->request();
        }

        public function accounts(){
            $this->endpoint = "/accounts";

            return $this->request();
        }

        public function deposits($from, $to){
            $this->endpoint = "/deposits?from=$from&to=$to";

            return $this->request();
        }

        public function withDrawals($from, $to){
            $this->endpoint = "/withdrawals?from=$from&to=$to";

            return $this->request();
        }

        public function nfts(){
            $this->base = "https://api.coinranking.com";
            $this->endpoint = "/v2/nfts";

            return $this->request();   
        }

        public function nftSingle($id){
            $this->base = "https://api.coinranking.com";
            $this->endpoint = "/v2/nft/$id";

            return $this->request();
        }

        public function currency(){
            $this->base = "https://api.coinranking.com";
            $this->endpoint = "/v2/coins";

            return $this->request();
        }

        public function exchangeRates($currency, $value){
            $this->base = "https://blockchain.info";
            $this->endpoint = "/tobtc?currency=$currency&value=$value";

            return $this->request();
        }


        public function request(){
            $ch = curl_init($this->base.$this->endpoint);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,  true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, ["accept: application/json","X-API-Token: myapi"]);
            $response = json_decode(curl_exec($ch));
            curl_close($ch);

            return $response;
        }
    }


?>