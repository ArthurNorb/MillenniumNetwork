# Millennium Network - Plataforma de Atletas

Este é o repositório oficial para o desenvolvimento da **Millennium Network**, uma plataforma de assinatura digital para a mentoria e desenvolvimento de atletas de futebol.

## Visão Geral

A Millennium Network será uma plataforma de assinatura (R$49/mês) para atletas de futebol que buscam evoluir rumo ao profissionalismo. O objetivo é aumentar a exposição dos atletas a oportunidades reais e criar uma rotina de aprendizagem de alto nível através de lives e mentorias.

## Status Atual

O projeto está em fase inicial de desenvolvimento. O foco atual é a construção de um **Produto Mínimo Viável (MVP)** robusto e escalável, com um prazo de entrega estimado em 4 meses. O primeiro entregável será um protótipo funcional ("Fatia Vertical") focado no fluxo de descoberta de atletas por recrutadores.

## Módulos Principais (Escopo do MVP)

* **Gestão de Perfis e Autenticação:** Cadastro, login e perfis distintos para Atletas, Mentores e Recrutadores.
* **Sistema de Assinatura:** Integração com gateway de pagamento (Stripe/Mercado Pago) para a recorrência de R$ 49/mês.
* **Lives e Biblioteca de Conteúdo:** Agenda de eventos, transmissão ao vivo e armazenamento automático de gravações.
* **Marketplace de Mentorias 1:1:** Sistema de agendamento, pagamento com escrow e comissionamento da plataforma.
* **Ferramenta de Busca para Recrutadores:** Página de busca com filtros avançados (posição, idade, passaporte, etc.).
* **Painel Administrativo:** Dashboard para gestão de usuários, conteúdo e finanças.

## Stack de Tecnologia

A stack foi selecionada para garantir produtividade, performance e um desenvolvimento moderno.

* **Backend:** Laravel 11
* **Autenticação:** Laravel Jetstream
* **Frontend Interativo:** Livewire 3
* **JavaScript:** Alpine.js
* **Estilização:** Tailwind CSS
* **Painel Admin:** Filament 3
* **Banco de Dados:** MariaDB

## 🚀 Configuração do Ambiente de Desenvolvimento

Siga os passos abaixo para rodar o projeto localmente.

### Pré-requisitos

* Ambiente WSL (Ubuntu) no Windows
* PHP 8.2+
* Composer
* Node.js & NPM
* MariaDB

### Passos para Instalação

1.  **Clone o repositório:**
    ```bash
    git clone [https://github.com/SEU-USUARIO/millennium-network.git](https://github.com/SEU-USUARIO/millennium-network.git)
    cd millennium-network
    ```

2.  **Instale as dependências do Composer:**
    ```bash
    composer install
    ```

3.  **Instale as dependências do NPM:**
    ```bash
    npm install
    ```

4.  **Configure o arquivo de ambiente:**
    ```bash
    cp .env.example .env
    ```

5.  **Gere a chave da aplicação:**
    ```bash
    php artisan key:generate
    ```

6.  **Configure o `.env`:**
    Abra o arquivo `.env` e adicione as credenciais do seu banco de dados local.

7.  **Execute as migrations do banco de dados:**
    ```bash
    php artisan migrate
    ```

8.  **Compile os assets de frontend:**
    ```bash
    npm run dev
    ```

9.  **Inicie o servidor de desenvolvimento:**
    ```bash
    php artisan serve
    ```

A aplicação estará disponível em `http://127.0.0.1:8000`. O painel administrativo estará em `/admin`.