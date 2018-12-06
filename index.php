<?php
  
  $botToken = "bot"."761688361:AAFMrbnvqsFRXK2ra6pT1vVOIVkyGFM2pKs";
  
  $TelegramRawInput = file_get_contents("php://input");
  $update = json_decode($TelegramRawInput, TRUE);
  if(!$update)
{
  exit;
}
  $MessageObj = $update['message'];
  $chatId = $MessageObj['chat']['id'];
  $out = sendMsg($botToken,$chatId,"Hello World!");
  
function sendMsg($tkn, $cId, $msgTxt)
{
  $TelegramUrlSendMessage = "https://api.telegram.org/".$tkn."/sendMessage?chat_id=".$cId."&text=".urlencode($msgTxt);
  return file_get_contents($TelegramUrlSendMessage);
}  
?>



  
