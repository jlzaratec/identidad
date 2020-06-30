<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head(); ?>
  <title>
    <?php wp_title('-', true, 'right'); bloginfo('name'); ?>
  </title>
</head>
<body class="d-flex flex-column">
  <div id="page-content">
    <div class="" style="clear: both;	display: block; overflow: hidden important;">
      <!-- Apotegma -->
      <div class="apotegma">2020, AÑO DE LA PLURICULTURALIDAD DE LOS PUEBLOS INDÍGENAS Y AFROMEXICANO</div>
      <?php //if (get_theme_mod('apotegma_text')) : ?>
        <!--<div class="apotegma">"<?php //echo get_theme_mod('apotegma_text'); ?>"</div>-->
      <?php //else : ?>
        <!--<div class="apotegma">"Apotegma, Escritorio -> Apariencia -> Personalizar"</div>-->
      <?php //endif; ?>
    </div>
      <!-- Navbar-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" id="menu-depsgob">
      <a href="http://www.oaxaca.gob.mx/" class="navbar-brand" target="_blank">oaxaca<b>.</b>gob<b>.</b>mx</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php
      wp_nav_menu( array(
        'theme_location'  => 'primary',
        'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'navbarSupportedContent',
        'menu_class'      => 'navbar-nav mr-auto',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),
      ) ); ?>

     <!-- Menu redes sociales -->

      <?php if (get_theme_mod('url_facebook') != '' || get_theme_mod('url_twitter') != '' || get_theme_mod('url_youtube') != '' || get_theme_mod('url_flickr') != '' || get_theme_mod('url_googleplus') != '' || get_theme_mod('url_instagram') != ''): ?>
      <ul class="nav justify-content-end ml-auto menu__redes">
        <?php if (get_theme_mod('url_email') != ''): ?>
          <li class="nav-item" style="padding:2px;">
            <a href="<?php echo get_theme_mod('url_email'); ?>" target="_blank"><i class="far fa-envelope"></i></a>
          </li>
        <?php endif; ?>
        <?php if (get_theme_mod('url_facebook') != ''): ?>
          <li class="nav-item" style="padding:2px;">
            <a href="<?php echo get_theme_mod('url_facebook'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
          </li>
        <?php endif; ?>
        <?php if (get_theme_mod('url_twitter') != ''): ?>
          <li class="nav-item" style="padding:2px;">
            <a href="<?php echo get_theme_mod('url_twitter'); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
          </li>
        <?php endif; ?>
        <?php if (get_theme_mod('url_youtube') != ''): ?>
          <li class="nav-item" style="padding:2px;">
            <a href="<?php echo get_theme_mod('url_youtube'); ?>" target="_blank"><i class="fab fa-youtube"></i></a>
          </li>
        <?php endif; ?>
        <?php if (get_theme_mod('url_instagram') != ''): ?>
          <li class="nav-item" style="padding:2px;">
            <a href="<?php echo get_theme_mod('url_instagram'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
          </li>
        <?php endif; ?>
      </ul>
      <?php endif; ?>
      <!-- Menu redes sociales Termina -->
    </nav>
    <!-- Termina navbar -->
    <!-- Header logo-->
    <div class="contianer-fluid header-logo">
      <div class="row">
        <div class="col-xs-12 col-sm-4 text-center text-md-left">
          <?php if (get_theme_mod('logo_dep')) : ?>
            <img  class="img-fluid logo-dep" src="<?php echo get_theme_mod('logo_dep'); ?>" alt="<?php bloginfo('name'); ?>"/>
          <?php else : ?>
            <img class="img-fluid logo-dep" src="<?php bloginfo('template_url'); ?>/assets/img/logo_default.png" alt="">
          <?php endif; ?>
        </div>
        <div class="col-xs-12 col-sm-8 text-center text-md-left">
          <?php if (get_theme_mod('logo_complementario')) : ?>
            <img  class="img-fluid logo-dep" src="<?php echo get_theme_mod('logo_complementario'); ?>" alt="" width="180px" height="180px"/>
          <?php endif; ?>
        </div>
      </div>
    </div><!-- Termina header logo -->
    <!-- Header barra de busqueda -->
    <div class="contianer-fluid search-header">
      <div class="row">
        <div class="col-md-12">
          <div class="my-lg-0 div-buscador">
             <?php get_search_form(); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Termina header barra de busqueda -->
    <?php if (has_nav_menu('menu-secundario')) : ?>
 <div>
  <?php
  wp_nav_menu( array(
          'theme_location' => 'menu-secundario',
          'menu_id'        => 'menu-header',
          'menu_class'     => 'nav justify-content-center menu-header',
          'container' => 'ul',
        ) );
  ?>

  </div>
<?php endif; ?>
