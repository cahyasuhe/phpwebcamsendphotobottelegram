<?php
 $filename=$_GET['filename'];
function apiRequestMedia($method, $idchat, $data) {
 $chat_id = 238563261;
 $bot_url = 'https://api.telegram.org/bot707671406:AAGp1kszeV2VjTvc591xzaP2t4erWntsW9s/';
 $url = $bot_url.$method."?chat_id=".$chat_id;
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
 curl_setopt($ch, CURLOPT_URL, $url); 
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
 curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
 $output = curl_exec($ch);
}

$address = "D:/xampp/htdocs/cam/upload/".$filename;
$post_fields = array('caption'=>$filename,'photo'=> new CURLFile(realpath($address)));

apiRequestMedia("sendPhoto", 238563261, $post_fields);
?>