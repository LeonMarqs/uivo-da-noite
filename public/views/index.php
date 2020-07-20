<?php 
$style = 'styles';
?>

<body>
  
  <header id="header">
      <div class="container">
        <a class="logo" href="#">
          LOGO
        </a>
        <div class="menu-section">
          <div class="menu-toggle">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
          </div>
          <nav>
            <ul>
              <li>
                <a class="menu-link" class="active" href="#">Home</a>
              </li>
              <li>
                <a class="menu-link" href="#">Blog</a>
              </li>
              <li>
                <a class="menu-link" href="#">Sobre Mim</a>
              </li>
              <li>
                <a class="menu-link" href="#">Contato</a>
              </li>
              <li>
                <a href="/login" class="login">Entrar</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
  </header>

  <section class="banner">
    <span>O Uivo da Noite</span>
  </section>

  <main class="container">
    <section class="posts">
      <div data-aos="fade-right" class="post">
        <img src="http://localhost:8080/public/img/wolf1.jpg" alt="Lobo">
        <div class="text">
          <h1>O Uivo da Noite</h1>
          <p>Um site fictício criado por Leonardo a fim de desenvolver e colocar em prática suas habilidades em desenvolvimento web.</p>
        </div>
      </div>

      <div data-aos="fade-right" class="post">
        <img src="http://localhost:8080/public/img/lion1.jpg" alt="Leão">
        <div class="text">
          <h1>O Uivo da Noite</h1>
          <p>Um site fictício criado por Leonardo a fim de desenvolver e colocar em prática suas habilidades em desenvolvimento web.</p>
        </div>
      </div>

    </section>
  </main>

  <footer>
    <div class="container">

      <div>
        <h1>Logo</h1>
        <a href="#">Um site fictício</a>
      </div>

      <div>
        <h1>Informações</h1>
        <a href="#">Sobre Mim</a>
        <a href="#">Blog</a>
      </div>

      <div>
        <h1>Links Úteis</h1>
        <a href="#">Suporte</a>
        <a href="#">Serviços</a>
        <a href="#">Política de privacidade</a>
      </div>

      <div>
        <h1>Inscreva-se para mais informações</h1>
        <input type="text" placeholder="Seu email"></input>
      </div>

    </div>
  </footer>

  <div class="pos-footer">
    <div class="container">

      <div class="social">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-instagram-square"></i>
        <i class="fas fa-envelope-square"></i>
      </div>
  
      <div class="rights">
        2020 - Leonardo, Todos os direitos reservados
      </div>
      
    </div>
    
  </div>

  <button class="to-top" onclick="topFunction()">
    <i class="fas fa-arrow-up fa-3x"></i>
  </button>
  
  <script src="http://localhost:8080/public/js/script.js"></script>

  <!-- AOS -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 200,
      once: true,
    });
  </script>

</body>