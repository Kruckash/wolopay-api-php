<?php

/**
 * This file is part of the wolopay.com (c)
 *
 * Update a promotional code, previously created ofc
 */

require_once __DIR__."/../lib/WolopayApi.php";

$wolopayApi = new \Wolopay\WolopayApi($apiClientId='app_123', $apiClientSecret='123', $sandbox=true, $debug=true);

// See the doc to view all extra parameters
$optionalParameters = array(
    'n_total_uses' => 3
);

if (!$wolopayApi->updatePromotionalCode($promoCode='547dec25cd700', $articleId = 'a55459ca-6bdb-11e4-acee-00259068f82e', $optionalParameters)){

    echo "Some crash, set debug = true to see the errors";
    throw new \Exception("Error");
}

echo "Looks good!";
