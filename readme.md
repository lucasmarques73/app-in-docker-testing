## Tabelas Banco de dados
### MySQL
```
CREATE TABLE users(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(200) NOT NULL,
	email VARCHAR(150) NOT NULL UNIQUE,
	pass VARCHAR(200) NOT NULL
);
CREATE TABLE posts(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(200) NOT NULL,
	content TEXT,
	created_at DATE,
	published BOOLEAN,
	user_id INT NOT NULL REFERENCES users(id)
);
```
### PostgreSQL
```
CREATE TABLE users(
	id SERIAL PRIMARY KEY,
	name VARCHAR(200) NOT NULL,
	email VARCHAR(150) NOT NULL UNIQUE,
	pass VARCHAR(200) NOT NULL
);
CREATE TABLE posts(
	id SERIAL PRIMARY KEY,
	title VARCHAR(200) NOT NULL,
	content TEXT,
	created_at DATE,
	published BOOLEAN,
	user_id INT NOT NULL REFERENCES users(id)
);
```

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