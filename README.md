```
docker-compose up --build -d
docker-compose run artisan migrate
docker-compose run artisan db:seed
docker-compose run artisan vendor:publish --tag=laravel-pagination
```
