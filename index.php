<?php
$client_mac_address = $_GET['client_mac'];
$client_ip_address = $_GET['uip'];
if($client_mac_address == "") {
    header('Location: error.php');
} else {
            header('Location: welcome.php?mac=' . $client_mac_address . '&ip=' . $client_ip_address);
        }
?>


