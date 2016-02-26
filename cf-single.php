<?php

    $to = "momartin1@hotmail.co.uk";
    $from = $_REQUEST['Email'];
    $name = $_REQUEST['Name'];
    $telephone = $_REQUEST['Telephone'];
	$subject = $_REQUEST['Subject'];
    $headers = "From: $from";
    

    $fields = array();
    $fields{"Name"} = "Name"; 
    $fields{"Email"} = "Email"; 
    $fields{"Telephone"} = "Telephone";
    $fields{"Message"} = "Message";

    $body = "Here is what was sent:\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);
	
	header( 'Location: index.php' ) ;
	
	
?>