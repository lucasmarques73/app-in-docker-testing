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

## Inserir usuario
```
INSERT INTO users(name,email,pass) VALUES ('admin','admin@admin.com','$2y$10$UXXORkbFoy8jD824eN3f6OeguAWTqVA1QdHxSPUCM2Ku1PBsBpYi2');
```
