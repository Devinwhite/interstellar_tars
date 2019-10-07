# interstellar_tars
code for controlling tars ipads/humorlight/etc

sudo nano /etc/rc.local

#add lines
gpio -g mode 8 out
gpio -g write 8 0
