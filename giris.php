<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Anasayfa</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/a.jpg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/6b3e98aeb2.js" crossorigin="anonymous"></script>
  
  </head>
  <body>
    
    <!-- hazır -->
  <!-- menü kısmı başlanıgıcı -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top YaziTipi1">
    <div class="container-fluid">
      <a class="navbar-brand " href=index.html>Aytuğ Özkaya</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=index.html>Ana Sayfa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=benkimim.html  >Ben Kimim?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sehrim.html">Memleketim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mirasimiz.html">Bursaspor</a>
          </li><li class="nav-item">
            <a class="nav-link" href="cv.html">CV</a>
          </li>
          </li><li class="nav-item">
            <a class="nav-link" href="iletisim.html">İletişim</a>
          </li>
          <li class="nav-item">
			<a href="giris.php" class="nav-link active  text-white">
	      	<i class="fas fa-sign-in-alt"></i>
	    	</a></li>
        </ul>
      </div>
    </div>
  </nav>   
  <!-- menü bitiş -->

  <header>

		<div class="bg-secondary text-dark jumbotron  ">

			<div class="container header">

				<div class="col-md-12 px-0">
					<h1 class="display-4 font-italic text-center">
						Giriş Ekranı
					</h1>		
          <p class="lead my-3">

					
					</p>
				</div>

			</div>

		</div>

	</header>
  <br><br><br><br><br><br><br>
    
  <main>

<div class="container">
    
    <form action="GirisOnay.php" method="POST">

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" onKeyUp="kontrol()" class="form-control" placeholder="Email 'email@mail.com'" required="required">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Şifre 'Password'" required="required">
        </div>
        <br>
        <button class="btn btn btn-info" type="submit">Gönder</button>

        <br><br><br>
        
    </form>

</div>

</main>


    
    
    
 

  <footer class="py-3 text-white   text-center clr">
		<p>Web-Teknolojileri-Projesi Aytuğ Özkaya 2021</p>
    <p><a href="https://github.com/aaytugozkaya?tab=repositories"  class="Link"><i class="fab fa-github"></i> Github</a></p>
	</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
   
  
   
  </body>
</html>