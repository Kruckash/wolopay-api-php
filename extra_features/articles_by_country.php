<?php

/**
 * This file is part of the wolopay.com (c)
 *
 * Create a promotional code
 */

require_once __DIR__."/../lib/WolopayApi.php";

$wolopayApi = new \Wolopay\WolopayApi($apiClientId='app_123213123', $apiClientSecret='4b574b6fc22acf4747a30f07cb27a1212147cefe', $sandbox=true, $debug=true);
$result = $wolopayApi->getArticlesByCountry('ES');

if ($result === false){

    echo "Some crash, set debug = true to see the errors";
    throw new \Exception("Error");
}

echo "Looks good!";
var_dump($result);
