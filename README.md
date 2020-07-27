<h3 align="center">O Uivo da Noite</h3>
  <br>
  <p align="center">
    Um website fictício feito com PHP. <br>
    Ações: <strong>Cadastrar</strong> um novo usuário e fazer <strong>login</strong>.
  </p>

<p align="center"><img src="https://imgur.com/Uk7ba3i.gif" width="450"></p>


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
<img src="https://imgur.com/AR8hLdE.gif" width="250">

## :eye: Observações

* Caso queira mudar as configurações do banco de dados, deverá fazer ajustes no arquivo Connection.php

* Não implementei as APIs para o cadastro com as redes sociais, é apenas visual.

<hr>
<h5 align="center"> O projeto é open-source, então se quiser contribuir, fique a vontade.</h5>
