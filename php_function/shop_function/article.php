<?php

function article_affichage (){

    echo "
            <div class='col-md-4'>
				<div class='product-item'>
					<div class='product-thumb'>
						<span class='bage'>Sale</span>
						<img class='img-responsive' src='images/shop/products/product-1.png' alt='product-img' />
						<div class='preview-meta'>
							<ul>
								<li>
									<span  data-toggle='modal' data-target='#product-modal'>
										<i class='tf-ion-ios-search-strong'></i>
									</span>
								</li>
								<li>
			                        <a href='#!' ><i class='tf-ion-ios-heart'></i></a>
								</li>
								<li>
									<a href='#!'><i class='tf-ion-android-cart'></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class='product-content'>
						<h4><a href='product-single.html'>Reef Boardsport</a></h4>
						<p class='price'>20€</p>
					</div>
				</div>
			</div>";

}

?>