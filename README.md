...
# BeautyBox

**BeautyBox** é um sistema completo de gestão para salões de beleza, que permite o controle de estoque, cadastro de clientes, agendamento de atendimentos, controle de caixa e baixa no estoque com a menor unidade possível. O sistema suporta a gestão de múltiplos salões, além de diferentes tipos de permissão de usuário para um controle mais seguro e eficiente.

## Estrutura do Projeto

O sistema está dividido em duas principais pastas:

- **client/**: contém o frontend da aplicação, desenvolvido em Vue.js com TailwindCSS para estilização.
- **server/**: contém o backend da aplicação, desenvolvido com Laravel e utilizando MySQL como banco de dados.

---

## Tecnologias Utilizadas

### Frontend
- [NodeJS](https://nodejs.org/pt) - Node JS
- [Vue.js](https://vuejs.org/) - Framework JavaScript progressivo.
- [TailwindCSS](https://tailwindcss.com/) - Framework CSS utilitário.

### Backend
- [PHP](https://www.php.net/) - PHP
- [Laravel](https://laravel.com/) - Framework PHP para desenvolvimento backend.
- [MySQL](https://www.mysql.com/) - Banco de dados relacional para armazenamento de dados.
- [Composer](https://getcomposer.org/) - Gerenciador de dependências para PHP.

---

## Funcionalidades

### Gerenciamento de Estoque
- Controle de entrada e saída de produtos.
- Registro de baixas no estoque com a menor unidade possível.
  
### Cadastro de Clientes
- Cadastro, edição e exclusão de dados de clientes.
  
### Agendamento de Atendimentos
- Agenda personalizada para cada salão.
- Notificações e lembretes automáticos.

### Controle de Caixa
- Registro de transações e fechamento de caixa.
  
### Multiusuário e Múltiplos Salões
- Diferentes tipos de permissão (ex.: administrador, funcionário).
- Controle de acesso a um ou mais salões para cada usuário.

---

## Estrutura do Banco de Dados

O banco de dados MySQL possui as principais tabelas para:
- `salons`: Armazena informações sobre cada salão de beleza.
- `users`: Informações dos usuários e permissões de acesso.
- `clients`: Cadastro de clientes.
- `appointments`: Informações de agendamentos de atendimentos.
- `services`: Produtos disponíveis para uso e venda, com controle de estoque.
- `products`: Produtos disponíveis para uso e venda, com controle de estoque.
- `transactions`: Registro de movimentações no caixa.

---

## Pré-requisitos

- **PHP** >= 8.2
- **Composer** >= 2.7
- **Node.js** >= 18
- **MySQL** >= 8.0
- **Docker** (opcional para ambiente de desenvolvimento)

---

## Instalação

### Backend (server)

1. Configure seu arquivo .env
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=beautybox_db
    DB_USERNAME=root
    DB_PASSWORD=
    ```

2. Navegue até a pasta `server`:
   ```bash
   cd server
   composer install
   php artisan migrate
   php artisan make:bigboss
   php artisan serve


### Frontend (client)

1. Configure seu arquivo .env
    ```bash
    cd client
    npm install
    npm run dev
    ```

