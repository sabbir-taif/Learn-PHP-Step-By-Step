<?php
/*
Hello there, friend! We’re exhausted having just returned to New York City from a whirlwind of world travel. We’re bringing all our international currency to the bank to be exchanged for USD. Our travels have made us wise and weary, and we want to ensure we’re being treated fairly. Can you help?

Write a program to calculate exactly how much cash in USD we should end up with after it has all been exchanged.


Tasks

Calculate Our Expected Amount of USD
1.
Create variables to hold the amount of each foreign currency we’ll be exchanging:

We had a blissful time at Lake Yeak Laom in Ratanakiri, Cambodia and ended up with 2103942 riel left in our pocket
We saw the best sunset of our lives in Hpa-an, Myanmar and left the country with 19092 kyat
We got our fill of fjords in Bergen, Norway and discovered 109 krones that went unspent
We soaked up the sun and history in Saranda, Albania and found 9094 lek scattered throughout our luggage when we arrived home to NYC
It makes sense to name the variables meaningfully. For example, we would create a variable $riel to hold the value 2103942.


*/


$riel = 2103942;

  $kyat = 19092;

  $krones = 109;
  
  $lek = 9094;

echo "At the start of our transaction we had $riel riel, $kyat kyat, $krones krones, and $lek lek";

$riel_to_usd_exchange_rate = 0.00026;;
$kyat_to_usd_exchange_rate = 0.00066;
$krones_to_usd_exchange_rate = 0.11;
$lek_to_usd_exchange_rate = 0.0090;

$usd_for_my_riel = $riel * $riel_to_usd_exchange_rate;
$usd_for_my_kyat = $kyat * $kyat_to_usd_exchange_rate;
$usd_for_my_krones = $krones * $krones_to_usd_exchange_rate;
$usd_for_my_lek = $lek * $lek_to_usd_exchange_rate;

echo "\n$usd_for_my_riel\n$usd_for_my_kyat\n$usd_for_my_krones\n$usd_for_my_lek";
?>