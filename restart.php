<?php
	header('Content-Type: application/json');
	exec('sudo /sbin/reboot');
?>
{ 
   "succcess":true
}