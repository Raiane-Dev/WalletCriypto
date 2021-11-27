<?php
    class Wallet{
        protected $base;
        protected $endpoint;
        protected $api;

        public function __construct(){
            $this->api = 'c831730d-b3e5-4dc2-9f17-00e5b1957aa6';
            $this->base = 'http://127.0.0.1:3000';
        }

        public function createWallet($password, $email){
            $this->endpoint = "/api/v2/create_wallet?password=$password&email=$email&api_code=$this->api&hd=true";
            
            return $this->send();
        }

        public function makePayment($guid, $password, $to, $amount){
            $this->endpoint = "/merchant/$guid/payment?password=$password&to=$to&amount=$amount";
            
            return $this->send();
        }

        public function sendMany($guid, $password, $to, $fee){
            $recipients = json_encode([$to => $fee]);
            print_r($recipients);
            $this->endpoint = "/merchant/$guid/sendmany?password=$password&recipients=$recipients&to=$to&fee=$fee";
            
            return $this->send();
        }

        public function send(){
            $ch = curl_init($this->base.$this->endpoint);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $return = json_decode(curl_exec($ch));
            curl_close($ch);

            echo '<script> alert("Success"); </script>';
            return $return;
        }
    }

?>