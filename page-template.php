<?php
/**
 * Template name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FirstTheme
 */

get_header();
?>
<main>
	<section id="carousel">
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/img/banner.jpg" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
							<h1 class="text-left">ALWAYS</h1>
							<h3 class="text-left">CONNECTED</h3>
							<p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, sit omnis? Omnis est dolorum nisi magnam commodi asperiores nemo enim sed eligendi iste.</p>
							<button class="btn btn-warning">ACTIVATE NOW</button>
						</div>		
					</div>
					<div class="carousel-item">
					<img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/img/banner.jpg"  alt="Second slide">
					<div class="carousel-caption d-none d-md-block">
						<h1 class="text-left">ALWAYS</h1>
						<h3 class="text-left">CONNECTED</h3>
						<p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, sit omnis? Omnis est dolorum nisi magnam commodi asperiores nemo enim sed eligendi iste.</p>
						<button class="btn btn-warning">ACTIVATE NOW</button>
					</div>	
				</div>
			</div>
		</div>
	</section>

	<section id="information">
		<div id="firstContent" class="mt-5">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6">
						<div id="firstText" class="container-fluid">
							<h2>FEATURES:</h2>
							<h1>UNLIMITED DATA</h1>
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque blanditiis excepturi amet. Voluptatibus, eum quisquam.</p>
						</div>
					</div>
					<div class="col-6">
						<img class="img img-responsive" src="<?php echo get_template_directory_uri()?>/img/personas.png" alt="">
					</div>
				</div>
			</div>
		</div>

		<div id="secondContent" class="mt-5">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6">
						<img class="img img-responsive" src="<?php echo get_template_directory_uri()?>/img/cohete.png" alt="">
					</div>
					<div class="col-6">
						<div id="firstText" class="container-fluid">
							<h1>4G LTE</h1>
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque blanditiis excepturi amet. Voluptatibus, eum quisquam.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="thirdContent" class="mt-5">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6">
						<div id="firstText" class="container-fluid">
							<h1>+100 COUNTRIES</h1>
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque blanditiis excepturi amet. Voluptatibus, eum quisquam.</p>
						</div>
					</div>
					<div class="col-6">
						<img class="img img-responsive" src="<?php echo get_template_directory_uri()?>/img/pin.png" alt="">
					</div>
				</div>
			</div>
		</div>

		<div id="fourthContent" class="mt-5">
			<div class="container-fluid">
				<div class="row">
				<div class="col-6">
					<img class="img img-responsive" src="<?php echo get_template_directory_uri()?>/img/asolearse.png" alt="">
				</div>
				<div class="col-6">
					<div id="firstText" class="container-fluid">
						<h1>ALL OF YOUR APPS CONNECTED</h1>
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque blanditiis excepturi amet. Voluptatibus, eum quisquam.</p>
					</div>
				</div>
				</div>
			</div>
		</div>
	</section>	

	</section id="howitworks">
		<div class="container-fluid bg-orange">
			<div class="row">
				<div class="col-4">
					<img src="<?php echo get_template_directory_uri()?>/img/palmera_izq.png" alt="">
				</div>
				<div class="col-4 text-center">
					<h1>HOW IT WORKS</h1>
				</div>
				<div class="col-4 palm-der">
					<img src="<?php echo get_template_directory_uri()?>/img/palmera_der.png" alt="">
				</div>
			</div>

			<div class="row">
				<div class="embed-responsive embed-responsive-16by9 m-auto">
  					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
				</div>	
			</div>
			<div class="row">
				<div class="col-6">
					<img src="<?php echo get_template_directory_uri()?>/img/hojas_izq.png" alt="">
				</div>
				<div class="col-6 palm-der">
					<img src="<?php echo get_template_directory_uri()?>/img/hojas_der.png" alt="">
				</div>
			</div>
		</div>
	<section>

	<section id="landConnected">
		<div class="container-fluid bg-gray align-center">
			<div class="row mt-5">
				<div class="col-md-6">
					<h3>
						LAND CONNECTED WITH OUR GLOBAL COVERAGE
					</h3>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia tempora voluptatibus sequi eius atque inventore sapiente maiores similique iusto totam magnam, quibusdam, qui dolores assumenda dicta quod nesciunt eveniet magni.</p>

					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia tempora voluptatibus sequi eius atque inventore sapiente maiores similique iusto totam magnam, quibusdam, qui dolores assumenda dicta quod nesciunt eveniet magni.</p>
				</div>
				<div class="col-md-6">
					<img src="<?php echo get_template_directory_uri()?>/img/mapa.png" alt="">
				</div>
				
			</div>
		</div>
	</section>

	<section id="getSiempreWifi">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 m-center">
					<h3>GET SIEMPRE WIFI</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, illo minus. Eaque mollitia explicabo vero aperiam quod saepe tempore, excepturi consequatur architecto obcaecati, sed, at sit repellendus veritatis unde itaque!</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, illo minus. Eaque mollitia explicabo vero aperiam quod saepe tempore, excepturi consequatur architecto obcaecati, sed, at sit repellendus veritatis unde itaque!</p>
					<button class="btn btn-warning">GET SIEMPRE WIFI</button>
				</div>
				<div class="col-md-6 mx-auto card mt-5">
					<div id="image-triangle" class="text-right">
						<img src="<?php echo get_template_directory_uri()?>/img/triangulo.png" alt="" class="img">
					</div>
					<div id="logo" class="text-center">
						<img src="<?php echo get_template_directory_uri()?>/img/logo_negro.png" alt="" class="img">
					</div>
					<div id="desc" class="mt-5">
						<div class="firstDesc mt-5">
							<div class="row">
								<div class="col-2">
									<img src="<?php echo get_template_directory_uri()?>/img/check.png" alt="" class="img">
								</div>
								<div class="col-8">
									<p>The fastest and most stable 4G LTE.</p>
								</div>
							</div>
						</div>
						<div class="secondDesc">
							<div class="row">
								<div class="col-2">
									<img src="<?php echo get_template_directory_uri()?>/img/check.png" alt="" class="img">
								</div>
								<div class="col-8">
									<p>Connect up to 5 devices simultaneosly.</p>
								</div>
							</div>
						</div>
						<div class="thirtDesc">
							<div class="row">
								<div class="col-2">
									<img src="<?php echo get_template_directory_uri()?>/img/check.png" alt="" class="img">
								</div>
								<div class="col-8">
									<p>Available in over 100 countries arount the world.</p>
								</div>
							</div>
						</div>
						<div class="fourthDesc">
							<div class="row">
								<div class="col-2">
									<img src="<?php echo get_template_directory_uri()?>/img/check.png" alt="" class="img">
								</div>
								<div class="col-8">
									<p>Unlimited data.</p>
								</div>
							</div>
						</div>
						<div class="fifthDesc">
							<div class="row">
								<div class="col-2">
									<img src="<?php echo get_template_directory_uri()?>/img/check.png" alt="" class="img">
								</div>
								<div class="col-8">
									<p>Use Google/Apple Maps or Waze.</p>
								</div>
							</div>
						</div>
					</div>
					<div id="image-palms" class="text-right">
					<img src="<?php echo get_template_directory_uri()?>/img/mini_palmeras.png" alt="" class="img">
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<img class="img" src="<?php echo get_template_directory_uri()?>/img/dispositivo.png" alt="">
			</div>
		</div>
	</section>	
</main>
<?php
get_footer();
