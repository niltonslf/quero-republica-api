<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

# Projeto

Api de integração do Addplayer

## Instalação do docker (linux)

```
    cd [pasta-do-projeto]

    chmod +x install-docker.sh
    ./install-docker.sh

```

##instalação do docker (windows)

[https://docs.docker.com/docker-for-windows/install/](https://docs.docker.com/docker-for-windows/install/)

## Configurando projeto para desenvolvimento

No terminal execute:

```
    docker-compose up -d \\ rodar docker do projeto

    docker exec -it addplayer-app /bin/bash \\ acessar terminal do container

    ### já dentro do container ###

    composer install \\ instalar dependências

    composer update

    composer dump-autoload

    php artisan migrate:fresh \\ Criar banco de dados

    php artisan db:seed \\ carregar com informações iniciais
```
