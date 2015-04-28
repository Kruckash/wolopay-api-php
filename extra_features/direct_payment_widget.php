<?php

/**
 * This file is part of the wolopay.com (c)
 *
 * Example to create a payment without show the shop and also without article.
 * It is recommended to insert this code within iframe to make async requests
 */

require_once __DIR__."/../lib/WolopayApi.php";

$wolopayApi = new \Wolopay\WolopayApi($apiClientId='app_542221a9eda4', $apiClientSecret='e6c7435cb68030ee3123b3b48fb25c831b1', $sandbox=true, $debug=true);

// See the doc to view all optional parameters
$result = $wolopayApi->directPaymentWidget(
    $gamerId = 'user13',
    $amount = 0.1,
    $currency = 'EUR',
    $articleTitle = 'My title',
    $articleDescription = 'My description',
    $extraOptions = array('country'=>'US'),
    $autoRedirect = false
);

if (!$result){
    die("Request can't be generated");
}

// the best width iframe is 280 - 410 - 540 - 670 (+130 to show more payMethods)
?>
<iframe src="<?= $result->url ?>" width="540" style="border: 0" height="120"></iframe>