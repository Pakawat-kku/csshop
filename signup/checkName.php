<?php
include "../include/db.php";

$na='SELECT customer.username FROM customer';
$takenUsernames = array ($na);

sleep(1);

if (!in_array( $_GET["username"], $takenUsernames )) {
	echo "okay";
} else {
	echo "denied";
}

?>
