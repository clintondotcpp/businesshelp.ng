<?php
$reference = $_GET['reference'];
if (!$reference) {
    die("No transaction reference supplied");
}

$curl = curl_init();

header('Content-Type: application/json');

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer sk_test_7312e175b1f94b468c88243c2fb0d19f7206daaf",
        "Cache-Control: no-cache",
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$response = json_decode($response, true);


if ($err) {
    echo "cURL Error #:" . $err;
} else if ("success" === $response['data']['status'] && $reference == $response['data']['reference']) {
    header("Location: success.php");
}

/*$transaction = json_decode($response, true);


if ("success" === $transaction['data']['status']) {
   
} else {
    die('API returned error: ' . $transaction['message']);
}*/
