<?php

/**
 * This file is part of the wolopay.com (c)
 *
 * Example to create a transaction
 */

$wolopayApi = new \Wolopay\WolopayApi($apiClientId='app_54818a4d61253', $apiClientSecret='c38a908de00ffb3ef77f1ac52ea3d3a39ae4d1e0', $sandbox=true, $debug=true);

// See the doc to view all optional parameters
$trans = $wolopayApi->createTransaction($gamerId='user13', $level=3, $extraOptions=array('fixed_country'=>'1'), $autoRedirect=true);

if (!$trans){
    die("Request can't be generated");
}

/*
 * If you want to save the new transaction Id, before to redirect.
 *
 * $result = $wolopayApi->createTransaction($gamerId='user13', $level=3)
 * $result->id  have a transactionId
 * header("Location: ".$result->url);
 */
