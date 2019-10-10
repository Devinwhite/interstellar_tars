<?php
	header('Content-Type: application/json');
	system("gpio -g mode 8 out");
	
	for ($x = 0; $x <= 80; $x++) {
		system("sleep .05");
		system("gpio -g write 8 1");
		system("sleep .05");
		system("gpio -g write 8 0");
	}
	
?>
{ 
   "succcess":true
}