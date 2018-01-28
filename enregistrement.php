<?php
	include('connection.php');

	if (isset($_POST['btnValider'])){
	$sql="INSERT INTO client (nom,prenom,contact,id_commune)
		VALUES ('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['contact']."','".$_POST['commune']."')";
	$result=mysqli_query($link,$sql);
	$_SESSION['cmd']=$data['id'];
	header('location:confirmation.php');
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body class="">
	<div class="container">
		<div class="row">
			<marquee>
			<h1 style="color: purple; font-size: 50px;">
				bienvenue, vous pouvez passer votre commande 
			</h1>
			</marquee>

		</div>
		<div class="row">

					<form action="" method="POST">
						<div class="form-group">
							<label for="nom">Nom</label>
							<input type="text" class="form-control" id="" placeholder="saisissez votre nom" name="nom">
						</div>

						<div class="form-group">
							<label for="prenom">Prenom</label>
							<input type="text" class="form-control" id="" placeholder="saisissez vos prenoms" name="prenom">
							
						</div>
						<div class="form-group">
							<label for="contact">Contact</label>
							<input type="text" class="form-control" id="" placeholder="saisissez votre contact" name="contact">
							
						</div>
						<div class="form-group">
							<label for="">Commune</label>
							<select name="commune" class="form-control">
					<?php
					//recupere toutes les communes dans la bd
					$sqlcommune="SELECT * FROM commune";

					//execute la requete et on la stock dans $reqcommune
					$reqcommune=mysqli_query($link,$sqlcommune);

					//mysqli_fetch_array = permet de tran sformer le resultat $reqcommune en variable de type tableau $datacom

					// la boucle while nous permet de parcourir le tableau $datacom et de recuperer les valeurs de chaques elements du tableau $datacom
					while ($datacom=mysqli_fetch_array($reqcommune)) {
						?>
						<option value="<?php echo $datacom['id'];?>">
						<?php echo $datacom['id'].'-'.$datacom['libelle'];?>
							
						</option>

						<?php
					}
					?>
								
							</select>
						</div>
						
						<div>
							<button type="submit" name="btnValider" class="btn btn-default">valider</button>
						</div>
						
					</form>
			
		</div>
		
	</div>
				
</body>
</html>