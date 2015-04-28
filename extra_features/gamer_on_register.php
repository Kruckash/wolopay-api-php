<?php

/**
 * This file is part of the wolopay.com (c)
 *
 * To find out how long it takes the client to perform their first purchases
 */

require_once __DIR__."/../lib/WolopayApi.php";

$wolopayApi = new \Wolopay\WolopayApi($apiClientId='app_123', $apiClientSecret='c12c30d195b007f5bb6e7f8097a406bd222cbf54', $sandbox=true, $debug=true);

if (!$wolopayApi->createGamer( $gamerId='3123' )){

    echo "Some crash, set debug = true to see the errors";
    throw new \Exception("Error");
}

echo "Looks good!";
