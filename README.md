# Projeto de Cadastro 💖

Um projetinho simples em **PHP + MariaDB** 🌸.

## 🚀 Como usar

1. Clone o repositório:
   ```bash
   git clone https://github.com/Mariabonfatti/meu-projeto.git
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
-baixar .PEM

# 0) Conectar
ssh -i "labsuser.pem" ubuntu@ec2-34-226-200-46.compute-1.amazonaws.com

# 1) Sistema e pacotes
sudo apt update && sudo apt upgrade -y
sudo apt install -y git apache2 php php-mysql php-mbstring php-xml mariadb-server
sudo systemctl enable --now apache2
sudo systemctl enable --now mariadb

# 2) Permissões do Apache
sudo chown -R ubuntu:www-data /var/www
sudo find /var/www -type d -exec sudo chmod 2775 {} \;
sudo find /var/www -type f -exec sudo chmod 0664 {} \;

# 3) Deploy do código
cd /var/www/html
sudo rm -f index.html
sudo -u ubuntu git clone https://github.com/Mariabonfatti/meu-projeto.git .

# 4) MariaDB seguro
sudo mysql_secure_installation
configurar senha:ifsp
sempre yes

# 5) Banco + usuário + tabela
sudo mysql -u root -p 

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


# 7) Mudar localhost, user e senha no php
localhost: ec2-34-226-200-46.compute-1.amazonaws.com
user: root
senha:ifsp

# 6) (Se você alterou salvar.php no GitHub)
cd /var/www/html && sudo -u ubuntu git pull
sudo systemctl restart apache2
