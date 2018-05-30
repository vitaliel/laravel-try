# My Village

Clone repository

```
git clone git@gitlab.com:vitaliel/my-village.git
```

Install deps
```
composer install
```

Setup .env file and generate app key.
```
cp .env.example .env
php artisan key:generate
```

Run with mysql to create database:
```
CREATE DATABASE my_village_dev
    DEFAULT CHARACTER SET utf8mb4
    DEFAULT COLLATE utf8mb4_unicode_ci;
```

Run migrations
```
php artisan migrate
php artisan db:seed
```

Install nodejs dependencies:
```
npm install
```

Build js/css
```
npm run dev
```

Start web server
```
php artisan serve
```

If you change js/css files, start in new terminal window:
```
npm run watch
```
