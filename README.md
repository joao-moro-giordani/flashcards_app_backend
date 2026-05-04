## Lembretes para realizar o setup

1. Crie o banco de dados no phpmyadmin e ponha o nome que você colocou na variável de ambiente DB_DATABASE

2. Configurar o .env:
      Para fazer isso apenas faça ctrl + C e depois ctrl + V no .env.example e modifique as seguintes variáveis:
      1. DB_CONNECTION
      2. DB_DATABASE

3. Rodar o **composer install**
```bash
composer install
```
  
4. Rodar **key:generate**
```bash
php artisan key:generate
```

5. Rodar **migrations**
```bash
php artisan migrate
```

6. Rodar **seeders**
```bash
php artisan db:seed
```

7. Rodar o **server**
```bash
php artisan serve
```

### Lista de comandos resumida
```bash
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
```
