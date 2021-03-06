



<!DOCTYPE html>
  <html>

      <link rel="shortcut icon" href="/img/icon.png">
       <link type="text/css" rel="stylesheet" href="/css/materialize/materialize.min.css" >
       <link rel="stylesheet" type="text/css" href="/css/materialize/style2.css">
       <link href="/css/materialize/iconmaterialize.css" rel="stylesheet">
      <title>Login</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <nav>
    <div class="nav-wrapper">
      <a href="#" data-activates="mobile-demo" class="button-collapse">
      <i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a class="menunav" href="/">HOME</a></li>
        <li><a class="menunav" href="/register">REGISTER</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a class="waves-effect waves-light btn" href="index">Home</a></li>
        <li><a class="waves-effect waves-light btn" href="register">Register</a></li>
      </ul>
    </div>
  </nav>
  <div id="test1" class="col s12">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <div class="login">
         <div class="card-panel blue-grey lighten-5 z-depth-5">
         <p class="center login-form-text">Untuk Meminjam Buku <br> Anda Harus Login Terlebih Dahulu</p>
         <img class="gambar" src="img/logo.png">

         <form action="{{ route('login') }}" method="POST">
          {{ csrf_field() }}
          
              <div class="input-field col s12">
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <i class="material-icons prefix">perm_identity</i>
              <input id="icon_prefix email" type="email" class="validate form-control" name="email" value="{{ old('email') }}" required autofocus>
              <label for="icon_prefix" class="control-label">E-Mail</label>
               @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
               @endif
              </div><!--end inputfield-->
            </div>

              <div class="input-field col s12">
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <i class="material-icons prefix">lock</i>
              <input id="password" type="password" class="validate form-control" name="password" required>
              <label for="password" class="control-label">Password</label>
               @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
              </div><!--end inputfield-->
              </div>
              <p>
              <input type="checkbox" name="checkbox" value="check" id="test5" />
              <label for="test5">Saya Bersedia Bertanggung Jawab</label>
              </p>
              <div class="log">
              <button class="btn waves-effect waves-light" type="submit" name="action" onclick="if(!this.form.checkbox.checked){alert('You must agree to the terms first.');return false}"><i class="material-icons left">done_all</i>Login
            </button><!--end button-->
              </div>
        </form><!--end form-->
        </div><!--end cardpanel-->
        </div><!--end login-->  
        </div><!--end cols12-->
      </div><!--end rows-->
    </div><!--end container-->
  
  </div>
  
        
          
      <!--Import jQuery before materialize.js-->
   <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize/materialize.min.js"></script>
    <script>
      $( document ).ready(function(){

        $(".button-collapse").sideNav();
        
      })
    </script>
    </body>
  </html>
