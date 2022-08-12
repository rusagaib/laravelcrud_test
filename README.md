```
docker-compose up --build -d
cd src/ && sudo chmod -R 775 storage && sudo chmod -R ugo+rw storage
docker-compose run artisan migrate
docker-compose run artisan db:seed
docker-compose run artisan vendor:publish --tag=laravel-pagination
```
