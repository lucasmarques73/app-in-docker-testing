
## Using application
Install packages with composer install
```
docker run -it --rm -u "$(id -u):$(id -g)" -v "$PWD":/app -w /app composer install
```
Copy archive `.env.example` to `.env`
```
cp .env.example .env
```
In `.env` define yours environments variables  
Up application
```
docker-compose up -d --build
```
Run migrate
```
docker exec -it -u "$(id -u):$(id -g)" -w /app app-blog php vendor/bin/phinx migrate
```
Run Seeds
```
docker exec -it -u "$(id -u):$(id -g)" -w /app app-blog php vendor/bin/phinx seed:run -s UsersSeed
docker exec -it -u "$(id -u):$(id -g)" -w /app app-blog php vendor/bin/phinx seed:run -s PostsSeed
```
Add in `/etc/hosts`
```
127.0.0.1       app.local
```
Access to application in your web browser
```
http://app.local:8000
```
## Commands

### PHINX
```
docker exec -it -u "$(id -u):$(id -g)" -w /app app-blog php vendor/bin/phinx
```
- migrate
- seed:run -s UsersSeed
- seed:run -s PostsSeed


### COMPOSER
```
docker run -it --rm -u "$(id -u):$(id -g)" -v "$PWD":/app -w /app composer
```
- install

### DOCTRINE
```
docker exec -it -u "$(id -u):$(id -g)" -w /app app-blog php vendor/bin/doctrine
```

### DOCKER
Up application first time
```
docker-compose up -d --build
```
Up application
```
docker-compose up -d
```
Down application
```
docker-compose down
```
Access to bash in container app-blog
```
docker exec -it app-blog bash
``` 
