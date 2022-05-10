<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.css">
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
            </ul>
          </nav>
        </div>
      </header><!--navbar-->

      <table>
          <tr>
              <th>Nom Produit</th>
              <th>Prix</th>
              <th>Quantité</th>
          </tr>
          <tr>
              <td><a href="{{ url('produit')}}">Jeu 1</a></td>
              <td>20€</td>
              <td>1</td>
          </tr>
      </table>
      <button class="bouton2" type="submit">Passer La Commande</button>


<!--footer-->
<footer class="footer2">
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