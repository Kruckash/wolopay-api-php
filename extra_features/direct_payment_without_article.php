<?php

/**
 * This file is part of the wolopay.com (c)
 *
 * Example to create a payment without show the shop and also without article.
 */

require_once __DIR__."/../lib/WolopayApi.php";

$wolopayApi = new \Wolopay\WolopayApi($apiClientId='app_54edbb04d96d7', $apiClientSecret='dc1bf90ff630a84b379a4c9ef3d7ad14ee437f8c', $sandbox=true, $debug=true);

// See the doc to view all optional parameters
$result = $wolopayApi->directPayment(
    $gamerId = 'user13',
    $amount = 0.1,
    $currency = 'EUR',
    $country = 'ES',
    $payMethodId = 210,
    $articleTitle = 'My title',
    $articleDescription = 'My description',
    $extraOptions = array(),
    $autoRedirect = true
);

if (!$result){
    die("Request can't be generated");
}

/*<iframe src="<?= $result->url ?>" width="100%" height="100%"></iframe>*/