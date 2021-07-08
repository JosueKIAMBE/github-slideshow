<?php 

require('config/config.php'); 

$videos=afficher();

?>



<!DOCTYPE html //www.isnpmuana.com><html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>web.isnpmuanda.com</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<img class="logo" src="images/iss..png"/>
      <a class="navbar-brand" href="index.php"><h1>ISNP MUANDA</h1></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Organisation <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Activités</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Opération
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="pages/caisse.php">Inscription</a>
              <a class="dropdown-item" href="social/connexion.php">Connexion</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Voir plus...</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Apropos</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Play video</button><br/>
			<input class="form-control mr-sm-2" type="search" placeholder="Rechercher infos..." aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
        </form>
      </div>
    </nav>
    <section>         
                <?php foreach($videos as $video): ?>
      <div id="entete">
          
		  <div class="carousel-inner">
			  
              <div class="carousel-item active">				  
				<video autoplay="autoplay" class="d-block w-100"src="<?=$video->video ?>" type="video/mp4"  alt="first">
		</video>
				  
			<div class="carousel-caption d-none d-md-block">
                  <h2>P R O M O T I O N   J U S   Z E S T</h2>
                  <p>B o i s s o n   s u c r é e   e n e r g i s s a n t e   e t   r a f r e c h i s s i s a n t e</p>
                </div>
	
              </div>
            </div>
          </div>
		<?php endforeach; ?>
                
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2>INSTITUT SUPERIEUR DE NAVIGATION ET DE PECHE</h2>
            <p>Situé en République Démocratique du Congo dans la Province du Kongo Central,<br/> dans la ville de BOMA à la territoire de Muanda ville cotière du pays</p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-12 text-center">
            <img class="img-fluid" src="images/bat.gif" alt="">
            <h4>Batiment de l'ISNP</h4>
            <h6>Les Locales pour une bonne formation</h6>
          </div>
          <div class="col-md-6 col-12 text-center mt-md-0 mt-2">
            <img class="img-fluid" src="images/recep.gif" alt="">
            <h4>Reception de l'ISNP</h4>
            <h6>Etre bien accueilli et Informer vous</h6>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-md-3 col-6"><h5>SEC AC. ISNP</h5><img class="img-fluid float-right" src="images/dg.gif" alt=""></div>
          <div class="col-md-3 col-6"><H5>DG ISNP</H5><img class="img-fluid float-left" src="images/edt.gif" alt=""></div>
          <div class="col-md-3 col-6 mt-md-0 mt-1"><h5>INFORMATIQUE</h5><img class="img-fluid float-right" src="images/inform.gif" alt=""></div>
          <div class="col-md-3 col-6 mt-md-0 mt-1"><h5>PECHE</h5><img class="img-fluid float-left" src="images/nav.gif" alt=""></div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-3 col-6"><h5>APPARITAIRE ISNP</h5><img class="img-fluid float-right" src="images/SAC.gif" alt=""></div>
          <div class="col-md-3 col-6"><h5>Admin ISNP</h5><img class="img-fluid float-left" src="images/info.gif" alt=""></div>
          <div class="col-md-3 col-6 mt-md-0 mt-1"><h5>SCIENCE INFIRMIERE</h5><img class="img-fluid float-right" src="images/scinf.gif" alt=""></div>
          <div class="col-md-3 col-6 mt-md-0 mt-1"><h5>DROIT</h5><img class="img-fluid float-left" src="images/droit.gif" alt=""></div>
        </div>
      </div>
    </section>
    <hr>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1>ISNP B.P. 54</h1>
            <p>INSTITUT DE MUANDA/KONGO CENTRAL</p>
            <button type="button" class="btn btn-success">Nous découvir...</button>
          </div>
        </div>
      </div>
    </section>
    <hr>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-12">
            <h3 class="text-center">INSTITUT PUBLIC</h3>
            <p>République Démocratique du Congo/ Ministère de l'Enseignelent Supérieur et Universitaire</DEMOCR></p>
          </div>
          <div class="col-md-4 col-12">
            <h3 class="text-center">Notre Contact</h3>
            <address class="text-center">
              <strong>ISNP. Muanda</strong><br>
              Avenue de l'Hôpital Général de Muanda<br>
              N°91308/B<br>
              <abbr title="Phone">Tel : </abbr> (243) 997 031 003 / 827 407 901 <br/>
				<abbr title="e-mail">e-mail : </abbr> isnpmuanda@gmail.com <br/>
            </address>
          </div>
          <div class="col-md-4 col-12">
            <h3 class="text-center">Laissez nous un message ou un commentaire</h3>
            <form>
              <div class="form-group col-12">
                <input type="textarea" class="form-control" id="exampleInputEmail1" placeholder="Message...">
                <button type="submit" class="btn btn-dark mt-2">Envoyer</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Copyright © torche_studio. tout droit reservé.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>