<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" * href="assets/css/style.css" />
    <!-- lien font Awesome -->
    <script
      src="https://kit.fontawesome.com/4e4d21f661.js" crossorigin="anonymous">
    </script>
  </head>
  <body>
    <!--navbar-->
    <header class="header">
      <div>
        <h1><a style="text-decoration: none" href="{{ url('catalogue')}}">T&J Games</a></h1>
      </div>
      <div>
        <nav>
          <ul>
            <li class="nav-item {{Request::is('subject') ? 'active' : '';}}"><a href="{{ url('subject')}}" style="text-decoration: none;">Home</a></li>
            <li><a href="{{ url('login')}}" style="text-decoration: none;">Login</a></li>
            <li><a href="{{ url('register')}}" style="text-decoration: none;">Register</a></li>
            <li><a href="{{ url('panier')}}" i class="fas fa-shopping-cart"></i></a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!--navbar-->

    <!--produit-->
    <section class="container">
      <h1>Bienvenue dans le monde du jeux vidéos</h1>
      <div class="wrapper">
        
        <div class="cardprod">
          <h3 class="card-title">Jeux01</h3>
          <img src="assets/img/test.jpg" alt="jeux">
          <p class="card-content">
            Contrary to popular belief, Lorem Ipsum is not simply random text.
            It has roots in a piece of classical Latin literature from 45 BC,
            making it over 2000 years old.
          </p>
          <button class="card-btn">20 €</button>
          <button class="card-btn">Stratégie</button>
          <button class="card-btn">10 jeux restant</button>
          <button href="#" class="card-btn">Achat</button>
        </div>
      </div>
      
    </section>
    <!--produit-->

    <!--footer-->
    <footer>
      <div>
        <p>
          <a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a>
          <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
        </p>
      </div>

      <div>
        <p>
          &copy; 2021 Copyrights <strong>Thomas&Jessy</strong>. All Rights
          Reserved
        </p>
      </div>
    </footer>
    <!--footer-->
  </body>
</html>
