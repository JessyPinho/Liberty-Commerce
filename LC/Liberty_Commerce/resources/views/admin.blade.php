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
            <li class="nav-item {{Request::is('subject') ? 'active' : '';}}"><a href="{{ url('subject')}}" style="text-decoration: none">Home</a></li>
            <li><a href="{{ url('login')}}" style="text-decoration: none">Login</a></li>
            <li><a href="{{ url('register')}}" style="text-decoration: none">Register</a></li>
            <li><a href="{{ url('panier')}}" i class="fas fa-shopping-cart"></i></a></li>
        </ul>
        </nav>
      </div>
    </header>
    <!--navbar-->

    <!--admin-->
    <section class="container">
      
      <form class="formposition" enctype="multipart/form-data" method="POST" action="garder">
        @csrf
        <div class="row">
          <div class="col-15">
            <label for="njeu">Nom du jeu</label>
          </div>
          <div class="col-50">
            <input type="text" id="njeu" name="nom_jeu" placeholder="Nom du jeu">
          </div>
        </div>
        <div class="row">
          <div class="col-15">
            <label for="Image">Image du jeu</label>
          </div>
          <div class="col-50">
            <input type="file" id="image" name="image" alt="Login">
          </div>
        </div>
        <div class="row">
          <div class="col-15">
            <label for="descript">description</label>
          </div>
          <div class="col-50">
            <textarea id="descript" name="description" placeholder="description du jeu.."></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-15">
            <label for="pjeu">prix</label>
          </div>
          <div class="col-50">
            <input type="text" id="pjeu" name="prix" placeholder="prix du jeu">
          </div>
        </div>
        <div class="row">
          <div class="col-15">
            <label for="gjeu">genre</label>
          </div>
          <div class="col-50">
            <input type="text" id="gjeu" name="genre" placeholder="Genre du jeu">
          </div>
        </div>
        <div class="row">
          <div class="col-15">
            <label for="rjeu">restant</label>
          </div>
          <div class="col-50">
            <input type="text" id="rjeu" name="stock" placeholder="Nombre de jeux restant">
          </div>
        </div>
        <div class="row">
          <input type="submit" value="Submit">
        </div>
      </form>

    </section>
    <!--admin-->

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