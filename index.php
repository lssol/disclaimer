<?php
if(!isset($_COOKIE['major'])) {
    header('location : disclaimer.php');
} else {
?>

<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Disclaimer</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />

  </head>
  <body>
	<div class="row">
	  <div class="small-6 small-centered columns mainBlock">

		<p class="text-center"><img src="img/logo.jpg" alt="VinaVendre.com"/></>
		<p class="lead">Pour visiter ce site, vous devez être en âge légal de consommer de l'alcool dans votre pays de résidence.</p>

		<form action="#">
			<p>
				<input id="major" type="checkbox" onclick="enableButton()"><label for="major"> Je certifie avoir plus de 18 ans</label><br/>
				<input id="checkbox2" type="checkbox" checked><label for="checkbox2"> Se souvenir de moi</label><br>
			</p>
			<p class="text-center">
				<button id="allerSite" type="button" class="button disabled">Aller sur le site</button>
			</p>
		</form>
	  </div>
	</div>


</body>
</html>
<?php
}
?>