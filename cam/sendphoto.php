<?php
$idchat=238563261;
function apiRequestMedia($method, $idchat, $data) {
 $chat_id = $idchat;
 $bot_url = 'https://api.telegram.org/bot707671406:AAGp1kszeV2VjTvc591xzaP2t4erWntsW9s';
 $url = $bot_url . $method . "?chat_id=" . $chat_id ;
 $ch = curl_init(); 
 curl_setopt($ch, CURLOPT_HTTPHEADER, array(
     "Content-Type:multipart/form-data"
 ));
 curl_setopt($ch, CURLOPT_URL, $url); 
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
 curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
 $output = curl_exec($ch);
}

   
$address = "D:/xampp/htdocs/cam/uploada/5dd5e6773e3e1.png";
$post_fields = array('caption' => 'Test Theo','photo'=> new CURLFile(realpath($address))
);  

//apiRequestMedia("sendPhoto", $idchat, $post_fields);
?>