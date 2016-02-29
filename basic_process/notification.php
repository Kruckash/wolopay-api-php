<?php

/**
 * This file is part of the wolopay.com (c)
 *
 * Example of notifications requests
 */

require_once "../lib/WolopayApi.php";

/*
 * POST PARAMETERS example
 *
 * notificationId=WONOT_54b8115f65dc8&itemId=fd1ee940-9a48-11e4-acee-00259068f82e&payCategory=Special+provider+method
 * &tab=Unique+Payment&price=2&currency=USD&payout=1.54&gamerId=user13&userId=user13&amount=7
 * &transactionId=WOT_54b8111c13781&status=success&providerId=WOP_54b8115f64b81&exchangeEUR=0.6252
 * &articleId=fd1ee940-9a48-11e4-acee-00259068f82e&country=US
 */

$wolopayApi = new \Wolopay\WolopayApi($apiClientId='123123', $apiClientSecret='33123123', $sandbox=true, $debug=true);

// Verify this request is from wolopay
if (!$wolopayApi->isAValidRequest()){

    // Be careful, If you are using php v <= 5.3 and you write some text (like errors, print_r, echo ...)
    // PHP httpCode Header doesn't work
    $wolopayApi->setHttpCode(400, 'Bad Request');
    echo "This payment is invalid";
    throw new \Exception("invalid request");
}

// IMPORTANT: Last verifications is with your system. you will need to ensure that the $_POST['notificationId']
// wasn't used and success

if ($_POST['event'] === 'payment.completed'){

    if ($_POST['test']){
        echo "Your logic when it was a test";
    }

}elseif ($_POST['event'] === 'payment.cancelled'){

    if ($_POST['test']){
        echo "Your logic when it was a test";
    }
}



