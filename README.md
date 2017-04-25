# Equity Eazzy Api Lib

Eazzy API is a platform that features new and disruptive capabilities. It converts Equity’s full range of expertise in payments, banking, insurance, brokerage, wealth management and telco into simple to use and secure APIs for ready integrations to mobile apps, e-commerce sites and other systems.
Below are the main services offered

  - Online Remittance
  - Purchase Airtime
  - Get Payment Status
  - Create Payment
The library provided here helps you do above tasks easily

## Installation
To install just run
```sh
$ composer require ictianspecialist/equity
```
## Usage
#### 1. Initialization
```sh
<?php
use Equity\Equity\Equity;
$consumer_key = 'your-consumer-key';
$consumer_secret = 'your-consumer-secret';
$equity = new Equity($consumer_key,$consumer_secret);
```
### 2. Buy Airtime
```sh
try{
    $phone_number = '0719xxxxxx';
    $amount = 50;
    $provider = 'safaricom';
    $reference = 'artme-1';
    $equity->buyAirtime($phone_number,$amount,$provider,$reference);
}catch(\Exception $e){
    print_r($e->getMessage());
}
```
### 3. Online Remittance
```sh
try{
    $destination = [
        'accountNumber'=>123456,
        'bicCode'=>'KCBLKENX005',
        'mobileNumber'=>'',
        'walletName'=>'Doe acc.',
        'bankCode'=>'KCBL',
        'branchCode'=>'006'
    ];
    $transfer = [
        "countryCode" => "KE",
      "currencyCode" => "KES",
        "amount" => "200",
        "paymentType" => "",
        "paymentReferences" => ['referees','refereed','reedee'],
        "remarks"=>"Thanks for your business"
    ];
    $reference = 'item_001011';
    $sender_name = 'Hosea Kangogo';
    $equity->sendMoney($destination,$transfer,$reference,$sender_name);
}catch(\Exception $e){
    print_r($e->getMessage());
}
```