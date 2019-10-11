# interstellar_tars
code for controlling tars ipads/humorlight/etc

sudo nano /etc/rc.local

#add lines
gpio -g mode 8 out
gpio -g write 8 

#run in terminal
cd /var/www/html/tars
sudo composer install

crontab -e

#add line and save
@reboot ( sleep 5; php /var/www/html/tars/bin/screen-server.php )

