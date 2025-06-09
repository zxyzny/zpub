
sudo apt update && sudo apt upgrade -y
sudo apt install -y ubuntu-desktop
sudo apt install -y xrdp
sudo systemctl enable xrdp
sudo systemctl start xrdp
sudo systemctl status xrdp
sudo ufw allow 3389/tcp
sudo snap install firefox

sudo apt update -y
sudo apt install xfce4 -y
echo "startxfce4" > ~/.xsession
sudo systemctl restart xrdp






