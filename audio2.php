<?php
	header('Content-Type: application/json');
	system("sudo -b /usr/bin/mpg123 -g 100 mp3/TARS_2.mp3")
?>
{ 
   "succcess":true
}