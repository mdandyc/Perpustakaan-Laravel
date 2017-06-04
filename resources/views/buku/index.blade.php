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
                <li class="bold active"><a href="/buku" class="waves-effect waves-cyan">
      <i class="material-icons">view_week </i> List Buku</a>
                </li>
                <li class="bold"><a href="/siswa" class="waves-effect waves-cyan">
      <i class="material-icons">perm_identity </i> List Siswa</a>
                </li><br>
                <li class="li-hover"><div class="divider"></div></li>
                <li><a href="/"><i class="mdi-hardware-keyboard-backspace"></i> Back To Home </a>
            </ul>
            </aside>
            <!--DataTables example-->
            <div id="table-datatables">
              <div class="row">
                <div class="col s12 m8 l9">
                	<div class="bukupinjam">
                		<h1>Buku Pinjaman</h1>
                		<a href="/buku/create" class="btn">Tambah Buku</a>
                	</div>
                  <table id="data-table-simple" class="responsive-table display striped" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ISBN</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th colspan="2">Opsi</th>
                        </tr>
                    </thead>
                 
                    <tbody>
                    @foreach ($buku as $data)
                        <tr>
                            <td>{{$data->isbn}}</td>
                            <td>{{$data->judul}}</td>
                            <td>{{$data->pengarang}}</td>
                            <td><a href="/buku/{{$data->isbn}}/edit"> <i class="material-icons">mode_edit</i></a></td>
                            <td>
                            <a href="/buku/{{$data->isbn}}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">
                            <i class="material-icons">delete</i>
                            </a>
                            <form action="/buku/{{$data->isbn}}" method="post" id="delete-form" style="display: none;">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<input type="hidden" name="_method" value="delete">
							<input type="submit" value="delete">
							</form>
							</td>
                        </tr>
                     @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
				  <div class="pagging">
				  	{!! $buku->links() !!}
				  </div>
            </div> 

      <!--Import jQuery before materialize.js-->
   <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/materialize/materialize.min.js"></script>
</body>
</html>

