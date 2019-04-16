<?php
$controller_api_password="ruckusapi123!";
$controller_address="192.168.100.254";
$data = array("Vendor" => "Ruckus", "RequestPassword" => $controller_api_password, "APIVersion" => "1.0",
    "RequestCategory" => "UserOnlineControl", "RequestType" => "Login", "UE-IP" => $_GET['ip'], "UE-MAC" => $_GET['mac'], "UE-Proxy" => "0", "UE-Username" => "GuestUser", "UE-Password" => "GuestUser");

$data_string = json_encode($data);
$ch = curl_init('http://'.$controller_address.':9080/portalintf');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string)));
$result = curl_exec($ch);

header("Location: https://www.facebook.com/skopiknz");
?>