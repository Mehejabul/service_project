<?php

$to = "";  // Your email here
$name = $_REQUEST['name'];
$address = $_REQUEST['address'];
$phone = $_REQUEST['phone'];
$from = $_REQUEST['email'];
$service = $_REQUEST['service'];
$date = $_REQUEST['date'];
$time1 = $_REQUEST['time1'];
$time2 = $_REQUEST['time2'];
$often = $_REQUEST['often'];
$autoinfo = $_REQUEST['bedrooms'];
$kilometers = $_REQUEST['bathroom'];
$message = $_REQUEST['message'];
$headers = "From: $from";
$subject = "Order Form from Cleaning Service";

$fields = array();
$fields{"name"} = "Name";
$fields{"lastname"} = "Address";
$fields{"phone"} = "Phone";
$fields{"email"} = "Email";
$fields{"service"} = "Service";
$fields{"date"} = "Date";
$fields{"time1"} = "From";
$fields{"time2"} = "To";
$fields{"often"} = "How often";
$fields{"bedrooms"} = "Bedroom(s)";
$fields{"bathroom"} = "Bathroom(s)";
$fields{"message"} = "Message";

$body = "Here is what was sent:\n\n"; 
foreach($fields as $a => $b){   
	$body .= sprintf("%20s:%s\n",$b,$_REQUEST[$a]);
}
$send = mail($to, $subject, $body, $headers);

?>