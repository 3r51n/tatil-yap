<!-- Navbar Menu Start -->
<div class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<a href="#" class="navbar-brand">Tatil <span id="navbar">Yap</span></a>
			
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar_menu">
				<span class="sr-only">Menu</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		
		<div class="collapse navbar-collapse" id="navbar_menu">
			<ul class="nav navbar-nav navbar-right">
				<?php require_once("navbar/mega-dropdown-menu.php"); ?>

				<li><a href="#">Turlar</a></li>
				<li><a href="#">Uçak Bileti</a></li>
				<li><a href="#">Kampanyalar</a></li>
				<li><a href="#" id="login_btn" role="button" data-toggle="modal" data-target="#login-modal">Giriş Yap</a></li>
				<!--
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">

					Dropdown Menu <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul>
				</li>
				-->
				
				
			</ul>
		</div>
		
	</div>
</div>
<!-- Navbar Menu End -->