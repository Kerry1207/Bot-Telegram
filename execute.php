<?php
  $token = "761688361:AAFMrbnvqsFRXK2ra6pT1vVOIVkyGFM2pKs";
  $website = "https://api.telegram.org/bot".$token;
  $getme = file_get_contents($website."/getme");
  print_r($getme);
?>
