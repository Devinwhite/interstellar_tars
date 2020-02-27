<?php
	header('Content-Type: application/json');
	system("cd /var/www/html/tars");
    system("git reset --hard origin/master");
    system("git pull");
?>
{ 
   "succcess":true
}