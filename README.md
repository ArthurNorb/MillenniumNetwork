# Millennium Network - Plataforma de Atletas

[cite_start]Este é o repositório oficial para o desenvolvimento da **Millennium Network**, uma plataforma de assinatura digital para a mentoria e desenvolvimento de atletas de futebol[cite: 236].

## Visão Geral

[cite_start]A Millennium Network será uma plataforma de assinatura (R$49/mês) para atletas de futebol que buscam evoluir rumo ao profissionalismo[cite: 1, 7]. [cite_start]O objetivo é aumentar a exposição dos atletas a oportunidades reais e criar uma rotina de aprendizagem de alto nível através de lives e mentorias[cite: 14, 15].

## Status Atual

O projeto está em fase inicial de desenvolvimento. [cite_start]O foco atual é a construção de um **Produto Mínimo Viável (MVP)** robusto e escalável, com um prazo de entrega estimado em 4 meses[cite: 237]. O primeiro entregável será um protótipo funcional ("Fatia Vertical") focado no fluxo de descoberta de atletas por recrutadores.

## Módulos Principais (Escopo do MVP)

* [cite_start]**Gestão de Perfis e Autenticação:** Cadastro, login e perfis distintos para Atletas, Mentores e Recrutadores[cite: 242, 248].
* [cite_start]**Sistema de Assinatura:** Integração com gateway de pagamento (Stripe/Mercado Pago) para a recorrência de R$ 49/mês[cite: 251].
* [cite_start]**Lives e Biblioteca de Conteúdo:** Agenda de eventos, transmissão ao vivo e armazenamento automático de gravações[cite: 255, 256, 257].
* [cite_start]**Marketplace de Mentorias 1:1:** Sistema de agendamento, pagamento com escrow e comissionamento da plataforma[cite: 258, 260, 261].
* [cite_start]**Ferramenta de Busca para Recrutadores:** Página de busca com filtros avançados (posição, idade, passaporte, etc.)[cite: 264].
* [cite_start]**Painel Administrativo:** Dashboard para gestão de usuários, conteúdo e finanças[cite: 267].

## Stack de Tecnologia

[cite_start]A stack foi selecionada para garantir produtividade, performance e um desenvolvimento moderno[cite: 269].

* [cite_start]**Backend:** Laravel 11 [cite: 270]
* [cite_start]**Autenticação:** Laravel Jetstream [cite: 272]
* [cite_start]**Frontend Interativo:** Livewire 3 [cite: 273]
* [cite_start]**JavaScript:** Alpine.js [cite: 274]
* [cite_start]**Estilização:** Tailwind CSS [cite: 275]
* [cite_start]**Painel Admin:** Filament 3 [cite: 276]
* [cite_start]**Banco de Dados:** MariaDB [cite: 277]

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

## Próximos Passos

O foco de desenvolvimento agora se volta para a implementação das primeiras funcionalidades do protótipo:
1.  Estrutura de dados e models para `AthleteProfile`.
2.  Criação da interface de visualização do Perfil do Atleta.
3.  Implementação da busca avançada para Recrutadores com Livewire.