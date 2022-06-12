<?php


echo "
<!DOCTYPE html>
<html lang='en'>";

include 'php_function\head_gen.php';
head_gen("A PROPOS");

echo"<body id='body'>";

include 'php_function\top_header_gen.php';
top_header_gen();

include 'php_function\navbar_gen.php';
navbar_gen();


echo"
<section class='about section'>
	<div class='container'>
		<div class='row'>
			<div class='col-md-6'>
				<h2 class='mt-40'>A propos de nous</h2>
				<p>Nous sommes une entreprise française créée en 2020, nous travaillons sur ce beau projet depuis 2 ans et sommes très heureux de vous présenter toutes nos collections, toutes différentes les unes des autres.</p>
				<p> Nous sommes une petite équipe de 7 personnes et nous nous consacrons chaque jour à vous offrir le meilleur.</p>
				<p>Notre objectif : nous voulons que chacun se sente bien dans son corps lorsqu'il porte un maillot de bain.</p>
				<a href='contact.html' class='btn btn-main mt-20'>Notre entreprise</a>
			</div>
		</div>
	</div>
</section>
<section class='team-members '>
	<div class='container'>
		<div class='row'>
			<div class='title'><h2>Membres de l'équipe</h2></div>
		</div>
		<div class='row'>
			<div class='col-md-3'>
				<div class='team-member text-center'>
					<img class='img-circle' src='images/team/team-1.'>
					<h4>t'Serstevens Eva</h4>
					<p>Developeur</p>
				</div>
			</div>
			<div class='col-md-3'>
				<div class='team-member text-center'>
					<img class='img-circle' src='images/team/team-2.'>
					<h4>Colinart Paul</h4>
					<p>Developeur</p>
				</div>
			</div>
			<div class='col-md-3'>
				<div class='team-member text-center'>
					<img class='img-circle' src='images/team/team-3.'>
					<h4>Brunet Lucie</h4>
					<p>Manager</p>
				</div>
			</div>
			<div class='col-md-3'>
				<div class='team-member text-center'>
					<img class='img-circle' src='images/team/team-1.'>
					<h4>Caulfuty Line</h4>
					<p>Manager</p>
				</div>
			</div>
		</div>
	</div>
</section>
";



include 'php_function\footer_gen.php';
footer_gen();

include 'php_function\script_gen.php';
script_gen();

echo "</body>
</html>";


?>