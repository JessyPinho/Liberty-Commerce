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
              <li><a href="{{ url('register')}}" style="text-decoration: none;">Register</a></li>
              <li><a href="{{ url('panier')}}" i class="fas fa-shopping-cart"></i></a></li>
            </ul>
          </nav>
        </div>
      </header><!--navbar-->
        <form class="containerj" id="containerj" method="POST" action="/login">
          @csrf
          <div class="Login_container" id="Login">
            <p>
              <font size="5">Login</font>
            </p>
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
              <div class="Button" id="Button">
                <button type="submit">Login</button>
              </div>
                </div>
                {{-- <div class="margin3">
              <label>
              <input type="checkbox" checked="checked" name="remember">Remember me
              </label>
                </div> --}}
          <div class="Reset" id="Reset">
            <a href="{{ url('reset')}}" style="text-decoration: none;">Reset Password</a>
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