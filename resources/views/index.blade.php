<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>Perpustakaan</title>
    <link rel="shortcut icon" href="/img/icon.png">
    <link rel="stylesheet" href="/css/bootstrap.css" async defer>
    <link rel="stylesheet" href="/css/font-awesome.min.css" async defer>
    <link rel="stylesheet" href="/css/merlin.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/tilted/component.css">
    <link rel="stylesheet" href="/css/tilted/demo.css">
    <link rel="stylesheet" href="/css/tilted/normalize.css">
    <script src="/js/tilted/modernizr.custom.js"></script>

  </head>
  <body>
    <div class="loader">
      <div class="fading-line"></div>
    </div>
    <section id="home">
<div class="slideshow" id="slideshow">
        <ol class="slides">
          <li class="current">
            <div class="description">
              <h2>Horror Books</h2> 
              <p>Butuh rekomendasi untuk buku bergenre <code>Horror?</code>,Baca Buku Berikut ini dan Rasakan sensasi menyeramkan nya.</p>
            </div>
            <div class="tiltview row">
              <a href="#"><img src="/img/books/caraval.jpg"/></a>
              <a href="#"><img src="/img/books/carve.jpg"/></a>
            </div>
          </li>
          <li>
            <div class="description">
              <h2>Action Books</h2>
              <p>Rekomendasi Untuk Buku Bergenre <code>Action</code> Anda Bisa Check Langsung Dengan Mengklik Gambar Disamping. </p>
            </div>
            <div class="tiltview row">
              <a href="#"><img src="/img/books/frostblood.jpg"/></a>
              <a href="#"><img src="/img/books/norse.jpg"/></a>
            </div>
          </li>
          <li>
            <div class="description">
              <h2>Romantic Books</h2>
              <p>Merasa bosan dengan hidup anda? anda dapat membaca buku bergenre <code> Romantis</code> agar hidup anda lebih berwarna.</p>
            </div>
            <div class="tiltview row">
              <a href="#"><img src="/img/books/perahukertas.jpg"/></a>
              <a href="#"><img src="/img/books/somekind.jpg"/></a>
            </div>
          </li>
          <li>
            <div class="description">
              <h2>Fantasi Books</h2>
              <p>Salurkan Imajinasi Anda Dengan Membaca Buku Bergenre <code>Fantasi</code> yang dapat membuka pikiran anda lebih luas dari sebelum nya.</p>
            </div>
            <div class="tiltview row windwitch">
              <a href="#"><img src="/img/books/windwitch.jpg"/></a>
            </div>
          </li>
        
        </ol>
      </div><!-- /slideshow -->
    </section>
    <div id="navbar-top">
      <nav class="navbar navbar-default navbar-static" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand nav-external" href="#home">perpustakaan</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active">
                <a href="#home">Home</a>
              </li>
              <li>
                <a href="#services">Recomendation</a>
              </li>
              <li>
                <a href="/login">Borrow Now!</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

        <section id="services" class="page">
      <div class="container">
        <div class="content text-center">
          <div class="heading">
            <h2><i class="fa fa-book fa-1x"></i> Buku Populer Tahun ini</h2>
            <div class="border"></div>
            <p>Kamu bisa melihat beberapa buku yang sedang populer di tahun ini.</p><br><br>
          </div>
          <div class="row">
            <div class="col-lg-4 service">
            <div class="zoom-effect">
              <img src="/img/books/carve.jpg" width="200px" height="250px">
            </div>
              <h3><a href="#">CARVE THE MARK</a></h3>
              <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            </div>
            <div class="col-lg-4 service" >
            <div class="zoom-effect">
              <img src="/img/books/caraval.jpg" width="200px" height="250px">
            </div>
              <h3><a href="#">CARAVAL</a></h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lau dantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.</p>
            </div>
            <div class="col-lg-4 service">
            <div class="zoom-effect">
              <img src="/img/books/windwitch.jpg" width="200px" height="250px">
            </div>
              <h3><a href="#">WINDWITCH</a></h3>
              <p>Aliquam aliquet, est a ullamcorper condimentum, tellus nulla fringilla elit, a iaculis nulla turpis sed wisi. Fusce volutpat. Etiam sodales ante id nunc. Proin ornare dignissim lacus.</p>
          </div>
        </div>
      </div>
    </section>
  
      

    <!-- Javascript -->
    <script src="/js/tilted/classie.js"></script>
    <script src="/js/tilted/tiltSlider.js"></script>
    <script>
      new TiltSlider( document.getElementById( 'slideshow' ) );
    </script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.nav.min.js"></script>
    <script src="/js/script.js"></script>

  </body>
</html>
