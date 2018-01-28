<?php include('connection.php') ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Food Store</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		
			<div class="container">

		<div class="row">
			
			<div class="col-md-12">
				
				<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
					<div class="container">
						<a class="navbar-brand" href="index.php">Food Store</a>
						<ul class="nav navbar-nav">
							<li class="active">
								<a href="index.php">Accueil</a>
							</li>
							<li>
								<a href="#">Tous les plats</a>
							</li>
						</ul>
					</div>
				</nav>

			</div>
		</div>

		<div class="row">
			
			<div class="col-md-12">
				
				<div id="carousel-id" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel-id" data-slide-to="0" class=""></li>
						<li data-target="#carousel-id" data-slide-to="1" class=""></li>
						<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item">
							<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="img/slide5.jpg" width="1280" height="853">
							<div class="container">
								<div class="carousel-caption">
									<h1>Plat Africain</h1>
									<p>De l'alloco & Du Poulet Fris</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Voir plus de plats</a></p>
								</div>
							</div>
						</div>
						<div class="item">
							<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="img/slide2.jpg">
							<div class="container">
								<div class="carousel-caption">
									<h1>Plat Européen</h1>
									<p>Sandwish</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Voir plus de plats</a></p>
								</div>
							</div>
						</div>
						<div class="item active">
							<img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="img/slide1.jpg">
							<div class="container">
								<div class="carousel-caption">
									<h1>Plat Americain</h1>
									<p>Big Burger</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Voir plus de plats</a></p>
								</div>
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>


			</div>
		</div>
		<br>

		<div class="row">
			
			<div class="col-md-12">
				<h1 class="text-center text-danger"> Differents Plats & Cocktail</h1>
				
	<div class="container" id="tourpackages-carousel">
      
      <div class="row">
        
        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/slide4.jpg" alt="">
              <div class="caption">
                <h4>Thumbnail label</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                <p><a href="#" class="btn btn-info btn-xs" role="button">Voir Plus</a> <a href="enregistrement.php" class="btn btn-default btn-xs" role="button">Commander</a></p>
            </div>
          </div>
        </div>

        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/slide3.jpg" alt="">
              <div class="caption">
                <h4>Thumbnail label</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                <p><a href="#" class="btn btn-info btn-xs" role="button">Voir Plus</a> <a href="enregistrement.php" class="btn btn-default btn-xs" role="button">Commander</a></p>
            </div>
          </div>
        </div>

        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/m3.jpg" alt="">
              <div class="caption">
                <h4>Thumbnail label</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                <p><a href="#" class="btn btn-info btn-xs" role="button">Voir Plus</a> <a href="enregistrement.php" class="btn btn-default btn-xs" role="button">Commander</a></p>
            </div>
          </div>
        </div>

        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/m1.jpg" alt="">
              <div class="caption">
                <h4>Thumbnail label</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                <p><a href="#" class="btn btn-info btn-xs" role="button">Voir Plus</a> <a href="enregistrement.php" class="btn btn-default btn-xs" role="button">Commander</a></p>
            </div>
          </div>
        </div>
        
      </div><!-- End row -->
      
    </div><!-- End container -->

    <div class="container" id="tourpackages-carousel">
      
      <div class="row">
        
        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/m4.jpg" alt="">
              <div class="caption">
                <h4>Thumbnail label</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                <p><a href="#" class="btn btn-info btn-xs" role="button">Voir Plus</a> <a href="enregistrement.php" class="btn btn-default btn-xs" role="button">Commander</a></p>
            </div>
          </div>
        </div>

        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/slide5.jpg" alt="">
              <div class="caption">
                <h4>Thumbnail label</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                <p><a href="#" class="btn btn-info btn-xs" role="button">Voir Plus</a> <a href="enregistrement.php" class="btn btn-default btn-xs" role="button">Commander</a></p>
            </div>
          </div>
        </div>

        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/m2.jpg" alt="">
              <div class="caption">
                <h4>Thumbnail label</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                <p><a href="#" class="btn btn-info btn-xs" role="button">Voir Plus</a> <a href="enregistrement.php" class="btn btn-default btn-xs" role="button">Commander</a></p>
            </div>
          </div>
        </div>

        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/foufou.jpg" alt="">
              <div class="caption">
                <h4>Thumbnail label</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                <p><a href="#" class="btn btn-info btn-xs" role="button">Voir Plus</a> <a href="enregistrement.php" class="btn btn-default btn-xs" role="button">Commander</a></p>
            </div>
          </div>
        </div>
        
      </div><!-- End row -->
      
    </div><!-- End container -->

			</div>

		</div>
		
</div>

		<!-- jQuery -->
		<script src="js/jquery-3.2.1.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>