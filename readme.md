## Comandos

### PHINX
```
docker exec -it -u "$(id -u):$(id -g)" -w /app app-blog php vendor/bin/phinx
```

- migrate
- seed:run -s UsersSeed
- seed:run -s PostsSeed
