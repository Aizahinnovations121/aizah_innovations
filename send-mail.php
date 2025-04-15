<?php

## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "shah@aizahinnovations.com";

# SUBJECT (Subscribe/Remove)
$subject = "Customer Enquiry Aizah Innovations";

# RESULT PAGE
$location = "thankyou.html";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = $recipient;

# MAIL BODY
$body .= "Name:".$_REQUEST['name']." \n";
$body .= "Email:".$_REQUEST['email']." \n";
$body .= "Phone Number:".$_REQUEST['phone']." \n";
$body .= "Subject:".$_REQUEST['subject']." \n";
$body .= "Message:".$_REQUEST['message']." \n";
# add more fields here if required

## SEND MESSGAE ##

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

header( "Location: $location" );
?>