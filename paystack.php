<?php
$price = $_GET['product'];

$email = $_POST['user_email'];
$fname = $_POST['first-name'];
$lname = $_POST['last-name'];
$url = "https://api.paystack.co/transaction/initialize";

$Your_Domain = "http://localhost/businesshelpNG/";

$fields = [
    'email' => $email,
    'amount' => $price,
    'callback_url' => $Your_Domain . "paymentstatus.php"
];

header('Content-Type: application/json');



$fields_string = http_build_query($fields);

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer sk_test_7312e175b1f94b468c88243c2fb0d19f7206daaf",
    "Cache-Control: no-cache",

));

//So that curl_exec returns the contents of the cURL; rather than echoing it
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//execute post
$result = curl_exec($ch);
//echo $result;


$result = json_decode($result, true);
header("Location: " . $result['data']['authorization_url']);
