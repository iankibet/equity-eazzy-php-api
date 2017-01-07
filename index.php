<?php
include "Equity.php";
use Equity\Equity\Equity;
$consumer_key = 'PvMpGpbCjEjaH5FUPAg2AlsCUbRocFkf';
$consumer_secret = 'GLHzIGJ1J3gOOAxq';
$equity = new Equity($consumer_key,$consumer_secret);

//send money
try{
    $equity->sendMoney($destination,$transfer,$reference,$sender_name);
    $destination = [
        'accountNumber'=>123456,
        'bicCode'=>'KCBLKENX005',
        'mobileNumber'=>'',
        'walletName'=>'Hosea Senior',
        'bankCode'=>'KCBL',
        'branchCode'=>'006'
    ];
    $transfer = [
        "countryCode" => "KE",
//    "currencyCode" => "KES",
        "amount" => "200",
        "paymentType" => "",
        "paymentReferences" => ['referees','refereed','reedee'],
        "remarks"=>"Thanks for your business"
    ];
    $reference = 'item_001011';
    $sender_name = 'Hosea Kangogo';

}catch(\Exception $e){
    var_dump($e->getMessage());
}

//Buy airtime
try{
    $phone_number = '0719xxxxxx';
    $amount = 50;
    $provider = 'safaricom';
    $reference = 'artme-1';
    $equity->buyAirtime($phone_number,$amount,$provider,$reference);
}catch(\Exception $e){

}

