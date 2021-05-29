<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<!--link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Slabo+27px|Thasadith" rel="stylesheet"-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Kurale&display=swap" rel="stylesheet"> 
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<nav id="navigation">
		<div class="container">
			<div id="navigation-wrapper">
				<?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'main-menu', 'menu_class' => 'menu' ) ); ?>
			</div>
			<div class="menu-mobile"></div>
			<!--div id="top-search">
				<a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/searchicon.png" /></a>
			</div-->
			<!--div class="show-search">
				<?php get_search_form(); ?>
			</div-->
		</div>
		<div style="clear:both;"></div>
	</nav>
	<header id="header">
	  	<?php if( get_header_image() != '' ) : ?>
    	  	<div class="header-image-container">
        	  	<div class="header-image-div" style="background-image: url('<?php echo esc_url( get_header_image() ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>')">
					<div id="brand">   
		        	    <?php if( has_custom_logo() ) :?>
		            		<?php the_custom_logo(); ?>
		        		<?php else: ?>
			        		<?php if( display_header_text() ) : ?>
				                <?php if ( is_front_page() ) : ?>
					                <h1>
					                	<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					                		<?php bloginfo( 'name' ); ?>
					                	</a>
					                </h1>
				                <?php else : ?>
					                <h2>
					                	<a class="site-title-two" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					                		<?php bloginfo( 'name' ); ?>
					                	</a>
					                </h2>
				                <?php endif; ?>
						        <p class="site-description"><?php echo esc_html(get_bloginfo( 'description', 'display' ) ); ?></p>
					        <?php endif; ?>
			            <?php endif; ?>
	            	</div><!-- .brand -->
	      		</div>
      		</div>
		<?php endif; ?>


		</div>


		<div style="clear:both;"></div>
		
	</header>

