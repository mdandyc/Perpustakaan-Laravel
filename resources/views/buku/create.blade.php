

<!DOCTYPE html>
<html lang="en">
    <head>
      <link rel="shortcut icon" href="/img/icon.png">
       <link type="text/css" rel="stylesheet" href="/css/materialize.min.css" >
       <link rel="stylesheet" type="text/css" href="/css/materialize/style2.css">
       <link rel="stylesheet" type="text/css" href="/css/style.min.css">
       <link href="/css/materialize/iconmaterialize.css" rel="stylesheet">
      <title>Perpustakaan</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
<body>
	
<aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details cyan darken-2">
                <div class="row">
                    <div class="col col s4 m4 l4">
                        <img src="/img/avatar.png" alt="" class="circle responsive-img valign profile-image">
                    </div>
                    <div class="col col s8 m8 l8">
                        <ul id="profile-dropdown" class="dropdown-content">
                                <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            
                                        <i class="mdi-hardware-keyboard-tab"></i> Logout
                                     </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                </li>
                            </ul>
                            <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"> {{ Auth::user()->name }}<i class="mdi-navigation-arrow-drop-down right"></i></a>
                        <p class="user-roal">Welcome</p>
                    </div>
                </div>
                </li>
                <li class="bold"><a href="memberdashboard.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard">	</i> Dashboard</a>
                </li>
                <li class="bold active"><a href="#" class="waves-effect waves-cyan"><i class="mdi-av-queue"></i> List Buku</a>
                </li><br>
                <li class="li-hover"><div class="divider"></div></li>
                <li><a href="/"><i class="mdi-hardware-keyboard-backspace"></i> Back To Home </a>
            </ul>
            </aside>


			<div class="create">
			<div class="card-panel blue-grey lighten-5 z-depth-5">
         <form class="form-horizontal" role="form" method="POST" action="/buku">
          {{ csrf_field() }}
         <div class="row">
        <div class="input-field col s12">
        <div class="form-group{{ $errors->has('isbn') ? ' has-error' : '' }}">
          <i class="material-icons prefix">vpn_key</i>
          <input id="icon_prefix isbn" type="text" class="validate form-control" name="isbn" value="{{ old('isbn') }}" required autofocus>
          <label for="icon_prefix isbn" class="control-label">ISBN</label>
          @if ($errors->has('isbn'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isbn') }}</strong>
                                    </span>
          @endif
        </div><!--end inputfield-->
        </div>
        </div>
        <div class="row">
        <div class="input-field col s12">
        <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">

        <i class="material-icons prefix">library_books</i>
        <input id="icon_prefix judul" type="text" class="validate form-control" name="judul" value="{{ old('judul') }}" required>
        <label for="icon_prefix" class="control-label">Judul</label>
        @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul') }}</strong>
                                    </span>
        @endif
        </div><!--end inputfield-->
        </div>
        </div>
        
        <div class="row">
        <div class="input-field col s12">
        <div class="form-group{{ $errors->has('pengarang') ? ' has-error' : '' }}">
        
          <i class="material-icons prefix">perm_identity</i>
          <input id="pengarang" type="text" class="validate form-control" name="pengarang" required>
          <label for="pengarang" class="control-label">Pengarang</label>
          @if ($errors->has('pengarang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pengarang') }}</strong>
                                    </span>
                                @endif
        </div><!--end inputfield-->
        </div>
        </div>

        <p>
        <input type="checkbox" name="checkbox" value="check" id="test5" />
        <label for="test5">Dengan menceklis ini,saya sudah setuju dengan ketentuan yang berlaku</label>
        </p>
        <button class="btn waves-effect waves-light" type="submit" name="action" onclick="if(!this.form.checkbox.checked){alert('You must agree to the terms first.');return false}"><i class="material-icons left">done_all</i>Submit
      </button><!--end button-->
      <input type="hidden" name="_token" value="{{csrf_token()}}">
        </form>
        </div><!--end cardpanel-->
			</div>

      <!--Import jQuery before materialize.js-->
   <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/materialize/materialize.min.js"></script>
</body>
</html>

