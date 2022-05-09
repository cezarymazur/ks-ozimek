<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KS_Ozimek
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

<header id="masthead" class="site-header sticky-top">

<nav class="navbar navbar-expand-lg bg-white navbar-fixed-top ">
  <div class="container">
    <div class="col-lg-2 my-3 pr-2"><?php the_custom_logo(); ?></div>
    <div class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent5" aria-expanded="false" aria-label="Toggle navigation">
	  <i class="bi bi-list"></i>
</div>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<div class="container">
				<div class="row">
				<div class="col-lg-11 col-12">
					<div class="language-navigation row my-3">
						<div class="col d-lg-flex justify-content-lg-end align-items-lg-end">
						<?php pll_the_languages(array(
									'show_names' => true,
									'hide_current' => false
									)); ?>
									</div>
					</div>
					<div class="row">
						<div class="col d-lg-flex justify-content-lg-end align-items-lg-end">
						<?php wp_nav_menu( array(
							'theme_location'  => 'menu-1',
							'menu'            => 'primary-menu', 
							'menu_class' => 'navbar-nav main-navigation',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'  ) ); ?>
						</div>
					</div>
				</div> <!-- close col -->

				<div class="col-lg-1 col-12 sm-icons d-lg-flex justify-content-lg-end align-items-lg-end">
					<ul>
					<li><a href="#">
					<svg class="sm-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 39.811 39.81" style="enable-background:new 0 0 39.811 39.81;" xml:space="preserve">
						<g>
							<g id="XMLID_1_">
								<path style="fill:#eed40c;" d="M17.284,31.408h4.632V19.808h3.232l0.345-3.884h-3.577c0,0,0-1.45,0-2.212    c0-0.916,0.184-1.278,1.07-1.278c0.712,0,2.507,0,2.507,0V8.403c0,0-2.643,0-3.208,0c-3.447,0-5.001,1.518-5.001,4.424    c0,2.531,0,3.097,0,3.097h-2.41v3.933h2.41V31.408z"/>
							</g>
							<g>
								<path style="fill:#eed40c;" d="M39.811,39.81H0.002V0.001h39.809V39.81z M1.002,38.81h37.809V1.001H1.002V38.81z"/>
							</g>
						</g>
					</svg>
					</a>
					</li>
					<li>
					<a href="#">
					<svg class="sm-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 39.811 39.81" style="enable-background:new 0 0 39.811 39.81;" xml:space="preserve">
						<g>
							<g id="XMLID_193_">
								<g id="XMLID_196_">
									<g id="XMLID_199_">
										<rect x="11.552" y="16.725" style="fill:#eed40c;" width="3.939" height="12.724"/>
									</g>
									<g id="XMLID_197_">
										<path style="fill:#eed40c;" d="M13.502,15.058c1.286,0,2.329-1.052,2.329-2.348s-1.042-2.347-2.329-2.347      c-1.287,0-2.329,1.051-2.329,2.347S12.215,15.058,13.502,15.058z"/>
									</g>
								</g>
								<g id="XMLID_194_">
									<path style="fill:#eed40c;" d="M21.786,22.769c0-1.789,0.823-2.854,2.4-2.854c1.448,0,2.144,1.023,2.144,2.854     c0,1.833,0,6.679,0,6.679h3.92c0,0,0-4.648,0-8.056c0-3.408-1.932-5.056-4.629-5.056c-2.699,0-3.834,2.102-3.834,2.102v-1.714     h-3.778v12.724h3.778C21.786,29.448,21.786,24.729,21.786,22.769z"/>
								</g>
							</g>
								<g>
									<path style="fill:#eed40c;" d="M39.809,39.81H0V0.001h39.809V39.81z M1,38.81h37.809V1.001H1V38.81z"/>
								</g>
							</g>
						</svg>
					</a>
					</li>
					</ul>
				</div>
				</div>					
			</div>
		</div>
    </div>
  </div>
</nav>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ks-ozimek' ); ?></a>
	
	</header><!-- #masthead -->
