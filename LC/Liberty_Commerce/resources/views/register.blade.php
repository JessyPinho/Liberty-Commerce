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
              <li><a href="{{ url('login')}}" style="text-decoration: none;">Login</a></li>
              <li><a href="{{ url('panier')}}" i class="fas fa-shopping-cart"></i></a></li>
            </ul>
          </nav>
        </div>
      </header><!--navbar-->
        <form class="container2" id="container2" method="POST" action="/register">
          @csrf
         <div class="Register_container" id="Register">
            <p>
              <font size="5">Register</font>
            </p>
          </div>
          <div class="Name" id="Name">
            <label>
              <input type="Nom" id="Nom" name="name" placeholder="Nom">
            </label>
          </div>
            <div class="margin4" id="margin4">
            </div>
          <div class="First_Name" id="First_Name">
            <label>
              <input type="Prénom" id="Prénom" name="first_name" placeholder="Prénom">
            </label>
          </div>
            <div class="margin5" id="margin5">
            </div>
              <div class="Email" id="Email">
                <label>
                  <input type="email" id="Mail" name="email" placeholder="Email">
                </label>
              </div>
                <div class="margin1">
                </div>
              <div class="Password" id="Password">
                  <label>
                  <input type="password" id="MDP" name="password" placeholder="Password">
                  </label>
              </div>
                <div class="margin2">
                </div>
              <div class="RePassword" id="RePassword">
                <label>
                  <input type="password" id="REMDP" name="password_confirmation" placeholder="Password Confirmation">
                </label>
              </div>
                <div class="margin3">
                </div>
              <div class="Button" id="Button">
                <button type="submit">Register</button>
              </div>
        </form>
  
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