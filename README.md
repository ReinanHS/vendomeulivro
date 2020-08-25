<p align="center">
<img src="https://i.imgur.com/Ls72Qbu.png" width="20%">
</p>

## Sobre o vendomeulivro.com

Este é o projeto principal do site.

## Como implementar o site:

Clone o repositório da organização no github, se você não tiver acesso, faça uma solicitação no canal #github:
```
git clone https://github.com/Vendomeulivro/site.git
```

após ter feito o clone entre as pastas do projeto e instalar as dependências:
```bash
composer install
npm install
npm run dev
```

Faça uma cópia do arquivo `.env.example` para `.env` e modifique os arquivos com as configurações de seu ambiente de desenvolvimento.


logo depois, execute o comando `php artisan key:generate` para criar um token para sua aplicação

Estabelecendo uma conexão com o banco de dados e criando as migrations: 
```bash
php artisan migrate:install
php artisan migrate:refresh
```

Antes de abrir o site no navegador, configure um host virtual para vendomeulivro.local apontando para a pasta `/public`
