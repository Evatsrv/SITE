<?php


echo "
<!DOCTYPE html>
<html lang='en'>";

include 'php_function\head_gen.php';
head_gen("PANIER");

echo"<body id='body'>";

include 'php_function\top_header_gen.php';
top_header_gen();

include 'php_function\navbar_gen.php';
navbar_gen();


echo"
<div class='page-wrapper'>
  <div class='cart shopping'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-8 col-md-offset-2'>
          <div class='block'>
            <div class='product-list'>
              <form method='post'>
                <table class='table'>
                  <thead>
                    <tr>
                      <th class=''>Produit</th>
                      <th class=''>Prix</th>
                      <th class=''></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class=''>
                      <td class=''>
                        <div class='product-info'>
                          <img width='80' src='images/shop/cart/cart-1.png' alt='' />
                          <a href='#!'>Maillot 2 pieces</a>
                        </div>
                      </td>
                      <td class=''>35,99€</td>
                      <td class=''>
                        <a class='product-remove' href='#!'>Supprimer</a>
                      </td>
                    </tr>
                    <tr class=''>
                      <td class=''>
                        <div class='product-info'>
                          <img width='80' src='images/shop/cart/cart-2.png' alt='' />
                          <a href='#!'>Maillot 2 pieces</a>
                        </div>
                      </td>
                      <td class=''>24,99€</td>
                      <td class=''>
                        <a class='product-remove' href='#!'>Supprimer</a>
                      </td>
                    </tr>
                    <tr class=''>
                      <td class=''>
                        <div class='product-info'>
                          <img width='80' src='images/shop/cart/cart-3.png' alt='' />
                          <a href='#!'>Short de bain</a>
                        </div>
                      </td>
                      <td class=''>25,99€</td>
                      <td class=''>
                        <a class='product-remove' href='#!'>Supprimer</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <a  class='btn btn-main pull-right'>Payer</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

";



include 'php_function\footer_gen.php';
footer_gen();

include 'php_function\script_gen.php';
script_gen();

echo "</body>
</html>";


?>