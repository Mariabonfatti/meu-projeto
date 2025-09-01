# Projeto de Cadastro 💖

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
1. criação da instancia ec2 
2. baixar .PEM

## 1) Conectar
```bash
ssh -i "labsuser.pem" ubuntu@ec2-34-226-200-46.compute-1.amazonaws.com
```

## 2) Sistema e pacotes
```bash
sudo apt update && sudo apt upgrade -y
sudo apt install -y git apache2 php php-mysql php-mbstring php-xml mariadb-server
sudo systemctl enable --now apache2
sudo systemctl enable --now mariadb
```

## 3) Permissões do Apache
```bash
sudo chown -R ubuntu:www-data /var/www
sudo find /var/www -type d -exec sudo chmod 2775 {} \;
sudo find /var/www -type f -exec sudo chmod 0664 {} \;
```

## 4) Deploy do código
```bash
cd /var/www/html
sudo rm -f index.html
sudo -u ubuntu git clone https://github.com/Mariabonfatti/meu-projeto.git .
```

## 5) MariaDB seguro
```bash
sudo mysql_secure_installation
```
configurar senha:ifsp
sempre yes

## 6) Banco + usuário + tabela
```bash
sudo mysql -u root -p 
```
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

## 7) Mudar localhost, user e senha no php
localhost: ec2-34-226-200-46.compute-1.amazonaws.com
user: root
senha:ifsp

## 8) (Se você alterou salvar.php no GitHub)
```bash
cd /var/www/html && sudo -u ubuntu git pull
sudo systemctl restart apache2
```

<img width="620" height="252" alt="image" src="https://github.com/user-attachments/assets/32503d28-317c-48a0-8b9d-43ddc05cd0ad" />

<img width="1227" height="474" alt="image" src="https://github.com/user-attachments/assets/f001c9af-4eb0-4693-9151-ad60dea63844" />

<img width="1227" height="109" alt="image" src="https://github.com/user-attachments/assets/1b99ceea-0781-4d55-bd62-b0bf5af69338" />

<img width="1225" height="462" alt="image" src="https://github.com/user-attachments/assets/8e6caec4-2f8c-4b46-a0e1-9f2e74bd7731" />
