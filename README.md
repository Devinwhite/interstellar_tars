# interstellar_tars
code for controlling tars ipads/humorlight/etc

sudo nano /etc/rc.local

#add lines
gpio -g mode 9 out
gpio -g write 9 0
gpio -g mode 10 out
gpio -g write 10 0
gpio -g mode 11 out
gpio -g write 11 0

#run in terminal
cd /var/www/html/tars
sudo composer install

crontab -e

#add line and save
@reboot ( sleep 5; php /var/www/html/tars/bin/screen-server.php )

