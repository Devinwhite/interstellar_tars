# interstellar_tars
code for controlling tars ipads/humorlight/etc

nano /etc/rc.local

# add lines
gpio -g mode 9 out
gpio -g write 9 0
gpio -g mode 10 out
gpio -g write 10 0
gpio -g mode 11 out
gpio -g write 11 0

#https://www.twilio.com/blog/create-php-websocket-server-build-real-time-even-driven-application
# run in terminal
cd /var/www/html/tars
composer install

#crontab -e
#add line and save
#@reboot ( sleep 5; php /var/www/html/tars/bin/screen-server.php )

#https://www.raspberrypi.org/documentation/linux/usage/systemd.md

# start service on startup
nano /etc/systemd/system/TarsSocket.service

[Unit]
Description=Tars Websocket Server
After=network.target

[Service]
ExecStart=/usr/bin/php -f screen-server.php
WorkingDirectory=/var/www/html/tars/bin
StandardOutput=inherit
StandardError=inherit
Restart=always
User=root

[Install]
WantedBy=multi-user.target


# Make it startup on reboot
systemctl enable TarsSocket.service


# update 3.5mm jack volume to 100%
amixer scontrols
amixer sset 'PCM' 100%
amixer cset numid=3 1

# reset to master git
cd /var/www/html/tars
git reset --hard origin/master
sudo git clean -f -d;
git pull


# network settings
sudo nano /etc/dhcpcd.conf

interface wlan0
static ip_address=192.168.1.101
static routers=192.168.1.1
static domain_name_servers=8.8.8.8


sudo nano /etc/wpa_supplicant/wpa_supplicant.conf
network={
        ssid="NETGEAR26-5G"
        psk="modernpotato295"
}


nano /etc/sudoers

# allow mp3
ALL     ALL = NOPASSWD: /usr/bin/mpg123
ALL     ALL = NOPASSWD: /usr/bin/omxplayer

# allow reboot
ALL     ALL = NOPASSWD: /sbin/shutdown
ALL     ALL = NOPASSWD: /sbin/reboot

# allow git
ALL     ALL = NOPASSWD: /usr/bin/git

# other stuff
nano /etc/php/7.3/fpm/php.ini
display_errors = On
