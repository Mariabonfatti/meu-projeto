# Projeto de Cadastro 💖

Um projetinho simples em **PHP + MariaDB** 🌸.

## 🚀 Como usar

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/meu-projeto.git
   ```

2. Configure o banco de dados (no MariaDB):
   ```sql
   CREATE DATABASE desafioDB;
   USE desafioDB;

   CREATE TABLE usuarios (
     id INT AUTO_INCREMENT PRIMARY KEY,
     nome VARCHAR(100) NOT NULL,
     email VARCHAR(100) NOT NULL
   );

   CREATE USER 'desafioUser'@'localhost' IDENTIFIED BY 'SenhaForte123!';
   GRANT ALL PRIVILEGES ON desafioDB.* TO 'desafioUser'@'localhost';
   FLUSH PRIVILEGES;
   ```

3. Acesse no navegador:
   ```
   http://localhost/index.html
   ```

## 📂 Estrutura
- `index.html` → Formulário de cadastro 🌸
- `salvar.php` → Salva no banco 💾
- `listar.php` → Lista usuários cadastrados 📋
- `style.css` → Estilo fofinho ✨

## Playbook ubuntu
-criação da instancia ec2
-conectar no cmd 
-'ssh -i "vockey.pem" ubuntu@ec2-34-226-200-46.compute-1.amazonaws.com'

