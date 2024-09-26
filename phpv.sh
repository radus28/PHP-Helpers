sudo a2dismod $1
sudo a2enmod $2
sudo systemctl stop apache2
sudo systemctl start apache2
