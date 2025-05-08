sudo ufw status
sudo ufw allow 22
sudo ufw deny 80
sudo ufw allow icmp
sudo ufw deny 443
sudo ufw deny 3306
sudo ufw deny 6379
sudo ufw enable
sudo ufw status
sudo systemctl restart ufw
sudo ufw status

