# 📰 Desafio 1 — Sistema de Gerenciamento de Notícias (Laravel + White Dashboard)

## 📋 Descrição

Aplicação desenvolvida em **PHP/Laravel**, utilizando o template **White Dashboard Laravel (Creative Tim)**.  
O sistema permite o **gerenciamento de notícias** por usuário autenticado, incluindo login, registro, perfil com foto e CRUD completo.  
Cada usuário visualiza **apenas suas próprias notícias**, conforme os requisitos do desafio.

---

## 🧩 Funcionalidades

- 🔐 **Autenticação completa** (login, registro e logout) via Laravel Breeze  
- 👤 **Gerenciamento de usuários** — cada um acessa apenas suas próprias notícias  
- 📰 **CRUD de notícias**
  - Criar, listar, editar e excluir notícias  
  - Pesquisa por título ou conteúdo  
- 📸 **Perfil do usuário**
  - Exibição de nome, e-mail e foto de perfil  
  - Upload de imagem do usuário  
- 🎨 **Interface moderna e responsiva**
  - Baseada no **White Dashboard**  
  - Paleta de cores personalizada `#e14eca / #ba54f5`

---

## ⚙️ Tecnologias utilizadas

| Categoria | Ferramenta |
|------------|-------------|
| Framework | Laravel 11 |
| Frontend | Blade + Bootstrap (White Dashboard) |
| Autenticação | Laravel Breeze |
| Banco de Dados | SQLite (modo local) |
| Linguagem | PHP 8.2 |
| Versionamento | Git / GitHub |

---

## 🧠 Estrutura de pastas principais

```
app/
 ├── Http/
 │   ├── Controllers/
 │   │   ├── NewsController.php
 │   │   └── ProfileController.php
 │   └── Requests/
 └── Models/
     ├── News.php
     └── User.php

resources/views/
 ├── auth/
 ├── layouts/
 ├── news/
 └── profile/
```

---

## 🚀 Como rodar o projeto localmente

### 1️⃣ Clonar o repositório
```bash
git clone https://github.com/<seu-usuario>/<seu-repo>.git
cd <seu-repo>
```

### 2️⃣ Instalar dependências
```bash
composer install
npm install && npm run dev
```

### 3️⃣ Configurar o ambiente
Copie o arquivo de exemplo:
```bash
cp .env.example .env
```

Atualize o `.env` para usar **SQLite**:
```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

Crie o arquivo do banco:
```bash
mkdir -p database && type nul > database/database.sqlite
```

### 4️⃣ Gerar a chave da aplicação
```bash
php artisan key:generate
```

### 5️⃣ Rodar migrações e seeders (opcional: usuário demo)
```bash
php artisan migrate --seed
```

### 6️⃣ Iniciar o servidor local
```bash
php artisan serve
```

Acesse:  
🔗 **http://127.0.0.1:8000**

---

## 👥 Usuário demo (opcional)

```
E-mail: avaliador@example.com
Senha: password
```

---

## 💡 Observações

- O projeto está configurado para **rodar localmente com SQLite**, ideal para demonstrações.  
- Cada usuário visualiza **somente suas próprias notícias**.  
- Estrutura segue o padrão **MVC do Laravel** (controllers, models, rotas, requests).  

---

## 🛠️ Comandos úteis

```bash
php artisan optimize:clear   # Limpa cache da aplicação
php artisan migrate:fresh --seed   # Recria o banco e popula dados
php artisan key:generate    # Gera nova chave de app
```

---

## 👨‍💻 Autor

**Matheus de Mattos Chaves**  
Desenvolvido como parte do **Desafio 1 — PHP/Laravel**  
📅 Outubro/2025
