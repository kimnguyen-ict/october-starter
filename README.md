# october-starter

## Virtual host
```
1. Copy apache config file:
sudo cp .config/tokyo-tower.dev.conf /etc/apache2/sites-available
2. Copy path to project, run command:
pwd
3. Change path to project in config file in: /etc/apache2/sites-available/tokyo-tower.dev.conf
sudo nano /etc/apache2/sites-available/tokyo-tower.dev.conf
4. Add domain in hosts file:
sudo nano /etc/hosts
127.0.0.1 tokyo-tower.dev
5. Enable site
sudo a2ensite tokyo-tower.dev.conf
sudo service apache2 reload
```

## Installation
```
chmod -R 777 storage bootstrap
cp .env.example .env
composer install
yarn install
php artisan key:generate
```
## Config
- Apache is running as current user and current group.
See: [Running apache as a different user](https://superuser.com/questions/316705/running-apache-as-a-different-user)
- Change .env then install your october:
```
# October migrate database:
php artisan october:up
# October install:
php artisan october:install
# Run if you want update application files:
php artisan october:update

npm run dev
```

## Open in browser
- Web: [tokyo-tower.dev](http://tokyo-tower.dev)
- Backend: [tokyo-tower.dev/backend]
Username: admin
Password: admin

## Issues
- `Apache show php code, not execute.`
Let check php.so file in /etc/apache2/mods-enabled. If not found, we will run to install libapache2:
```
sudo apt-get install libapache2-mod-php
```
- `Mysql error, must reinstall mysql`
```
sudo apt-get purge mysql-server mysql-client mysql-common mysql-server-core-5.6 mysql-client-core-5.6
sudo rm -rf /etc/mysql /var/lib/mysql
sudo apt-get autoremove
sudo apt-get autoclean
sudo apt-get update
sudo apt-get install -y mysql-server-5.7
# Follow next step: Enter root password, repeat enter root password...
# Test mysql:
mysql -uroot -psecret
```
```
Root logged, Create new mysql user:
CREATE USER 'homestead'@'localhost' IDENTIFIED BY 'secret';
GRANT ALL ON *.* TO 'homestead'@'localhost';
CREATE DATABASE tokyo_tower
```
