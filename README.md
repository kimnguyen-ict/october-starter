# october-starter

## Virtual host
```
1. Copy apache config file:
sudo cp .config/tokyo-tower.dev.conf /etc/apache2/sites-available
2. Copy path to project, run command:
pwd
3. Change path to project in config file in: /etc/apache2/sites-available/tokyo-tower.dev.conf
4. Add domain in hosts file:
sudo nano /etc/hosts
```

## Installation
```
cp .env.example .env
php artisan key:generate
chmod -R 775 storage bootstrap
yarn install
```
## Config
- Apache is running as current user and current group.
See: [link](http://google.com)
- Change .env then install your october:
```
php artisan october:install
npm run dev
```
