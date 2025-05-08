sudo ufw status
sudo ufw disable
sudo ufw status
# sudo systemctl restart ufw
# sudo ufw status
sudo iptables -A INPUT -i eth0 -p tcp --dport 3306 -j DROP
sudo iptables -A INPUT -i eth0 -p tcp --dport 6379 -j DROP
sudo iptables -A INPUT -i eth0 -p tcp --dport 443 -j DROP
sudo iptables -A INPUT -i eth0 -p tcp --dport 80 -j DROP
ip6tables -A INPUT -i eth0 -p tcp -m tcp --dport 3306 -j DROP
ip6tables -A INPUT -i eth0 -p tcp -m tcp --dport 6379 -j DROP
ip6tables -A INPUT -i eth0 -p tcp -m tcp --dport 443 -j DROP
ip6tables -A INPUT -i eth0 -p tcp -m tcp --dport 80 -j DROP
# sudo apt install netfilter-persistent
# sudo netfilter-persistent save
# sudo systemctl enable netfilter-persistent
# mkdir -p /etc/iptables/
# sudo iptables-save > /etc/iptables/rules.v4
# sudo ip6tables-save > /etc/iptables/rules.v6

