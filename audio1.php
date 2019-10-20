<?php
	header('Content-Type: application/json');
	system("sudo -b /usr/bin/mpg123 -g 300 mp3/TARS_1.mp3")
?>
{ 
   "succcess":true
}
