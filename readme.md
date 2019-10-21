# Quero república - PHP

Encontre as melhores repúblicas perto de você!

Site desenvolvido como desafio. Nele utilizo ReactJs no front, Nodejs para fornecer os dados para o front-end e uma API em Laravel que é consumida pelo node.

## Tecnologies

-   REACTJS ( [Repositório Front-end](https://github.com/niltonslf/quero-republica-front-end) )
-   NODEJS ( [Repositório nodejs](https://github.com/niltonslf/quero-republica-node) )
-   LARAVEl ( [Repositório API](https://github.com/niltonslf/quero-republica-api) )

## Scripts

Rodar versão de desenvolvimento:

### `php artisan run serve`

Rodar com docker

### `docker-compose up -d`

Entrar no console do container:

### `docker exec -it republica-app /bin/bash`

Criar banco e inserir dados padrão:

### `php artisan migrate:fresh --seed`

## DEMO

[http://republicafront.niltonlopes.com.br/](http://republicafront.niltonlopes.com.br/)
