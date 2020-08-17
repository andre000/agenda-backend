# agenda-backend

## Commands

```sh
php -S localhost:8000 -t public
```
or

```sh
docker-compose up -d
```

### Using composer 

```sh
composer install
```
or 

```sh
docker-compose exec php composer install -d /var/www/html
```

### Migration

```sh
php artisan migrate
```
or 

```sh
docker-compose exec -w /var/www/html php php artisan migrate
```
