# API Laravel com JWT e Produtos

## Pré-requisitos

- Docker
- Docker Compose

## Configuração

1. Clone o repositório:

    ```bash
    git clone https://github.com/jrfalcao/api-rest-laravel.git 
    cd api-rest-laravel
    ```

2. Crie o arquivo `.env` a partir do exemplo:

    ```bash
    cp .env.example .env
    ```

3. Gere a chave da aplicação:

    ```bash
    docker-compose run --rm app php artisan key:generate
    ```

4. Configure o segredo JWT:

    ```bash
    docker-compose run --rm app php artisan jwt:secret
    ```

5. Suba os containers Docker:

    ```bash
    docker-compose up -d
    ```

6. Execute as migrations e seeders:

    ```bash
    docker-compose run --rm app php artisan migrate --seed
    ```

## Uso

A aplicação estará disponível em `http://localhost:8000`.

## Endpoints

### Autenticação

- `POST /api/register`: Registrar um novo usuário.
- `POST /api/login`: Autenticar um usuário.

### Produtos (Requer Autenticação)

- `GET /api/products`: Obter a lista de produtos.
- `POST /api/products`: Criar um novo produto.
- `GET /api/products/{id}`: Obter um produto pelo ID.

## Documentação da API

A documentação da API gerada pelo Swagger estará disponível em `http://localhost:8000/api/documentation`.
