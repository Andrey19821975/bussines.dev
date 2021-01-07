<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package opibus
 */

?>

<footer id="contacts">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4">
				<div class="descr-wrapper">
					<div class="cap">
						<div class="wrap-img-logo">
								<a class="logo" href="#"><img src="<?php the_field('logotype');?>" alt="Logo"></a>
						</div>
					</div>	
						<p><?php the_field('footer-text-description') ?></p>	
				</div>
			</div>
			<div class="col-sm-3 col-sm-offset-1">
				<div class="navigation">
					<div class="cap">
						<h4>NAVIGATION</h4>
					</div>
					<div class="nav">
					<?php wp_nav_menu(array(
									'theme_location' => 'menu-1',
									'container' => false,
							 		'depth' => 0
								)) ?> </div>	
			</div>		
				
				
			</div>
			<div class="col-sm-3 col-sm-offset-1">
				<div class="contacts">
					<div class="cap">
						<h4>CONTACTS</h4>
					</div>
						<p><?php the_field('opibus-address') ?></p>
						<p>Phone: <a href="tel:<?php the_field('opibus-phone')?>"><?php the_field('opibus-phone')?></a></p>	
						<p>E-mail: <a href="mailto:<?php the_field('opibus-e-mail')?>"><?php the_field('opibus-e-mail')?></a></p>
						<!-- <p>
    					    Social:	
    					    <a href="#" target='_blank'><i class="fa fa-facebook" aria-hidden="true"></i></a>&nbsp;&nbsp;
    					    <a href="#" target='_blank'><i class="fa fa-twitter" aria-hidden="true"></i></a>&nbsp;&nbsp;
    					    <a href="#" target='_blank'><i class="fa fa-linkedin" aria-hidden="true"></i></a>&nbsp;
						</p>
						 -->
				</div>
				
			</div>
		</div>
	</div>
		
	</footer>
		<div class="tablet-bottom">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-7">
						<p>
							<?php the_field('opibus-copyright')?>
						</p>
						
					</div>
					<div class="col-sm-5 text-right">
						<div class="social-links-bottom">
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
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- Modal -->
	<div class="modal fade" id="myModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Contact request</h4>
	      </div>
	      <div class="modal-body">
	        Thanks for your request! We'll get back to you soon
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>


	
 


<?php wp_footer(); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIxACPoRMUijcK3LmdAY-Cvmt7AQWqTbo&callback=initMap"  async defer></script>
</body>
</html>
