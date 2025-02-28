# CRM - Sistema de Gestão de Relacionamento com o Cliente

Este é um sistema de Gestão de Relacionamento com o Cliente, desenvolvido em **PHP** seguindo o padrão **PSR-4**, com autenticação de usuários e super anúncios.

---

## 📌 Tecnologias Utilizadas

- PHP 8+
- Composer (Autoload - PSR-4)
- MySQL ou Mariadb
- PDO (Conexão com Banco de Dados)
- Twig 3+
- vlucas/phpdotenv (Gerenciamento de variáveis de ambiente)

---

## 📌 Configuração do Projeto

### 🔹 1. Clonar o repositório  
```sh
git clone https://github.com/afsilva3021/ccrm.git
cd CCRM
```
---

### 🔹 2. Instalar as dependências
- composer install


### 🔹 3. Configurar as variáveis de ambiente
- Alteri o arquivo .env com sua informações referente
- Ao seu banco de dados

- Exemplo

- DB_HOST=localhost
- DB_NAME=CCRM
- DB_USER=root
- DB_PASS=

### Comando SQL para criar a base de dados
- CREATE  DATABASE CCRM SET utf8mb4 COLLATE utf8mb4_unicode_ci;

### 🔹 4. Rodar o projeto
- Windows / Linux Comando via shell ou PowerShell php -S localhost:8000
- Utilizando xampp Windows clonar respositorio na pasta c:\xampp\htdocs\
- Utilizando Apache2 linux clonar repositorio na pasta /var/www/html/

