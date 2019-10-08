<?php
	system("gpio -g mode 8 out");
	
	for ($x = 0; $x <= 50; $x++) {
		system("sleep .1");
		system("gpio -g write 8 0");
		system("sleep .1");
		system("gpio -g write 8 1");
	}
	
?>