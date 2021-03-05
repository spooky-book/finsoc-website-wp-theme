<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package Busiway
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#main"></a>
<div class="wrapper">
 <header class="ti-trhead"> 
  <!--==================== TOP BAR ====================-->
  <!-- <div class="container">
    <div class="ti-head-detail hidden-xs hidden-sm">
      <div class="row">
        <div class="col-md-6 col-xs-12 col-sm-6">
         <?php $consultup_head_info_icon_one = get_theme_mod('consultup_head_info_icon_one','fa-clock-o');
          $consultup_head_info_icon_one_text = get_theme_mod('consultup_head_info_icon_one_text','Open-Hours:10 am to 7pm');
          $consultup_head_info_icon_two = get_theme_mod('consultup_head_info_icon_two','fa-envelope-o');
          $consultup_head_info_icon_two_text = get_theme_mod('consultup_head_info_icon_two_text','info@themeansar.com');
          if(($consultup_head_info_icon_one) || ($consultup_head_info_icon_two) !=''){
          ?>
         <ul class="info-left">
        <li><a><i class="fa <?php echo esc_attr( $consultup_head_info_icon_one ); ?> "></i> <?php echo esc_html( $consultup_head_info_icon_one_text );?></a></li>
        <li><a><i class="fa <?php echo esc_attr( $consultup_head_info_icon_two ); ?>"></i><?php echo esc_html( $consultup_head_info_icon_two_text ); ?></a></li>
        </ul>
        <?php } ?>
        </div>
        <div class="col-md-6 col-xs-12">
      <?php 
      $header_social_icon_enable = get_theme_mod('header_social_icon_enable','on');
      if($header_social_icon_enable !='off')
      {
      $consultup_header_fb_link = get_theme_mod('consultup_header_fb_link','#');
      $consultup_header_fb_target = get_theme_mod('consultup_header_fb_target',1);
      $consultup_header_twt_link = get_theme_mod('consultup_header_twt_link','#');
      $consultup_header_twt_target = get_theme_mod('consultup_header_twt_target',1);
      $consultup_header_lnkd_link = get_theme_mod('consultup_header_lnkd_link','#');
      $consultup_twitter_lnkd_target = get_theme_mod('consultup_twitter_lnkd_target',1);
      $consultup_header_insta_link = get_theme_mod('consultup_header_insta_link','#');
      $consultup_insta_lnkd_target = get_theme_mod('consultup_insta_lnkd_target',1);
      ?>
      <ul class="ti-social info-right">
      <?php if($consultup_header_fb_link !=''){?>
      <li><span class="icon-soci"><a <?php if($consultup_header_fb_target) { ?> target="_blank" <?php } ?>href="<?php echo $consultup_header_fb_link; ?>"><i class="fa fa-facebook"></i></a></span> </li>
      <?php } if($consultup_header_twt_link !=''){ ?>
      <li><span class="icon-soci"><a <?php if($consultup_header_twt_target) { ?>target="_blank" <?php } ?>href="<?php echo $consultup_header_twt_link;?>"><i class="fa fa-twitter"></i></a></span></li>
      <?php } if($consultup_header_lnkd_link !=''){ ?>
      <li><span class="icon-soci"><a <?php if($consultup_twitter_lnkd_target) { ?>target="_blank" <?php } ?> href="<?php echo $consultup_header_lnkd_link; ?>"><i class="fa fa-linkedin"></i></a></span></li>
      <?php } 
      if($consultup_header_insta_link !=''){ ?>
      <li><span class="icon-soci"><a <?php if($consultup_insta_lnkd_target) { ?>target="_blank" <?php } ?> href="<?php echo $consultup_header_insta_link; ?>"><i class="fa fa-instagram"></i></a></span></li>
      <?php } ?>
      </ul>
      <?php } ?>
    </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div> -->
  <div id="static-top-nav-bar" class="ti-main-nav" class="sticky">
	  <div id="navbar-div" class="navbar-visible">
		  <div class="container"> 
			<nav class="navbar navbar-default navbar-wp navbar-visible">

			<!-- Start Navbar Header -->
			<div class="navbar-header col-md-3 logo-positioning navbar-positioning">
			  <?php if(has_custom_logo()) {
			// Display the Custom Logo
			the_custom_logo();
			} else { ?>
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<span> <?php bloginfo('name'); ?> </span> <br>
				<?php $description = get_bloginfo( 'description', 'display' );
			  if ( $description || is_customize_preview() ) : ?>
				  <span class="site-description"><?php echo $description; ?></span> 
				<?php endif;?></a><?php }?>
			  <button id="navbar-button-id" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-wp"> <span class="sr-only"><?php esc_html_e('Toggle Navigation','busiway');?></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			<!-- /End Navbar Header -->

			<!-- Navigation for the buttons on the right -->
			<div class="collapse navbar-collapse" id="navbar-wp">
			  <?php wp_nav_menu( array(
									'theme_location' => 'primary',
									'container'  => 'nav-collapse collapse navbar-inverse-collapse',
									'menu_class' => 'nav navbar-nav navbar-right',
									'fallback_cb' => 'consultup_fallback_page_menu',
									'walker' => new consultup_nav_walker()
								) ); 
				?>
			</div>
			<!-- /Navigation --> 
			</nav>
	  	</div>
	  </div>
	</div>
</header>
<!-- #masthead --> 
