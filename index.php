
<!DOCTYPE html>
<html lang='en'>

<?php
$db = new mysqli('localhost','root','','suno');
$resource = $db->query('SELECT * FROM article WHERE populaire = 1');

include 'php_function\head_gen.php'; 
head_gen("SUNO");
?>

<body id='body'>;

<?php
include 'php_function\top_header_gen.php';
top_header_gen();

include 'php_function\navbar_gen.php';
navbar_gen();


echo"
<div class='hero-slider'>
  <div class='slider-item th-fullpage hero-area' style='background-image: url(images/slider/slider-1.jpg);'>
    <div class='container'>
      <div class='row'>
        <div class='col-lg-8 text-center'>
          <h1 data-duration-in='.3' data-animation-in='fadeInUp' data-delay-in='.5'>Préparez-vous pour l'été</h1>
          <a data-duration-in='.3' data-animation-in='fadeInUp' data-delay-in='.8' class='btn' href='shop.php'>Boutique</a>
        </div>
      </div>
    </div>
  </div>
  <div class='slider-item th-fullpage hero-area' style='background-image: url(images/slider/slider-3.jpg);'>
    <div class='container'>
      <div class='row'>
        <div class='col-lg-8 text-left'>
          <h1 data-duration-in='.3' data-animation-in='fadeInUp' data-delay-in='.5'>Les tendances du moment</h1>
          <a data-duration-in='.3' data-animation-in='fadeInUp' data-delay-in='.8' class='btn' href='shop.php'>Achetez maintenant</a>
        </div>
      </div>
    </div>
  </div>
  <div class='slider-item th-fullpage hero-area' style='background-image: url(images/slider/slider-2.jpg);'>
    <div class='container'>
      <div class='row'>
        <div class='col-lg-8 text-right'>
          <h1 data-duration-in='.3' data-animation-in='fadeInUp' data-delay-in='.5'>Accessoires</h1>
          <a data-duration-in='.3' data-animation-in='fadeInUp' data-delay-in='.8' class='btn' href='shop.php'>Parcourir</a>
        </div>
      </div>
    </div>
  </div>
</div>";

echo"

<section class='products section bg-gray'>
	<div class='container'>
		<div class='row'>
			<div class='title text-center'>
				<h2>Populaire en ce moment</h2>
			</div>
		</div>
		<div class='row'>";
			
		while ( $row = $resource->fetch_assoc() ) {

			$id = $row['IDArticle'];
			$var_value = $id;
			$image = $row['Photo'];
			$sexe = $row['Sexe'];
			$categorie = $row['Categorie'];
			$description = $row['Description'];
			$prix = $row['Prix'];

			echo"<div class='col-md-4'>
				<div class='product-item'>
					<div class='product-thumb'>
						<span class='bage'>Top des ventes</span>
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
echo"
		</div>
	</div>
</section>";



include 'php_function\footer_gen.php';
footer_gen();

include 'php_function\script_gen.php';
script_gen();
?>

	</body>
</html>";
