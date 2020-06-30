<?php
// Estilos y scripts del tema
function tema_goboax_styles_and_scripts() {

  //Bootstrap-reboot
  wp_register_style( 'bootstrap-reboot', get_template_directory_uri() . '/assets/librerias/bootstrap/css/bootstrap-reboot.min.css' );
  wp_enqueue_style( 'bootstrap-reboot');

  //Bootstrap
  wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/librerias/bootstrap/css/bootstrap.min.css' );
  wp_enqueue_style( 'bootstrap-css');

  //Hoja de estilos
  wp_register_style( 'style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'style');

  //Fontawesome
  wp_register_style( 'fontawesome', get_template_directory_uri() . '/assets/librerias/fontawesome/css/all.css' );
  wp_enqueue_style( 'fontawesome');

  //Flexslider CSS
  wp_register_style( 'flexslider-css', get_template_directory_uri() . '/assets/librerias/flexslider/css/flexslider.css' );
  wp_enqueue_style( 'flexslider-css');

  //jQuery
  wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js' );
  wp_enqueue_script( 'jquery');

  //Popper
  wp_register_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js' );
  wp_enqueue_script( 'popper');

  //My custom script
  wp_register_script( 'my_custom_script', get_template_directory_uri() . '/assets/js/scripts.js' );
  wp_enqueue_script( 'my_custom_script');

  //Bootstrap JS
  wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/librerias/bootstrap/js/bootstrap.min.js' );
  wp_enqueue_script( 'bootstrap-js');
  
  //Flexslider JS
  wp_register_script( 'flexslider-js', get_template_directory_uri() . '/assets/librerias/flexslider/js/jquery.flexslider.js' );
  wp_enqueue_script( 'flexslider-js');

  //Flexslider JS
  wp_register_script( 'config-flexslider-js', get_template_directory_uri() . '/assets/librerias/flexslider/js/config.js' );
  wp_enqueue_script( 'config-flexslider-js');

  //Owl carrousel
  wp_enqueue_style( 'owl-style', get_template_directory_uri() . '/assets/librerias/owl/assets/owl.carousel.css');
  wp_enqueue_style( 'owl-style');

  wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/librerias/owl/assets/owl.theme.default.css');
  wp_enqueue_style( 'owl-theme');

  wp_register_script( 'owl-js', get_template_directory_uri() . '/assets/librerias/owl/owl.carousel.js' );
  wp_enqueue_script( 'owl-js');

  wp_register_script( 'owl-config-js', get_template_directory_uri() . '/assets/librerias/owl/carousel.js' );
  wp_enqueue_script( 'owl-config-js');

  wp_register_script( 'mobile-js', get_template_directory_uri() . '/assets/librerias/mobile-js/mobile-detect.min.js');
  wp_enqueue_script( 'mobile-js');
}
add_action( 'wp_enqueue_scripts', 'tema_goboax_styles_and_scripts' );

//Soporte para el menu de boostrap
require_once get_template_directory() . '/assets/librerias/navwalker/class-wp-bootstrap-navwalker.php';

//Registro de menus
register_nav_menus( array(
	'primary' => __( 'Menu principal', 'DepsGobOax2019' ),
  'menu-secundario' => esc_html__( 'Menu secundario header', 'DepsGobOax2019' ),
  'menu-footer' => esc_html__( 'Menu Footer', 'DepsGobOax2019' ),
) );


function add_classes_on_li($classes, $item, $args) {

  // check if the item is in the primary menu
  if( $args->theme_location == 'menu-footer' ) {
      // add the desired attributes:
   $classes[] = 'col';
 }

 return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);


/**
 * Implementacion de opciones del tema en la pestaña personalizar
 */
require_once('theme-options-page.php');

//Soporte a imagen destacada
add_theme_support('post-thumbnails');

//Funcion que agrega a la imagen destacada el alt y el title
function isa_add_img_title( $attr, $attachment = null ) {

  $img_title = the_title_attribute( 'echo=0' );

  $attr['title'] = $img_title;
  $attr['alt'] = $img_title;

  return $attr;
}
add_filter( 'wp_get_attachment_image_attributes','isa_add_img_title', 10, 2 );

// Campos personalizados ACF https://www.advancedcustomfields.com/resources/including-acf-within-a-plugin-or-theme/

// Define path and URL to the ACF plugin.
define( 'MY_ACF_PATH', get_stylesheet_directory() . '/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/acf/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
  return MY_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
function my_acf_settings_show_admin( $show_admin ) {
  return true;
}

/* Campos personalizados (Imagen destacada y portada) */
include_once("customFields.php");

add_action('widgets_init', 'theme_widgets_init');
function theme_widgets_init() {
  register_sidebar(array(
    'name' => __('Simple Page Sidebar', 'theme'),
    'id' => 'simple_page_sidebar',
    'description' => __('', 'Gob'),
    'before_widget' => '<div class="widget-menup menu-v">',
    'after_widget' => '</div>',
    'before_title' => '<p class="widget-title">',
    'after_title' => '</p>',
  ));
  register_sidebar(array(
    'name' => __('Footer (Enlaces)', 'theme'),
    'id' => 'footer_uno',
    'description' => __('', 'Gob'),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3 class="footer-uno">',
    'after_title' => '</h3>',
  ));
  register_sidebar(array(
    'name' => __('Footer (Ubicación de la Dependencia)', 'theme'),
    'id' => 'footer_dos',
    'description' => __('', 'Gob'),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3 class="footer-dos">',
    'after_title' => '</h3>',
  ));
  register_sidebar(array(
    'name' => __('Footer (Número único de emergencia)', 'theme'),
    'id' => 'footer_tres',
    'description' => __('', 'Gob'),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3 class="footer-tres">',
    'after_title' => '</h3>',
  ));
}

/**
 * Redirigir a usuarios no logueados en micro portal radio-pasillo
 */
function agm_webprivada()
{
  if (!is_user_logged_in()) {
    $pos = strpos(get_query_var('pagename'), "radio-pasillo");
    if ($pos !== false) {
      // Obtenemos la página actual
      global $wp;
      require( ABSPATH . 'ldap-admin/loginldap.php' );
      session_start();
      if(!isset($_SESSION['autorizado']) || $_SESSION['autorizado'] == 0) {
        status_header(200);
        load_template(ABSPATH . 'ldap-admin/loginldapview.php');
        exit();
      }
    }
  }
}
add_action( 'template_redirect', 'agm_webprivada' );

// Cerrar sesión Radio Pasillo - Usuarios acceso Directorio Activo
function comprobar_sesion() {
  session_start();
  if ( is_page( 'salir-rp' ) ) {
        session_destroy();
        wp_redirect( home_url( '/radio-pasillo/' ) );
        die;
    }
}
add_action('template_redirect', 'comprobar_sesion');

// Habilitamos Sidebars laterales
function myprefix_init() {
    add_post_type_support('post', 'simple-page-sidebars');
}

add_action('init', 'myprefix_init');

// Permitir el uso de Twitter Cards
function my_twitter_cards() {
  if (is_singular()) {
    global $post;
	  $twitter_user = str_replace('@', '', get_the_author_meta('twitter'));
    $twitter_url = get_permalink();
    $twitter_title = get_the_title();
    $twitter_excerpt = get_the_excerpt();
    $twittercard_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
    $twittercard_thumb = $twittercard_image[0];
    if (!$twittercard_thumb) {
      $twittercard_thumb = 'https://www.example.com/default-image.png';
	  }
	  if ($twitter_user) {
	   echo '<meta name="twitter:creator" value="@' . esc_attr($twitter_user) . '" />' . "\n";
	  }
	  echo '<meta name="twitter:card" value="summary" />' . "\n";
	  echo '<meta name="twitter:url" value="' . esc_url($twitter_url) . '" />' . "\n";
	  echo '<meta name="twitter:title" value="' . esc_attr($twitter_title) . '" />' . "\n";
	  echo '<meta name="twitter:description" value="' . esc_attr($twitter_excerpt) . '" />' . "\n";
	  echo '<meta name="twitter:image" value="' . esc_url($twittercard_thumb) . '" />' . "\n";
	  echo '<meta name="twitter:site" value="@GobOax" />' . "\n";
  }
}

add_action('wp_head', 'my_twitter_cards');

// Agregamos campo personalizado PORTADA NOTICIAS RECIENTES a API REST WP
add_action( 'rest_api_init', function () {
    register_rest_field( 'post', 'featured_image_src', array(
        'get_callback' => function ( $post_arr ) {
            global $post;
            $image_src_arr = get_field('PORTADA_NOTICIA_RECIENTE'); 
            //$image_src_arr = wp_get_attachment_image_src( $post_arr['featured_media'], 'medium' );
 
            return $image_src_arr;
        },
        'update_callback' => null,
        'schema' => null
    ) );
} );

?>
