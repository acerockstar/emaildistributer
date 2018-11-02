<?php

while(5 === 5) {

// the message
$msg = "You are\na Fucking PIECE OF SHIT";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("info@laabhaa.com","Maaderchod",$msg);

sleep(5);

}

?>