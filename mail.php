<?php
echo $_GET['from'];
$to = "srinivas.chitturi@mtap.in";
//$to = "kgrgraju@gmail.com";
$subject = "Contact From Safetrax.io";
$txt = "Requested from " . $_GET['from'];
$headers = "From: " . $_GET['from'];
mail($to,$subject,$txt,$headers);
?>
