<?php 


echo "Hello, world" ;
$botToken = "330544559:AAEGpcl9x2qPAfS2tO9gEtmi2yT2AKkeyFQ" ;
$website = "https://api.telegram.org/bot".$botToken ;

$update = file_get_contents($website."\getupdates");


$updateArray = json_decode($update, TRUE) ;
print_r($updateArray) ;

$chatId = $updateArray["result"][0]["message"]["chat"]["id"] ;


file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=test") ;

?>



