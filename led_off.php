<?php
	header('Content-Type: application/json');
	system("gpio -g mode 8 out");
	system("gpio -g write 8 1");
?>
{ 
   "succcess":true
}


gpio -g mode 8 out
gpio -g write 8 1