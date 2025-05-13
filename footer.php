<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								
								<ul class="footer-links">
									<li><a href="https://www.bing.com/ck/a?!&&p=1d061b5d686c5c24f0c0500dc86ba7da993387042e9b7d066244dcf6f48d957bJmltdHM9MTc0MzI5MjgwMA&ptn=3&ver=2&hsh=4&fclid=3fee532b-6b9e-6642-26ed-46b16a5b67ac&u=a1L21hcHM_Jm1lcGk9MTI3fkRpcmVjdGlvbnN-VW5rbm93bn5EaXJlY3Rpb25fQnV0dG9uJnR5PTAmcnRwPXBvcy4xMS4wMzk4NTc4NjQzNzk4ODNfNzcuMDc0Mzk0MjI2MDc0MjJfX1NyaSUyMFNoYWt0aGklMjBJbnN0aXR1dGUlMjBvZiUyMEVuZ2luZWVyaW5nJTIwYW5kJTIwVGVjaG5vbG9neV9fZV9-Jm1vZGU9ZCZ2PTImc1Y9MQ&ntb=1"target="_blank"><i class="fa fa-map-marker"></i>Sri Shakthi Nagar, L & T By - Pass,
									Chinniyampalayam Post, Coimbatore - 62.</a></li>
									<li><a href="tel:7824975988"><i class="fa fa-phone"></i>7824975988</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>pugal@gmail.com</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 text-center" style="margin-top:80px;">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<!-- <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li> -->
								<!-- <li><a href="#"><i class="fa fa-cc-discover"></i></a></li> -->
								<!-- <li><a href="#"><i class="fa fa-cc-amex"></i></a></li> -->
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
							
							</span>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Mobiles</a></li>
									<li><a href="#">Men</a></li>
									<li><a href="#">Women</a></li>
									<li><a href="#">Kids</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->
                

			<!-- bottom footer -->
			
			<!-- /bottom footer -->
		</footer>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/actions.js"></script>
		<script src="js/sweetalert.min"></script>
		<script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
		<script>var c = 0;
        function menu(){
          if(c % 2 == 0) {
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";    
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";    
            c++; 
              }else{
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";        
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";        
            c++;
              }
        }
           
		
</script>
    <script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>
	
