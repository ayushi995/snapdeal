<!DOCTYPE html>
<html lang="en">
<?php include 'includes/css.php' ?>
<body>
 <!---section-one-help-center--->
<section class="section-one_hp">
	<div class="my-container-one_hp">
			<div class="header-one_hp">
				<nav class="navbar navbar-expand-sm  navbar-dark">
				<div class="navbar-brand" href="index.php">
					<a href="index.php"><img src="asset/snapdel-logo.png" alt="Logo" style="width:100%; max-width:168px;"></a>
				</div>
				<div class="header-ul_hp">
					<ul class="nav justify-content-end ">
				<li class="nav-item">
					<a class="nav-link cart_a" href="#"><span>Cart</span><i class="fas fa-shopping-cart"></i></a>
				</li>
				<li class="nav-item sign-in_a" id="dropdown">
					<a class="nav-link" href="#" id="clickcolor"><span>Sign In</span><i class="fas fa-user signup"></i></a>
					  <div id="dropdown-menu" class="adc">
							<a href="#!" class="dropdown-item">
							  <i class="far fa-user"></i>
							  <span>Your Account</span>
							</a>
							<a href="#!" class="dropdown-item">
							  <i class="far fa-envelope"></i>
							  <span>Your Orders</span>
							</a>
							<a href="#!" class="dropdown-item">
							  <i class="far fa-heart"></i>
							  <span>Shortlist</span>
							</a>
							<a href="#!" class="dropdown-item">
							  <i class="far fa-hand-peace"></i>
							  <span>SD Cash</span>
							</a>
							<div class="dropdown-divider"></div>
							<a href="logout.php" class="dropdown-item">
							  <i class="ni ni-user-run"></i>
							  <span>Logout</span>
							</a>
					</div>
				</li>
			</ul>
				</div>
				</nav>
			</div>
			<div class="header-two_hp">
				<div class="header-two-logo">
					<a href="index.php"><i class="fas fa-home"></i></a>
					<span class="logo-line_hp"></span>
					<span class="logo-text_hp"><a href="helpcenter.php">Help Center</a></span>
				</div>
				<div class="header-two-maddle_hp">How can we help you?</div>
				<div style="clear:both"></div>
			</div>
			<div class="header-three_hp">
				<input type="text" placeholder="Please type your query here.eg.I want to track my order" />
				<button><i class="fas fa-chevron-right"></i></button>
			</div>
	</div>
</section>

<!---section-two-help-center--->
<section class="section-two_hp">
	<div class="my-container-two_hp">
		<div class="one-ul_hp">
			<ul>
				<li><a href="#">Home</a></li>
				<li>/</li>
				<li>Help Center</li>
			</ul>
		</div>
	</div>
</section>

<!---section-three-help-center--->
<section class="section-three_hp">
	<div class="my-container-two_hp">
		<div class="three-center_hp">
			<a href="#">LOGIN</a>
			<div>Login to see your order details, track order, cancel order return / replace order etc.</div>
		</div>
		<div class="three-two-div_hp">
		<div class="three-heading_hp">Top FAQs</div>
			<div class="row">
				<div class="col-md-6">
					<div class="three-two-inner-div_hp">
						<ul>
							<li><a href="#">How can I check my order status?</a></li>
							<li><a href="#">How can I return/replace an item?</a></li>
							<li><a href="#">What are the diffrent modes of payment available?</a></li>
							<li><a href="#">What is Questions & Answers?</a></li>
							<li><a href="#">What is Snapcash?</a></li>
							<li><a href="#">I have received a call/SMS/email asking for money</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="three-two-inner-div_hp">
						<ul>
							<li><a href="#">How can I cancel my order?</a></li>
							<li><a href="#">When can I expect refund for my returned item?</a></li>
							<li><a href="#">I don't remember my password.Help!</a></li>
							<li><a href="#">What are digital products?</a></li>
							<li><a href="#">How to raise query/complaint?</a></li>
							<li><a href="#">I want to sell my items on Snapdeal.Who do I get in touch with?</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'includes/fotter.php'; ?>
<?php include 'includes/js.php'; ?>
</body>
</html>