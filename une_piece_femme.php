<?php

$db = new mysqli('localhost','root','','suno');
$resource = $db->query('SELECT * FROM article WHERE Categorie = "1piece"');

echo "
<!DOCTYPE html>
<html lang='en'>";

include 'php_function\head_gen.php';
head_gen("FEMME");

echo"<body id='body'>";

include 'php_function\top_header_gen.php';
top_header_gen();

include 'php_function\navbar_gen.php';
navbar_gen();

echo"<!-- IL FAUT AJOUTER DES ARTICLES + CHANGER LES TITRES & PRIX -->    
    
<section class='products section'>
	<div class='container'>
		<div class='row'>";
		
while ( $row = $resource->fetch_assoc() ) {

	$id = $row['IDArticle'];
	$var_value = $id;
	$image = $row['Photo'];
	$sexe = $row['Sexe'];
	$categorie = $row['Categorie'];
	$description = $row['Description'];
	$prix = $row['Prix'];
	

	echo "<div class='col-md-4'>
		<div class='product-item'>
			<div class='product-thumb'>

				<img class='img-responsive' src='images/shop/products/$image.png' alt='product-img' />
				<div class='preview-meta'>
					<ul>
					<li>
					<a href ='product-single.php?varname=$var_value'>
					<span data-toggle='modal'>
						<i class='tf-ion-ios-search-strong'></i>
					</span>
					</a>
					</li>
					</ul>
				  </div>
			</div>
			<div class='product-content'>
				<h4><a href='product-single.php?varname=$var_value'>$description</a></h4>
				<p class='price'>$prix €</p>
			</div>
		</div>
	</div>";

}

$resource->free();
$db->close();	
			
		
		
echo "	</div>	
	</div>
</section>";



include 'php_function\footer_gen.php';
footer_gen();

include 'php_function\script_gen.php';
script_gen();

echo "</body>
</html>";


?>