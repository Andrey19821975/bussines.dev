<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package opibus
 */

get_header();
?>
<body <?php body_class(); ?>>
	<header id="home" style="background-image:url(<?php the_field('header-background');?>)">	
		<div class='video-holder'>
		    
		  
		</div>		
		<div class="container-fluid top-mobile">
			<div class="row">
				<div class="col-sm-5">
					<div class="addres">
					<i class="fa fa-map-marker" aria-hidden="true"></i><?php the_field('opibus-address') ?>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="phone">
						<i class="fa fa-phone" aria-hidden="true"></i>
						Phone: <a href="tel:<?php the_field('opibus-phone')?>"><?php the_field('opibus-phone')?></a>
				
					</div>
					
				</div>
				<div class="col-sm-3">
					<div class="social-links-top">
						<ul>
							<?php if (get_field('opibus-facebook')):?>
								<li><a href="<?php the_field('opibus-facebook')?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<?php endif?>	
							<?php if (get_field('opibus-twitter')):?>
								<li><a href="<?php the_field('opibus-twitter')?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<?php endif?>	
							<?php if (get_field('opibus-linkedin')):?>	
								<li><a href="<?php the_field('opibus-linkedin')?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<?php endif?>
							<!-- <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li> 
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>-->
						</ul>
					</div>
					
				</div>
			</div>	
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="top-line">
					<div class="col-xs-5 col-sm-4">
							<div class="wrap-img-logo">
								<a class="logo" href="#"><img src="<?php the_field('logotype');?>" alt="Logo"></a>
							</div>
					</div>	
					<div class="col-sm-8 text-right">
						<?php wp_nav_menu(array(
							'theme_location' => 'menu-1',
							'container' => false,
							 'menu_class' => 'top-menu',
							 'depth' => 0
						)) ?> 
				
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="mobile-menu">
						<a href="#" class="menu-button"><i class="fa fa-bars"></i></a>
							<div class="mobile-top-menu">
								
								<?php wp_nav_menu(array(
									'theme_location' => 'menu-1',
									'container' => false,
							 		'depth' => 0
								)) ?> 	
							</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="caption">
					<div class="col-md-12">
						<h1>opibus</h1>
						<h3>WE DISSOLVE YOUR IT BUSINESS ISSUES IN A PROMPT MANNER</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="button-wrap">
						<a class="mybtn mybtn-top" href="#projects">SEE OUR RECENT PROJECTS</a>
					</div>	
				</div>
			</div>
		</div>
	</header>
	<section class="services" id="services">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
				<h2>Our Services</h2>					
				</div>
			</div>
			
				<div class="wrapper-services">
					<div class="row">
						<div class="col-sm-4 mobile-interval">
							<div class="row">
								<div class="col-xs-4">
									<div class="row">
										<div class="col-sm-12 text-left">
											<div class="icon-servise" style="background-image: url(<?php
												if( get_field('services_image') ):
													the_field('services_image');
													endif;	
												?>)">
											</div>
										</div>	
									</div>	
								</div>
							<div class="col-xs-8">
								<div class="wrap-text">
									<div class="wrap-caption">
										<a><?php the_field('caption-service-1')?></a>
									</div>
									<p><?php the_field('description-service-1')?></p>
								</div>
							</div>	
						</div>
					</div>
					<div class="col-sm-4 mobile-interval">
						<div class="row">
							<div class="col-xs-4">
								<div class="row">
									<div class="col-sm-12 text-left">
										<div class="icon-servise two" style="background-image: url(<?php
												if( get_field('services_image') ):
													the_field('services_image');
													endif;	
												?>)">
										</div>
									</div>
								</div>	
							</div>
							<div class="col-xs-8">
								<div class="wrap-text">
									<div class="wrap-caption">
										<a><?php the_field('caption-service-2')?></a>
									</div>
									<p><?php the_field('description-service-2')?></p>
								</div>
							</div>	
						</div>					
					</div>
					<div class="col-sm-4 mobile-interval">
						<div class="row">
							<div class="col-xs-4">
								<div class="row">
									<div class="col-sm-12 text-left">
										<div class="icon-servise three" style="background-image: url(<?php
												if( get_field('services_image') ):
													the_field('services_image');
													endif;	
												?>)">
										</div>
									</div>	
								</div>
							</div>
							<div class="col-xs-8">
								<div class="wrap-text">
									<div class="wrap-caption">
										<a><?php the_field('caption-service-3')?></a>
									</div>
									<p><?php the_field('description-service-3')?></p>
								</div>
							</div>	
						</div>
					</div>
					</div>
					<div class="row interval">
					<div class="col-sm-4 mobile-interval">
						<div class="row">
							<div class="col-xs-4">
								<div class="row">
									<div class="col-sm-12 text-left">
										<div class="icon-servise four" style="background-image: url(<?php
												if( get_field('services_image') ):
													the_field('services_image');
													endif;	
												?>)">
										</div>
									</div>	
								</div>	
							</div>
							<div class="col-xs-8">
								<div class="wrap-text">
									<div class="wrap-caption">
										<a><?php the_field('caption-service-4')?></a>
									</div>
									<p><?php the_field('description-service-4')?></p>
								</div>
							</div>	

						</div>
					</div>
					<div class="col-sm-4 mobile-interval">
						<div class="row">
							<div class="col-xs-4">
								<div class="row">
									<div class="col-sm-12 text-left">
										<div class="icon-servise five" style="background-image: url(<?php
												if( get_field('services_image') ):
													the_field('services_image');
													endif;	
												?>)">
										</div>
									</div>	
								</div>
							</div>
							<div class="col-xs-8">
								<div class="wrap-text">
									<div class="wrap-caption">
										<a><?php the_field('caption-service-5')?></a>
									</div>
									<p><?php the_field('description-service-5')?></p>
								</div>
							</div>	
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<div class="col-xs-4">
								<div class="row">
									<div class="col-sm-12 text-left">
										<div class="icon-servise six" style="background-image: url(<?php
												if( get_field('services_image') ):
													the_field('services_image');
													endif;	
												?>)">
										</div>
									</div>	
								</div>	
							</div>
							<div class="col-xs-8">
								<div class="wrap-text">
									<div class="wrap-caption">
										<a><?php the_field('caption-service-6')?></a>
									</div>
									<p><?php the_field('description-service-6')?></p>
								</div>
							</div>	
						</div>
					</div>
					</div>
			
		</div>
		</div>
	</section>
	<section class="projects" id="projects" style="background-image:url(<?php the_field('projects-image')?>)">
		<div class="container-fluid">
			<div class="row">
			<div class="col-md-12">
				<h2>Projects</h2>
			</div>
				
			</div>
		</div>
	</section>
	<div class="section-projects-link">	
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<div class="projec-item-wrap">
						<div class="item-img">
							<div  id="carouselProject1" class="carousel slide" data-ride="carousel" data-interval="0">
								<?php $images = get_field('gallery-project-1');
								if ($images): ?>
								<ol class="carousel-indicators">
									<?php foreach( $images as $count => $image ): ?>
										<li data-target="#carouselProject1" data-slide-to="<?php echo $count ?>" <?php if ($count==0) echo 'class="active"'?>></li>
									<?php endforeach; ?>
								</ol>
								  <?php endif; ?>
  								  <?php if ($images): ?>
								<div class="carousel-inner">
									<?php foreach( $images as $count => $image ): ?>
										<div class="item <?php if ($count==0) echo 'active'?>">
											<a href="<?php echo $image['url']; ?>" data-lightbox="image-1">
												<img class="d-block w-100" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>">
											</a>	
										</div>
									<?php endforeach; ?>	
 								</div>
								<?php endif; ?>
  								<a class="carousel-control left" href="#carouselProject1" role="button" data-slide="prev">
    								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    								<span class="sr-only">Previous</span>
  								</a>
  								<a class="carousel-control right" href="#carouselProject1" role="button" data-slide="next">
   									 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    								 <span class="sr-only">Next</span>
  								</a>
							</div>
						</div>
						<div class="item-caption">
							<h4><?php the_field('caption-project-1')?></h4>
							
						</div>
						<div class="item-text">
						<p><?php the_field('description-project-1')?></p>	
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="projec-item-wrap">
						<div class="item-img">
							<div  id="carouselProject2" class="carousel slide" data-ride="carousel" data-interval="0">
								<?php $images = get_field('gallery-project-2');
								if ($images): ?>
								<ol class="carousel-indicators">
									<?php foreach( $images as $count => $image ): ?>					
									<li data-target="#carouselProject2" data-slide-to="<?php echo $count ?>" <?php if ($count==0) echo 'class="active"'?>></li>
									<?php endforeach; ?>	
								  </ol>
								  	<?php endif; ?>
  									<?php if ($images): ?>
									  <div class="carousel-inner">
										<?php foreach( $images as $count => $image ): ?>
											<div class="item <?php if ($count==0) echo 'active'?>">
												<a href="<?php echo $image['url']; ?>" data-lightbox="image-2">
													<img class="d-block w-100" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>">
												</a>	
											</div>
										<?php endforeach; ?>	
 									</div>
									<?php endif; ?>
  								<a class="carousel-control left" href="#carouselProject2" role="button" data-slide="prev">
    								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    								<span class="sr-only">Previous</span>
  								</a>
  								<a class="carousel-control right" href="#carouselProject2" role="button" data-slide="next">
   									 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    								 <span class="sr-only">Next</span>
  								</a>
							</div>
						</div>
						<div class="item-caption">
							<h4><?php the_field('caption-project-2')?></h4>
							
						</div>
						<div class="item-text">
						<p><?php the_field('description-project-1')?></p>	
						</div>
					</div>
				</div>
			</div>
			<div class="row interval-project">
				<div class="col-sm-6">
					<div class="projec-item-wrap">
						<div class="item-img">
							<div  id="carouselProject3" class="carousel slide" data-ride="carousel" data-interval="0">
								<?php $images = get_field('gallery-project-3');
								if ($images): ?>
								<ol class="carousel-indicators">
									<?php foreach( $images as $count => $image ): ?>					
									<li data-target="#carouselProject3" data-slide-to="<?php echo $count ?>" <?php if ($count==0) echo 'class="active"'?>></li>
									<?php endforeach; ?>	
								  </ol>
								  	<?php endif; ?>
  									<?php if ($images): ?>
									  <div class="carousel-inner">
										<?php foreach( $images as $count => $image ): ?>
											<div class="item <?php if ($count==0) echo 'active'?>">
												<a href="<?php echo $image['url']; ?>" data-lightbox="image-3">
													<img class="d-block w-100" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>">
												</a>	
											</div>
										<?php endforeach; ?>	
 									</div>
									<?php endif; ?>
  								<a class="carousel-control left" href="#carouselProject3" role="button" data-slide="prev">
    								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    								<span class="sr-only">Previous</span>
  								</a>
  								<a class="carousel-control right" href="#carouselProject3" role="button" data-slide="next">
   									 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    								 <span class="sr-only">Next</span>
  								</a>
							</div>
						</div>
						<div class="item-caption">
							<h4><?php the_field('caption-project-3')?></h4>
							
						</div>
						<div class="item-text">
						<p><?php the_field('description-project-3')?></p>	
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="projec-item-wrap">
						<div class="item-img">
							<div  id="carouselProject4" class="carousel slide" data-ride="carousel" data-interval="0">
								<?php $images = get_field('gallery-project-4');
								if ($images): ?>
								<ol class="carousel-indicators">
									<?php foreach( $images as $count => $image ): ?>					
									<li data-target="#carouselProject4" data-slide-to="<?php echo $count ?>" <?php if ($count==0) echo 'class="active"'?>></li>
									<?php endforeach; ?>	
								  </ol>
								  	<?php endif; ?>
  									<?php if ($images): ?>
									  <div class="carousel-inner">
										<?php foreach( $images as $count => $image ): ?>
											<div class="item <?php if ($count==0) echo 'active'?>">
												<a href="<?php echo $image['url']; ?>" data-lightbox="image-4">
													<img class="d-block w-100" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>">
												</a>	
											</div>
										<?php endforeach; ?>	
 									</div>
									<?php endif; ?>
  								<a class="carousel-control left" href="#carouselProject4" role="button" data-slide="prev">
    								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    								<span class="sr-only">Previous</span>
  								</a>
  								<a class="carousel-control right" href="#carouselProject4" role="button" data-slide="next">
   									 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    								 <span class="sr-only">Next</span>
  								</a>
							</div>
						</div>
						<div class="item-caption">
							<h4><?php the_field('caption-project-4')?></h4>
							
						</div>
						<div class="item-text">
						<p><?php the_field('description-project-4')?></p>	
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="projec-item-wrap">
						<div class="item-img">
							<div  id="carouselProject5" class="carousel slide" data-ride="carousel" data-interval="0">
							<?php $images = get_field('gallery-project-5');
								if ($images): ?>
								<ol class="carousel-indicators">
									<?php foreach( $images as $count => $image ): ?>					
									<li data-target="#carouselProject5" data-slide-to="<?php echo $count ?>" <?php if ($count==0) echo 'class="active"'?>></li>
									<?php endforeach; ?>	
								  </ol>
								  	<?php endif; ?>
  									<?php if ($images): ?>
									  <div class="carousel-inner">
										<?php foreach( $images as $count => $image ): ?>
											<div class="item <?php if ($count==0) echo 'active'?>">
												<a href="<?php echo $image['url']; ?>" data-lightbox="image-5">
													<img class="d-block w-100" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>">
												</a>	
											</div>
										<?php endforeach; ?>	
 									</div>
									<?php endif; ?>
  								<a class="carousel-control left" href="#carouselProject5" role="button" data-slide="prev">
    								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    								<span class="sr-only">Previous</span>
  								</a>
  								<a class="carousel-control right" href="#carouselProject5" role="button" data-slide="next">
   									 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    								 <span class="sr-only">Next</span>
  								</a>
							</div>
						</div>
						<div class="item-caption">
							<h4><?php the_field('caption-project-5')?></h4>
							
						</div>
						<div class="item-text">
						<p><?php the_field('description-project-5')?></p>	
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="projec-item-wrap">
						<div class="item-img">
							<div  id="carouselProject6" class="carousel slide" data-ride="carousel" data-interval="0">
							<?php $images = get_field('gallery-project-6');
								if ($images): ?>
								<ol class="carousel-indicators">
									<?php foreach( $images as $count => $image ): ?>					
									<li data-target="#carouselProject6" data-slide-to="<?php echo $count ?>" <?php if ($count==0) echo 'class="active"'?>></li>
									<?php endforeach; ?>	
								  </ol>
								  	<?php endif; ?>
  									<?php if ($images): ?>
									  <div class="carousel-inner">
										<?php foreach( $images as $count => $image ): ?>
											<div class="item <?php if ($count==0) echo 'active'?>">
												<a href="<?php echo $image['url']; ?>" data-lightbox="image-6">
													<img class="d-block w-100" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>">
												</a>	
											</div>
										<?php endforeach; ?>	
 									</div>
									<?php endif; ?>
  								<a class="carousel-control left" href="#carouselProject6" role="button" data-slide="prev">
    								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    								<span class="sr-only">Previous</span>
  								</a>
  								<a class="carousel-control right" href="#carouselProject6" role="button" data-slide="next">
   									 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    								 <span class="sr-only">Next</span>
  								</a>
							</div>
						</div>
						<div class="item-caption">
							<h4><?php the_field('caption-project-6')?></h4>
							
						</div>
						<div class="item-text">
						<p><?php the_field('description-project-6')?></p>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<section class="map" id="map"></section>
	<!-- <section class="contacts" id="contacts"> 
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4">
				<div class="wrap-addres">
					<div class="caption">
						<h4>CONTACTS</h4>
					</div>
					<div class="addres">
						<p><span>ADDRESS: </span>4578 Marmora Road, Glasgow, D04 89GR</p>
					</div>
					<br>
					<div class="phones">
						<p><span>PHONE: </span><a href="callto:#">(800) 123-0045;</a></p>
						<p><a href="callto:#">(800) 123-0046</a></p>
						
					</div>
					<div class="contacts-social-links">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
					
				</div>
				<div class="col-sm-8">
					<div class="wrapper-form-user">
						<form action="#" class="user-form">
							<h4>LET’S GET IN TOUCH</h4>
							<div class="form-group user-name">
	    						<label for="userName">Your name</label>
	    						<input type="text" class="form-control" id="userName" name="name" placeholder="Your name *" autocomplete="off">
	    						<span class="error">Name can not be empty</span>
	  						</div>
	  						<div class="form-group user-email">
	    						<label for="userEmail">Your e-mail</label>
	    						<input type="text" class="form-control" id="userEmail" name="email" placeholder="Your e-mail *"
	    						autocomplete="off">
	    						<span class="error">Enter a valid email address</span>
	  						</div>
							<div class="form-group user-message">
	    						<label for="userMessage">Your message</label>
	    						<textarea class="form-control" id="userMessage" name="message" placeholder="Your message *"></textarea autocomplete="off">
	    						<span class="error">Message can not be empty</span>
	  						</div>
	  							<div class="mybtn send-error">Form sending error. Please mail us to mail@mail.com</div>
	  						<div class="button-wrap"><a class="mybtn" id="send">Send</a></div>	
						</form>
					</div>	
					
				</div>
			</div>
		</div>
	</section> -->

<?php
get_footer();
