<h1 align="center">O UIVO DA NOITE</h1>
  <br>
  <p align="center">
    Um website fictício feito com PHP. <br>
    Ações: <strong>Cadastrar</strong> um novo usuário e fazer <strong>login</strong>.
  </p>

<p align="center"><img src="https://imgur.com/Uk7ba3i.gif" width="650"></p>

<h3 align="center">Tela de login e cadastro</h3>
<p align="center"><img src="https://imgur.com/3rFqh0M.gif" width="650"></p>

<h3 align="center">Página 404</h3>
<p align="center"><img src="https://imgur.com/nIVMKD6.png" width="650"></p>

<hr>

## :hammer: Ferramentas Utilizadas
* <a href="https://code.visualstudio.com/download">Visual Studio Code</a>
* <a href="https://www.apachefriends.org/download.html">Xampp (Apache + MariaDB)</a>
* <a href="https://www.php.net/downloads.php">PHP</a>
* <a href="https://github.com/michalsnik/aos">AOS (js library)</a>

## :zap: Executar o projeto

1. #### Executar o servidor e o banco de dados
    <img src="https://imgur.com/en1HUJU.png" width="350">

2. #### Abrir o PHPMyAdmin no navegador e criar o banco de dados
    <img src="https://imgur.com/BRVLXkq.png" width="200">

    ```sql
    CREATE DATABASE users;

    CREATE TABLE users (
      id INT NOT NUll AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(255) NOT NULL,
      email VARCHAR(255) NOT NUll,
      password VARCHAR(32) NOT NULL
    );
    ```

3. #### Fazer o clone do repositório
    ```$ git clone https://github.com/LeonMarqs/auth_example.git```

4. #### Ligar o servidor PHP pelo terminal
    ```$ php -S localhost:8080```<br>
    <img src="https://imgur.com/R1GLk9I.png" width="350">

5. #### Abrir a página index no navegador
    ``` localhost:8080/```

## Responsividade
<img src="https://imgur.com/5VFZpVN.gif" width="350">

## :eye: Observações

* Caso queira mudar as configurações do banco de dados, deverá fazer ajustes no arquivo Connection.php

* Não implementei as APIs para o cadastro com as redes sociais, é apenas visual.

* O sistema de rotas está no arquivo index.php

<hr>

<h5 align="center"> O projeto é open-source, então se quiser contribuir, fique a vontade.</h5>
