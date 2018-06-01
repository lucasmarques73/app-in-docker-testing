## Comandos

### PHINX
```
docker exec -it -u "$(id -u):$(id -g)" -w /app app-blog php vendor/bin/phinx
```

- migrate
- seed:run -s UsersSeed
- seed:run -s PostsSeed

## Estrutura de Pastas e arquivos
```
├── app
│   ├── Controller
│   │   ├── HomeController.php
│   │   └── UserController.php
│   ├── Lib
│   │   ├── Db
│   │   │   ├── Connection.php
│   │   │   └── TableGateway.php
│   │   ├── FrontController
│   │   │   └── FrontController.php
│   │   └── ViewModel
│   │       └── ViewModel.php
│   ├── Model
│   │   ├── Entity
│   │   │   └── User.php
│   │   ├── Mapper
│   │   │   └── UserMapper.php
│   │   └── UserModel.php
│   └── View
│       ├── home
│       │   └── index.php
│       ├── layout
│       │   ├── footer.php
│       │   └── header.php
│       └── user
│           ├── edit.php
│           ├── index.php
│           └── new.php
├── autoload.php
├── config
│   └── config.php
├── public
│   └── index.php
├── readme.md
└── routes
    └── route.php

```