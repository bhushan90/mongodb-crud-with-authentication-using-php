<?php require_once('inc/config.php'); ?>
<?php require_once('partials/header.php'); ?>

<div class="container">
	<div id="products-carousel" class="carousel slide carousel-fade" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#products-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#products-carousel" data-slide-to="1"></li>
			<li data-target="#products-carousel" data-slide-to="2"></li>
			<li data-target="#products-carousel" data-slide-to="3"></li>
		</ol>

		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="http://placehold.it/1440x600/111111?text=Banner+Image+One" alt="">
			</div>
			<div class="item">
				<img src="http://placehold.it/1440x600/111111?text=Banner+Image+Two" alt="">
			</div>
			<div class="item">
				<img src="http://placehold.it/1440x600/111111?text=Banner+Image+Three" alt="">
			</div>
			<div class="item">
				<img src="http://placehold.it/1440x600/111111?text=Banner+Image+Four" alt="">
			</div>
		</div>

		<a class="left carousel-control" href="#products-carousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#products-carousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<h3><i class="fa fa-check-circle"></i> Bootstrap 3 Built</h3>
				<p>The 'Modern Business' website template by <a href="http://startbootstrap.com">Start Bootstrap</a> is built with <a href="http://getbootstrap.com">Bootstrap 3</a>. Make sure you're up to date with latest Bootstrap documentation!</p>
			</div>
			<div class="col-lg-4 col-md-4">
				<h3><i class="fa fa-pencil"></i> Ready to Style &amp; Edit</h3>
				<p>You're ready to go with this pre-built page structure, now all you need to do is add your own custom stylings! You can see some free themes over at <a href="http://bootswatch.com">Bootswatch</a>, or come up with your own using <a href="http://getbootstrap.com/customize/">the Bootstrap customizer</a>!</p>
			</div>
			<div class="col-lg-4 col-md-4">
				<h3><i class="fa fa-folder-open"></i> Many Page Options</h3>
				<p>This template features many common pages that you might see on a business website. Pages include: about, contact, portfolio variations, blog, pricing, FAQ, 404, services, and general multi-purpose pages.</p>
			</div>
		</div>
	</div>
</div>

<div class="section-colored text-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>Modern Business: A Clean &amp; Simple Full Website Template by Start Bootstrap</h2>
				<p>A complete website design featuring various single page templates from Start Bootstraps library of free HTML starter templates.</p>
				<hr>
			</div>
		</div>
	</div>
</div>

<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Display Some of Your Featured Products Here</h2>
				<hr>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<a href="portfolio-item.html">
					<img class="img-responsive ml-t" src="http://placehold.it/700x450?text=Product+1">
				</a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<a href="portfolio-item.html">
					<img class="img-responsive ml-t" src="http://placehold.it/700x450?text=Product+2">
				</a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<a href="portfolio-item.html">
					<img class="img-responsive ml-t" src="http://placehold.it/700x450?text=Product+3">
				</a>
			</div>
			
		</div>
	</div>
</div>

<div class="section-colored">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<h2>Modern Business Features Include:</h2>
				<ul>
					<li>Bootstrap 3 Framework</li>
					<li>Mobile Responsive Design</li>
					<li>Predefined File Paths</li>
					<li>Working PHP Contact Page</li>
					<li>Minimal Custom CSS Styles</li>
					<li>Unstyled: Add Your Own Style and Content!</li>
					<li>Font-Awesome fonts come pre-installed!</li>
					<li>100% <strong>Free</strong> to Use</li>
					<li>Open Source: Use for any project, private or commercial!</li>
				</ul>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<img class="img-responsive" src="http://placehold.it/700x450/ffffff/cccccc?text=Featured+Image">
			</div>
		</div>
	</div>
</div>

<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<img class="img-responsive" src="http://placehold.it/700x450?text=Featured+Image">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<h2>Modern Business Features Include:</h2>
				<ul>
					<li>Bootstrap 3 Framework</li>
					<li>Mobile Responsive Design</li>
					<li>Predefined File Paths</li>
					<li>Working PHP Contact Page</li>
					<li>Minimal Custom CSS Styles</li>
					<li>Unstyled: Add Your Own Style and Content!</li>
					<li>Font-Awesome fonts come pre-installed!</li>
					<li>100% <strong>Free</strong> to Use</li>
					<li>Open Source: Use for any project, private or commercial!</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php require_once('partials/footer.php'); ?>