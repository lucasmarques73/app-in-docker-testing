## Comandos

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

### DOCKER
Up application
```
docker-compose up -d --build
```
Down application
```
docker-compose down
```
Access to bash in container app-blog
```
docker exec -it app-blog bash
``` 
