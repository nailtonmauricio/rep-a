### Passo a passo

CLONANDO PROJETOS

* Clone, mantendo nome original do projeto:
```
git clone caminho_projeto
```
ou

* Clone, alterando o nome do projeto:
```
git clone --recurse-submodules caminho_projeto novo_nome_projeto
```
ALTERAR O PROPIETÁRIO DO DIRETÓRIO DO PROJETO PARA O USUÁRIO HOST
```
```
sudo chown -R $USER:$USER /caminho_do_projeto
```

## QUANDO NECESSÁRIO AJUSTE AS PERMISSÕES DE DIRETÓRIOS E ARQUIVOS

## ACESSE O DIRETÓRIO DO PROJETO
```sh
cd app-laravel/
```

Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```
APP_NAME="Nome App"
APP_URL=http://localhost:80

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=nome_db
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acessar o container
```sh
docker-compose exec app bash
```


INSTALAÇÃO DAS DEPENDÊNCIAS DO PROJETO
```sh
composer install
npm install
```


GERAR O KEY DA APLICAÇÃO
```sh
php artisan key:generate
```

RODAR AS MIGRATIONS
```
./vendor/bin/sail artisan migrate
```

RODAR AS SEEDERS
```
./vendor/bin/sail artisan db:seed
```

INICIAR O VITE
```
./vendor/bin/sail npm run dev
```


Acessar o projeto
[http://localhost](http://localhost)

Acessar o PHPMyadmin
[http://localhost:8080](http://localhost:8080)