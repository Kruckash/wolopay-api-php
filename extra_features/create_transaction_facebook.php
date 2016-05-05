<?php

require '../src/WolopayApi.php';

$wo = new \Wolopay\WolopayApi('<your_api_client_id>', '<your_api_secret>', true, true);
$data = $wo->createTransaction($gamerId='user13', $level=3, $extraOptions=array('external_store' => 'facebook', 'test' => 1), $autoRedirect=false);

?><!DOCTYPE html>
<html>
<head>
    <title>Wolopay shop :P</title>
    <style>
        html, body, .wolo-shop{
            height: 100%;
        }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

</head>

<body>
<div id="fb-root"></div>

<div class="wolo-shop"></div>
<script src="<?= $data->url_js ?>"></script>

</body>
</html>
