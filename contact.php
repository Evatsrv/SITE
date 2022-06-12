<?php


echo "
<!DOCTYPE html>
<html lang='en'>";

include 'php_function\head_gen.php';
head_gen("Contact");

echo"<body id='body'>";

include 'php_function\top_header_gen.php';
top_header_gen();

include 'php_function\navbar_gen.php';
navbar_gen();


echo"
<section class='page-wrapper'>
	<div class='contact-section'>
		<div class='container'>
			<div class='row' style='margin-left: 33.5%;'>
				<!-- Contact Form -->
				<div class='contact-form col-md-6 ' >
					<form id='contact-form' method='post' action='' role='form'>
					
						<div class='form-group'>
							<input type='text' placeholder='Prenom' class='form-control' name='name' id='name'>
						</div>
						
						<div class='form-group'>
							<input type='email' placeholder='Email' class='form-control' name='email' id='email'>
						</div>
						
						<div class='form-group'>
							<input type='text' placeholder='Objet' class='form-control' name='subject' id='subject'>
						</div>
						
						<div class='form-group'>
							<textarea rows='6' placeholder='Message' class='form-control' name='message' id='message'></textarea>	
						</div>
						
						<div id='mail-success' class='success'>
							Thank you. The Mailman is on His Way :)
						</div>
						
						<div id='mail-fail' class='error'>
							Sorry, don't know what happened. Try later :(
						</div>
						
						<div id='cf-submit'>
							<input type='submit' id='contact-submit' class='btn btn-transparent' value='Envoyer'>
						</div>						
						
					</form>
				</div>

					</div>
					<!--/. End Footer Social Links -->
				</div>
				<!-- / End Contact Details -->
					
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