<<<<<<< HEAD

<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ananda Rauf Maududi"/>
    <meta name=keywords" content="Personal profile,personal profile,website personal profile,Jasa web,jasa professional,jasa web, Jasa Software Development,Software Development,Konsultan IT,Konsultasi IT,Ananda Rauf Maududi,Rauf,Aditya Yusuf,Iqbal Nugraha,Fachri Affif Valensyah,Valentina Febrianti"/>
    <meta name="description" content="Website personal profile dikembangkan oleh Ananda Rauf Maududi dan website profile ini didukung oleh anggota kelompok 6 yaitu Aditya Yusuf,Iqbal Nugraha,Fachri Affif Valensyah,Valentina Febrianti.Website ini berisikan untuk kerjasama,pesan jasa professional,jasa web,jasa software development,mencari konsultan it,dan mencari kandidat terbaru untuk perusahaan"/>
    <title>Website Personal Profile - Kelompok 6</title>

  
    <link rel="shortcut icon" type="image" href="assets/img/search_profile.png">
    <link rel="canonical" href="index.php"/>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    
  </head>
  <body>
    <script>
    // disable right click
    document.addEventListener('contextmenu', event => event.preventDefault());

    document.onkeydown = function (e) {

        // disable F12 key
        if(e.keyCode == 123) {
            return false;
        }

        // disable I key
        if(e.ctrlKey && e.shiftKey && e.keyCode == 73){
            return false;
        }

        // disable J key
        if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {
            return false;
        }

        // disable U key
        if(e.ctrlKey && e.keyCode == 85) {
            return false;
        }
    }

</script>
  
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <a href="index.php" class="navbar-brand page-scroll">Ananda Rauf Maududi</a>
              <a href="adit.php" class="navbar-brand page-scroll">Aditya Yusuf</a>
              <a href="iqbal.php" class="navbar-brand page-scroll">Iqbal Nugraha</a>
              <a href="valen.php" class="navbar-brand page-scroll">Valentina Febrianti</a>
              <a href="fachri.php" class="navbar-brand page-scroll">Fachri Affif Valensyah</a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#about" class="page-scroll">Tentang Saya</a></li>
              <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
              <li><a href="#contact" class="page-scroll">Kontak</a></li>
            </ul>
          </div>

        </div>
      </nav>
  
  
    <div class="jumbotron text-center">
      <img src="assets/img/valen.jpeg" class="img-circle">
      <h1>Valentina Febrianti</h1>
      <p> Mahasiswa Teknologi Informasi Universitas Bina Sarana Informatika</p>
    </div>
  

  >
  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">Tentang Saya</h2>
          <hr>
        </div> 
      </div>

      <div class="row">
        <div class="col-sm-5 col-sm-offset-1">
        <blockquote>
          <p>Perkenalkan saya Valentina Febrianti,Mahasiswa Teknologi Informasi semester 6 di Universitas Bina Sarana Informatika</p></blockquote>
        </div>
        <div class="col-sm-5">
        <blockquote>
          <p>
            Apabila Ibu/Bapak Perusahaan mencari seorang kandidat baru untuk Perusahaan dibidang mana saja, dan untuk menjalin kerjasama bisa hubungi saya dengan mengisi formulir kontak. <br><br>Terima kasih.</br></br>Hormat saya,<br>Adita Yusup<br>
          </p>  
        </blockquote>
        </div>
      </div>
    </div>
  </section>
 
  <section class="portfolio" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2>Portfolio</h2>
        <hr>
      </div>
    </div>

    <div class="row">
    <!-- Thumbnail Gambar -->

      <div class="col-sm-4">
        <a href="https//www.instagram.com/adityaysp9" class="thumbnail">
          <img src="assets/img/chat.png">
        </a>       
      </div>
      
      
      <div class="col-sm-4">
        <a href="https//www.instagram.com/adityaysp9" class="thumbnail">
          <img src="assets/img/instagram.png">
        </a>       
      </div>
          </div>
  </div>
  </section>

  <section class="contact" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Kontak</h2>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <form action="tambahdata_form_hire.php" method="post">
            
            <div class="form-grup">
              <label for="nama">Nama</label>
              <input required="required" type="text" name="name_client" class="form-control" placeholder="Masukan Nama">
            </div>
            <div class="form-grup">
              <label for="email">Email</label>
              <input required="required" type="email" name="email" class="form-control" placeholder="Masukan Email">
            </div>
            <div class="form-grup">
              <label for="telp">No. Telp</label>
              <input required="required" type="tel" name="phone_number" class="form-control" placeholder="Masukan No. Telepon">
            </div>
            <div class="form-grup">
              <label for="telp">Subject</label>
              <input required="required" type="tel" name="subject_hire" class="form-control" placeholder="Masukan Subject">
            </div>
            <div class="form-grup">
              <label for="pesan">Pesan</label>
              <textarea name=message_hire class="form-control" rows="10" placeholder="Masukan Pesan"></textarea>
            </div>

            <button type="submit" class="btn btn-danger">Kirim Pesan</button>
          </form>
        </div>
      </div>  
    </div> 
  </section>
<!-- Akhir contact -->

<!-- Footer -->
  <footer>
    <dic class="container text-center">
      <div class="row">
        <div class="col-sm-12">
          <p> &copy; Copyright ©2022 by Kelompok 6 | Development by <a href="https://instagram.com/anandaraufm" target="_blank">Ananda Rauf Maududi</a></p>
        </div>
      </div>
    </dic>
  </footer>

<!-- Akhir Footer -->

  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="assets/js/script.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
  </body>

</html>

=======

<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ananda Rauf Maududi"/>
    <meta name=keywords" content="Personal profile,personal profile,website personal profile,Jasa web,jasa professional,jasa web, Jasa Software Development,Software Development,Konsultan IT,Konsultasi IT,Ananda Rauf Maududi,Rauf,Aditya Yusuf,Iqbal Nugraha,Fachri Affif Valensyah,Valentina Febrianti"/>
    <meta name="description" content="Website personal profile dikembangkan oleh Ananda Rauf Maududi dan website profile ini didukung oleh anggota kelompok 6 yaitu Aditya Yusuf,Iqbal Nugraha,Fachri Affif Valensyah,Valentina Febrianti.Website ini berisikan untuk kerjasama,pesan jasa professional,jasa web,jasa software development,mencari konsultan it,dan mencari kandidat terbaru untuk perusahaan"/>
    <title>Website Personal Profile - Kelompok 6</title>

  
    <link rel="shortcut icon" type="image" href="assets/img/search_profile.png">
    <link rel="canonical" href="index.php"/>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    
  </head>
  <body>
    <script>
    // disable right click
    document.addEventListener('contextmenu', event => event.preventDefault());

    document.onkeydown = function (e) {

        // disable F12 key
        if(e.keyCode == 123) {
            return false;
        }

        // disable I key
        if(e.ctrlKey && e.shiftKey && e.keyCode == 73){
            return false;
        }

        // disable J key
        if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {
            return false;
        }

        // disable U key
        if(e.ctrlKey && e.keyCode == 85) {
            return false;
        }
    }

</script>
  
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <a href="index.php" class="navbar-brand page-scroll">Ananda Rauf Maududi</a>
              <a href="adit.php" class="navbar-brand page-scroll">Aditya Yusuf</a>
              <a href="iqbal.php" class="navbar-brand page-scroll">Iqbal Nugraha</a>
              <a href="valen.php" class="navbar-brand page-scroll">Valentina Febrianti</a>
              <a href="fachri.php" class="navbar-brand page-scroll">Fachri Affif Valensyah</a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#about" class="page-scroll">Tentang Saya</a></li>
              <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
              <li><a href="#contact" class="page-scroll">Kontak</a></li>
            </ul>
          </div>

        </div>
      </nav>
  
  
    <div class="jumbotron text-center">
      <img src="assets/img/valen.jpeg" class="img-circle">
      <h1>Valentina Febrianti</h1>
      <p> Mahasiswa Teknologi Informasi Universitas Bina Sarana Informatika</p>
    </div>
  

  >
  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">Tentang Saya</h2>
          <hr>
        </div> 
      </div>

      <div class="row">
        <div class="col-sm-5 col-sm-offset-1">
        <blockquote>
          <p>Perkenalkan saya Valentina Febrianti,Mahasiswa Teknologi Informasi semester 6 di Universitas Bina Sarana Informatika</p></blockquote>
        </div>
        <div class="col-sm-5">
        <blockquote>
          <p>
            Apabila Ibu/Bapak Perusahaan mencari seorang kandidat baru untuk Perusahaan dibidang mana saja, dan untuk menjalin kerjasama bisa hubungi saya dengan mengisi formulir kontak. <br><br>Terima kasih.</br></br>Hormat saya,<br>Adita Yusup<br>
          </p>  
        </blockquote>
        </div>
      </div>
    </div>
  </section>
 
  <section class="portfolio" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2>Portfolio</h2>
        <hr>
      </div>
    </div>

    <div class="row">
    <!-- Thumbnail Gambar -->

      <div class="col-sm-4">
        <a href="https//www.instagram.com/adityaysp9" class="thumbnail">
          <img src="assets/img/chat.png">
        </a>       
      </div>
      
      
      <div class="col-sm-4">
        <a href="https//www.instagram.com/adityaysp9" class="thumbnail">
          <img src="assets/img/instagram.png">
        </a>       
      </div>
          </div>
  </div>
  </section>

  <section class="contact" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Kontak</h2>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <form action="tambahdata_form_hire.php" method="post">
            
            <div class="form-grup">
              <label for="nama">Nama</label>
              <input required="required" type="text" name="name_client" class="form-control" placeholder="Masukan Nama">
            </div>
            <div class="form-grup">
              <label for="email">Email</label>
              <input required="required" type="email" name="email" class="form-control" placeholder="Masukan Email">
            </div>
            <div class="form-grup">
              <label for="telp">No. Telp</label>
              <input required="required" type="tel" name="phone_number" class="form-control" placeholder="Masukan No. Telepon">
            </div>
            <div class="form-grup">
              <label for="telp">Subject</label>
              <input required="required" type="tel" name="subject_hire" class="form-control" placeholder="Masukan Subject">
            </div>
            <div class="form-grup">
              <label for="pesan">Pesan</label>
              <textarea name=message_hire class="form-control" rows="10" placeholder="Masukan Pesan"></textarea>
            </div>

            <button type="submit" class="btn btn-danger">Kirim Pesan</button>
          </form>
        </div>
      </div>  
    </div> 
  </section>
<!-- Akhir contact -->

<!-- Footer -->
  <footer>
    <dic class="container text-center">
      <div class="row">
        <div class="col-sm-12">
          <p> &copy; Copyright ©2022 by Kelompok 6 | Development by <a href="https://instagram.com/anandaraufm" target="_blank">Ananda Rauf Maududi</a></p>
        </div>
      </div>
    </dic>
  </footer>

<!-- Akhir Footer -->

  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="assets/js/script.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
  </body>

</html>

>>>>>>> 9178c31c4c7cb2c018ce3279934684ae751b64cf
