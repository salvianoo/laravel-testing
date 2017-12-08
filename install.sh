#!/bin/bash

sudo apt-get update
sudo apt-get install -y zip unzip curl git libicu-dev libmcrypt-dev libcurl4-openssl-dev libssl-dev libxml2-dev pkg-config
sudo apt-get install php7.1-curl php7.1-xml php7.1-mysql php7.1-mbstring php7.1-sqlite3 -y

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php --install-dir=/usr/bin --filename=composer
php -r "unlink('composer-setup.php');"
