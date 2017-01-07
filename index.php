<?php
include "Equity.php";
use Equity\Equity\Equity;
$consumer_key = 'PvMpGpbCjEjaH5FUPAg2AlsCUbRocFkf';
$consumer_secret = 'GLHzIGJ1J3gOOAxq';
$equity = new Equity($consumer_key,$consumer_secret);
$equity->buyAirtime('0719237638',50,'safariasdfgcom');
