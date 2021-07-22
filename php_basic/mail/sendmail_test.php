<?php

if(!isset($argv[1])){
    print("Please enter argument\r\n");
    return;
}

$hostname = gethostname();

printf("To: " . $argv[1] . "\r\n");
printf("Server: " . $hostname);

$to = $argv[1];
$subject = "TEST";
$message = "This is TEST Mail.\r\nfrom $hostname";
$headers = "From: test@example.com";
mail($to, $subject, $message, $headers);
?>
