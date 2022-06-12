<?php
$value = $_GET['varname'];
$db = new mysqli('localhost','root','','suno');
$resource = $db->query('SELECT * FROM article WHERE IDArticle ='.$value.'');

while ( $row = $resource->fetch_assoc() ) {
	
	$id = $row['IDArticle'];
	$image = $row['Photo'];
	$sexe = $row['Sexe'];
	$categorie = $row['Categorie'];
	$description = $row['Description'];
	$prix = $row['Prix'];

}

echo "
<!DOCTYPE html>
<html lang='en'>";

include 'php_function\head_gen.php';
head_gen('SUNO');

echo"<body id='body'>";

include 'php_function\top_header_gen.php';
top_header_gen();

include 'php_function\navbar_gen.php';
navbar_gen();

echo"
<section class='single-product'>
	<div class='container'>
		<div class='row mt-20'>
			<div class='col-md-5'>
				<div class='single-product-slider'>
					<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
						<div class='carousel-outer'>
							<!-- me art lab slider -->
							<div class='carousel-inner '>
								<div class='item active'>
									<img src='images/shop/products/$image.png'  />
								</div>							
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class='col-md-7'>
				<div class='single-product-details'>
					<h2>$description</h2>
					<p class='product-price'>$prix €</p>
					
					
					<div class='product-size'>
						<span>Taille:</span>
						<select class='form-control'>
							<option>S</option>
							<option>M</option>
							<option>L</option>
							<option>XL</option>
						</select>
					</div>
					<div class='product-quantity'>
						<span>Quantite:</span>
						<div class='product-quantity-slider'>
							<input id='product-quantity' type='text' value='0' name='product-quantity'>
						</div>
					</div>
					
					<a href='cart.html' class='btn btn-main mt-20'>Ajouter au panier</a>
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