<?php

/**
 * This file is part of the wolopay.com (c)
 *
 * Use a promotional code
 */

require_once __DIR__."/../lib/WolopayApi.php";

$wolopayApi = new \Wolopay\WolopayApi($apiClientId='app_123', $apiClientSecret='c12c30d195b007f5bb6e7f8097a406bd222cbf54', $sandbox=true, $debug=true);

if (!$wolopayApi->usePromotionalCodeByGamerId( $promoCode='MY_CODE', $gamerId = '3123')){

    echo "Some crash, set debug = true to see the errors";
    throw new \Exception("Error");
}

echo "Looks good!";
