<?php
  class Receive{
    public $base;
    protected $data;
    protected $endpoint;

    public function __construct(){
        $this->base = 'https://api.blockchain.com/v3/exchange';
    }

    public function orders(){
        $this->endpoint = '/orders';
        $this->data = [
            'exOrdId'           =>  uniqid(),
            'clOrdId'           =>  'ABC',
            'ordType'           =>  'MARKET',
            'ordStatus'         =>  'FILLED',
            'side'              =>  'BUY',
            'price'             =>  0.12345,
            'text'              =>  'string',
            'symbol'            =>  'BTC-USD',
            'lastShares'        =>  0.5678,
            'lastPx'            =>  3500.12,
            'leavesQty'         =>  10,
            'cumQty'            =>  0.12334,
            'avgPx'             =>  345.33,
            'timestamp'         => time()
        ];

        $this->post();
        return $this;
    }

    public function deposits(){
        $this->endpoint = '/deposits/BTC';

        $this->post();
        return $this;
    }

    public function withDrawals($from, $to, $amount, $currency, $beneficiary){
        $this->endpoint = "/withdrawals?from=$from&to=$to";
        $this->data = [
            'amount'        =>  $amount,
            'currency'      =>  $currency,
            'beneficiary'   =>  $beneficiary,
            'sendMax'       => true
        ];

        $this->post();
        return $this;
    }

    public function post(){
        $url = $this->base.$this->endpoint;
        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($this->data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["X-API-Token: myapi", "accept: application/json", "Content-Type: application/json"]);
        $response = json_decode(curl_exec($ch));
        curl_close($ch);

        echo '<pre>';
        print_r($response);
        echo '</pre>';
    }

}
?>