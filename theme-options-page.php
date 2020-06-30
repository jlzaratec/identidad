<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* Panel de pagina de contacto */
add_action( 'customize_register', 'pagina_contacto' );
function pagina_contacto( $wp_customize ) {
  /* Agregamos la seccion de redes sociales */
  $wp_customize->add_section( 'pag_contacto_secc', array(
    'title'    => __( 'Página de contacto'),
    'priority' => 160,
  ) );

  $wp_customize->add_setting( 'direccion', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'direccion', array(
    'label'      => 'Dirección: ',
    'section'    => 'pag_contacto_secc',
    'type'       => 'textarea'
  ) );
  //inicia dirección alternativa

  $wp_customize->add_setting('visibilidad_direccion_dos',array(
    'default'=>0,
  ));


  $wp_customize->add_control('ctrl_visibilidad_direccion_dos',array(
    'label'=>'Mostrar dirección alternativa',
    'type'=>'checkbox',
    'section'=>'pag_contacto_secc',
    'settings'=>'visibilidad_direccion_dos',
  ));

  $wp_customize->add_setting( 'direccion_dos', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'direccion_dos', array(
    'label'      => 'Dirección alternativa: ',
    'section'    => 'pag_contacto_secc',
    'type'       => 'textarea',
  ) );
  //finaliza dirección alternativa

  $wp_customize->add_setting( 'telefonos', array(
    'default' => ''
  ) );

  $wp_customize->add_control( 'telefonos', array(
    'label'      => 'Teléfonos: ',
    'section'    => 'pag_contacto_secc',
    'type'       => 'textarea'
  ) );
}

/////////////////////////////////////////////////////////////////////////////////////////

/* Panel de Apotegma */
add_action( 'customize_register', 'apotegma' );
function apotegma( $wp_customize ) {
  /* Agregamos la seccion de redes sociales */
  $wp_customize->add_section( 'apotegma_secc', array(
    'title'    => __( 'Apotegma del año'),
    'priority' => 160,

  ) );

  $wp_customize->add_setting( 'apotegma_text', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'apotegma_text', array(
    'label'      => 'Apotegma: ',
    'section'    => 'apotegma_secc',
    'type'       => 'text',
  ) );

}



///////////////////////////// Panel orden de secciones /////////////////////////////
add_action( 'customize_register', 'orderSection' );
function orderSection( $wp_customize ) {
  $arrayOrden = array(
    '-' => 'Default',
    'uno' => 'Uno',
    'dos' => 'Dos',
    'tres' => 'Tres',
    'cuatro' => 'Cuatro',
    'cinco' => 'Cinco',
  );

  $wp_customize->add_section( 'order_secc', array(
    'title'    => __( 'Orden y contenido de secciones'),
    'priority' => 170,
    'description' => __('El orden del slider principal y el contenido del post "Inicio" no se pueden modificar'),
  ) );

  $wp_customize->add_setting( 'orden_seccion_ejes', array(
    'default' => 'uno',
  ) );

  $wp_customize->add_control( 'orden_seccion_ejes', array(
    'label'      => '¿Orden de Sección Ejes?',
    'section'    => 'order_secc',
    'type'       => 'select',
    'choices' => $arrayOrden,
  ) );

  $wp_customize->add_setting( 'orden_seccion_noticias', array(
    'default' => 'dos'
  ) );

  $wp_customize->add_control( 'orden_seccion_noticias', array(
    'label'      => '¿Orden de Sección Noticias-Destacados?',
    'section'    => 'order_secc',
    'type'       => 'select',
    'choices' => $arrayOrden,
  ) );

  $wp_customize->add_setting( 'orden_seccion_nueva_3', array(
    'default' => 'tres',
  ) );

  $wp_customize->add_control( 'orden_seccion_nueva_3', array(
    'label'      => '¿Orden de Sección Redes Sociales?',
    'section'    => 'order_secc',
    'type'       => 'select',
    'choices' => $arrayOrden,
  ) );

  $arrayTipo3 = array('0'=> 'Ninguno','snippet' => 'Snippet', 'html' => 'HTML' );

  $wp_customize->add_setting( 'tipo_contenido_secc_nueva_3', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'tipo_contenido_secc_nueva_3', array(
    'label'      => '¿Tipo de contenido a mostrar?',
    'section'    => 'order_secc',
    'type'       => 'select',
    'choices' => $arrayTipo3,
  ) );

  $wp_customize->add_setting( 'contenido_seccion_nueva_3', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'contenido_seccion_nueva_3', array(
    'label'      => 'Contendido de sección Redes Sociales',
    'description' => 'Ingresar id de Snippet (Solo admite tipo universal)',
    'section'    => 'order_secc',
    'type'       => 'number',
  ) );

  $wp_customize->add_setting( 'contenido_seccion_nueva_3_html', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'contenido_seccion_nueva_3_html', array(
    'label'      => 'Contendido de sección Redes Sociales html',
    'description' => 'Ingresar html',
    'section'    => 'order_secc',
    'type'       => 'textarea',
  ) );

  $wp_customize->add_setting( 'orden_seccion_nueva_4', array(
    'default' => 'cuatro',
  ) );

  $wp_customize->add_control( 'orden_seccion_nueva_4', array(
    'label'      => '¿Orden de Sección Multimedia?',
    'section'    => 'order_secc',
    'type'       => 'select',
    'choices' => $arrayOrden,
  ) );

  $arrayTipo4 = array('0'=> 'Ninguno','snippet' => 'Snippet', 'html' => 'HTML' );

  $wp_customize->add_setting( 'tipo_contenido_secc_nueva_4', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'tipo_contenido_secc_nueva_4', array(
    'label'      => '¿Tipo de contenido a mostrar?',
    'section'    => 'order_secc',
    'type'       => 'select',
    'choices' => $arrayTipo4,
  ) );

  $wp_customize->add_setting( 'contenido_seccion_nueva_4', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'contenido_seccion_nueva_4', array(
    'label'      => 'Contendido de sección Multimedia',
    'description' => 'Ingresar id de Snippet (Solo admite tipo universal)',
    'section'    => 'order_secc',
    'type'       => 'number',
  ) );

  $wp_customize->add_setting( 'contenido_seccion_nueva_4_html', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'contenido_seccion_nueva_4_html', array(
    'label'      => 'Contendido de sección Multimedia html',
    'description' => 'Ingresar html',
    'section'    => 'order_secc',
    'type'       => 'textarea',
  ) );

  $wp_customize->add_setting( 'orden_seccion_nueva_5', array(
    'default' => 'cinco',
  ) );

  $wp_customize->add_control( 'orden_seccion_nueva_5', array(
    'label'      => '¿Orden de Sección Adicional?',
    'section'    => 'order_secc',
    'type'       => 'select',
    'choices' => $arrayOrden,
  ) );

  $arrayTipo = array('0'=> 'Ninguno','snippet' => 'Snippet', 'html' => 'HTML' );

  $wp_customize->add_setting( 'tipo_contenido_secc_adicional', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'tipo_contenido_secc_adicional', array(
    'label'      => '¿Tipo de contenido a mostrar?',
    'section'    => 'order_secc',
    'type'       => 'select',
    'choices' => $arrayTipo,
  ) );

  $wp_customize->add_setting( 'contenido_seccion_nueva_5', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'contenido_seccion_nueva_5', array(
    'label'      => 'Contendido de sección Adicional',
    'description' => 'Ingresar id de Snippet (Solo admite tipo universal)',
    'section'    => 'order_secc',
    'type'       => 'number',
  ) );

  $wp_customize->add_setting( 'contenido_seccion_nueva_5_html', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'contenido_seccion_nueva_5_html', array(
    'label'      => 'Contendido de sección Adicional html',
    'description' => 'Ingresar html',
    'section'    => 'order_secc',
    'type'       => 'textarea',
  ) );

}

/////////////////////////////// Noticias y destacados //////////////////////////////////////////////////

add_action( 'customize_register', 'noticias_destacados' );
function noticias_destacados( $wp_customize ) {
  /* Agregamos la seccion de redes sociales */
  $wp_customize->add_section( 'not_secc', array(
    'title'    => __( 'Sección de noticias y destacados'),
    'priority' => 110,
  ) );

  $wp_customize->add_setting('visibilidad_noticias_destacados',array(
    'default'=>0,
  ));

  $wp_customize->add_control('ctrl_visibilidad_noticias_destacados',array(
    'label'=>'Ocultar sección de noticias y destacados',
    'type'=>'checkbox',
    'section'=>'not_secc',
    'settings'=>'visibilidad_noticias_destacados',
  ));

    $wp_customize->add_setting('visibilidad_noticias_sec',array(
      'default'=>0,
    ));

    $wp_customize->add_control('ctrl_visibilidad_noticias_sec',array(
      'label'=>'Ocultar solo sección de noticias',
      'type'=>'checkbox',
      'section'=>'not_secc',
      'settings'=>'visibilidad_noticias_sec',
    ));

  $wp_customize->add_setting('titulo_seccion_not',array(
    'default'=>'',
  ));

  $wp_customize->add_control('ctrl_titulo_not',array(
    'label'=>'Título de la sección de noticias',
    'type'=>'text',
    'section'=>'not_secc',
    'settings'=>'titulo_seccion_not',
  ));

   /*Agregamos los setting a redes sociales */
  $wp_customize->add_setting( 'cat_noticias', array(
    'default' => '',
  ) );

  $cats_list = array();
  $args = array('orderby' => 'name', 'order'   => 'ASC');
  $cats = get_categories( $args );
  foreach($cats as $cat) {
    $cats_list[$cat->slug] = $cat->cat_name;
  }

  $wp_customize->add_control( 'cat_noticias', array(
    'label'      => 'Categoría de posts para la seccion de noticias: ',
    'type'     => 'select',
    'section'  => 'not_secc',
    'choices'  => $cats_list,
  ));

  $wp_customize->add_setting('visibilidad_destacados_sec',array(
    'default'=>0,
  ));


  $wp_customize->add_control('ctrl_visibilidad_destacados_sec',array(
    'label'=>'Ocultar solo sección de destacados',
    'type'=>'checkbox',
    'section'=>'not_secc',
    'settings'=>'visibilidad_destacados_sec',
  ));

  $wp_customize->add_setting('titulo_seccion_dest',array(
    'default'=>'',
  ));

  $wp_customize->add_control('ctrl_titulo_dest',array(
    'label'=>'Título de la sección de destacados',
    'type'=>'text',
    'section'=>'not_secc',
    'settings'=>'titulo_seccion_dest',
  ));

  /*Agregamos los setting a destacados*/
  $wp_customize->add_setting( 'cat_destacados', array(
    'default' => '',
  ) );

  $cats_list = array();
  $args = array('orderby' => 'name', 'order'   => 'ASC');
  $cats = get_categories( $args );
  foreach($cats as $cat) {
    $cats_list[$cat->slug] = $cat->cat_name;
  }

  $wp_customize->add_control( 'cat_destacados', array(
    'label'      => 'Categoría de posts para la sección de destacados: ',
    'type'     => 'select',
    'section'  => 'not_secc',
    'choices'  => $cats_list,
  ));

  $wp_customize->add_setting( 'num_slides_dest', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'num_slides_dest', array(
    'label'      => 'Número de slides destacados: ',
    'section'    => 'not_secc',
    'type'       => 'select',
    'choices'  => array(
      '1' => __( '1' ),
      '2' => __( '2' ),
      '3' => __( '3' ),
      '4' => __( '4' ),
      '5' => __( '5' ),
      '6' => __( '6' ),
      '7' => __( '7' ),
      '8' => __( '8' ),
      '9' => __( '9' ),
      '10' => __( '10' ),
      '11' => __( '11' ),
      '12' => __( '12' ),
      '13' => __( '13' ),
      '14' => __( '14' ),
      '15' => __( '15' )
    )
  ));

  $wp_customize->add_setting('visibilidad_titulos_destacados',array(
    'default'=>0,
  ));

  $wp_customize->add_control('ctrl_visibilidad_titulos_destacados',array(
    'label'=>'Ocultar títulos de destacados',
    'type'=>'checkbox',
    'section'=>'not_secc',
    'settings'=>'visibilidad_titulos_destacados',
  ));
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/* Funcion de logo del tema */
function custom_logo( $wp_customize ) {

  /* Agregamos la seccion de redes sociales */
  $wp_customize->add_section( 'logoDependencia', array(
    'title'    => __( 'Logo de la dependencia'),
    'priority' => 50,

  ) );
  $wp_customize->add_setting( 'logo_dep' ); // Add setting for logo uploader

  // Add control for logo uploader (actual uploader)
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_dep', array(
    'label'    => 'Sube tu logo',
    'section'  => 'logoDependencia',
    'settings' => 'logo_dep',
    'description' => 'Sube aqui tu logo en formato PNG y con una altura maxima de 180px.'
  ) ) );


  $wp_customize->add_setting( 'logo_complementario' ); // Add setting for logo uploader

  // Add control for logo uploader (actual uploader)
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_complementario', array(
    'label'    => 'Sube tu logo complementario',
    'section'  => 'logoDependencia',
    'settings' => 'logo_complementario',
    'description' => 'Sube aquí tu logo en formato PNG y con una altura máxima de 180px.'
  ) ) );
}
add_action( 'customize_register', 'custom_logo' );

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* Panel de Redes Sociales */
add_action( 'customize_register', 'redes' );
function redes( $wp_customize ) {
  /* Agregamos la seccion de redes sociales */
  $wp_customize->add_section( 'redes_dep', array(
    'title'    => __( 'Ajustes de iconos redes sociales'),
    'priority' => 160,
  ) );

  /*Agregamos los setting a redes sociales */
  $wp_customize->add_setting( 'url_facebook', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'url_facebook', array(
    'label'      => 'URL a tu perfil de Facebook: ',
    'section'    => 'redes_dep',
    'type'       => 'text',
  ) );

  $wp_customize->add_setting( 'url_twitter', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'url_twitter', array(
    'label'      => 'URL a tu perfil de Twitter: ',
    'section'    => 'redes_dep',
    'type'       => 'text',
  ) );

  $wp_customize->add_setting( 'url_youtube', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'url_youtube', array(
    'label'      => 'URL a tu perfil de Yotube: ',
    'section'    => 'redes_dep',
    'type'       => 'text',
  ) );

  $wp_customize->add_setting( 'url_instagram', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'url_instagram', array(
    'label'      => 'URL a tu perfil de Instagram: ',
    'section'    => 'redes_dep',
    'type'       => 'text',

  ) );

  $wp_customize->add_setting( 'url_email', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'url_email', array(
    'label'      => 'URL al correo insitucional: ',
    'section'    => 'redes_dep',
    'type'       => 'text',

  ) );
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
add_action( 'customize_register', 'ejes_gob' );
function ejes_gob( $wp_customize ) {

// add new section
  $wp_customize->add_section( 'bwpy_theme_colors', array(
   'title' => __( 'Theme Colors' ),
   'priority' => 100,
 ) );

// add color picker setting
  $wp_customize->add_setting( 'link_color', array(
   'default' => '#ff0000'
 ) );

// add color picker control
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
   'label' => 'Link Color',
   'section' => 'bwpy_theme_colors',
   'settings' => 'link_color',
 ) ) );
}

function panel($wp_customize){

  $wp_customize->add_panel('panel_ejes',array(
    'title'=>'Configuración sección ejes',
    'description'=> 'This is panel Description',
    'priority'=> 10,
  ));

// Seccion de visibilidad
  $wp_customize->add_section('visibilidad',array(
    'title'=>'Visibilidad',
    'priority'=>1,
    'panel'=>'panel_ejes',
  ));

  $wp_customize->add_setting('visibilidad_sec',array(
    'default'=>0,
  ));

  $wp_customize->add_control('ctrl_visibilidad',array(
    'label'=>'Mostrar sección',
    'type'=>'checkbox',
    'section'=>'visibilidad',
    'settings'=>'visibilidad_sec',
  ));

// Seccion de titulo
  $wp_customize->add_section('titulo_sec',array(
    'title'=>'Título de la sección',
    'priority'=>5,
    'panel'=>'panel_ejes',
  ));

  $wp_customize->add_setting('titulo_seccion',array(
    'default'=>'',
  ));

  $wp_customize->add_control('ctrl_titulo',array(
    'label'=>'Título de la sección',
    'type'=>'text',
    'section'=>'titulo_sec',
    'settings'=>'titulo_seccion',
  ));
/////////////////////////  EJES /////////////////////////////

// Seccion del eje 1

  $wp_customize->add_section('menu_uno_sec',array(
    'title'=>'Primer circulo',
    'priority'=>10,
    'panel'=>'panel_ejes',
  ));

  $wp_customize->add_setting( 'logo_eje_uno' ); // Add setting for logo uploader

  // Add control for logo uploader (actual uploader)
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_eje_uno', array(
    'label'    => 'Icono',
    'section'  => 'menu_uno_sec',
    'settings' => 'logo_eje_uno',
    'description' => 'Sube aqui el icono en formato PNG, las medidas son de 110 x 110px.'
  ) ) );

  $wp_customize->add_setting('titulo_eje_uno',array(
    'default'=>'',
  ));

  $wp_customize->add_control('ctrl_titulo_uno',array(
    'label'=>'Titulo del primer circulo',
    'type'=>'text',
    'section'=>'menu_uno_sec',
    'settings'=>'titulo_eje_uno',
  ));

  $wp_customize->add_setting( 'texto_eje_uno', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'texto_eje_uno', array(
    'label'      => 'Texto del eje: ',
    'section'    => 'menu_uno_sec',
    'type'       => 'textarea',
    'description' => 'Escribe aqui el texto a mostrar en el eje, por otro lado tienes la opcion de mostrar una lista de enlaces, para ello ve a menus y crea un menu el cual deberas seleccionar abajo, para mostrar este menu este campo de texto debe permanecer vacio.'

  ) );

  $wp_customize->add_setting( 'menu_unoSec', array(
    'default' => '',
  ) );
  $menu_list = array();
  $menus = get_terms('nav_menu');
  foreach($menus as $menu){
    //echo $menu->name . "<br><hr>";
    $menu_list[$menu->name] = $menu->name;

  }
  $wp_customize->add_control( 'menu_unoSec', array(
    'label'      => 'Selecciona el menu para esta seccion: ',
    'type'     => 'select',
    'section'  => 'menu_uno_sec',
    'choices'  => $menu_list,
  ));



   // Seccion del eje 2

  $wp_customize->add_section('menu_dos_sec',array(
    'title'=>'Segundo circulo',
    'priority'=>20,
    'panel'=>'panel_ejes',
  ));

  $wp_customize->add_setting( 'logo_eje_dos' ); // Add setting for logo uploader

  // Add control for logo uploader (actual uploader)
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_eje_dos', array(
    'label'    => 'Icono',
    'section'  => 'menu_dos_sec',
    'settings' => 'logo_eje_dos',
    'description' => 'Sube aqui el icono en formato PNG, las medidas son de 110 x 110px.'
  ) ) );

  $wp_customize->add_setting('titulo_eje_dos',array(
    'default'=>'',
  ));


  $wp_customize->add_control('ctrl_titulo_dos',array(
    'label'=>'Titulo del segundo circulo',
    'type'=>'text',
    'section'=>'menu_dos_sec',
    'settings'=>'titulo_eje_dos',
  ));

$wp_customize->add_setting( 'texto_eje_dos', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'texto_eje_dos', array(
    'label'      => 'Texto del eje: ',
    'section'    => 'menu_dos_sec',
    'type'       => 'textarea',
    'description' => 'Escribe aqui el texto a mostrar en el eje, por otro lado tienes la opcion de mostrar una lista de enlaces, para ello ve a menus y crea un menu el cual deberas seleccionar abajo, para mostrar este menu este campo de texto debe permanecer vacio.'

  ) );

  $wp_customize->add_setting( 'menu_dosSec', array(
    'default' => '',
  ) );
  $menu_list = array();
  $menus = get_terms('nav_menu');
  foreach($menus as $menu){
    //echo $menu->name . "<br><hr>";
    $menu_list[$menu->name] = $menu->name;

  }
  $wp_customize->add_control( 'menu_dosSec', array(
    'label'      => 'Selecciona el menu para esta seccion: ',
    'type'     => 'select',
    'section'  => 'menu_dos_sec',
    'choices'  => $menu_list,
  ));


   // Seccion del eje 3

  $wp_customize->add_section('menu_tres_sec',array(
    'title'=>'Tercer circulo',
    'priority'=>30,
    'panel'=>'panel_ejes',
  ));

  $wp_customize->add_setting( 'logo_eje_tres' ); // Add setting for logo uploader

  // Add control for logo uploader (actual uploader)
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_eje_tres', array(
    'label'    => 'Icono',
    'section'  => 'menu_tres_sec',
    'settings' => 'logo_eje_tres',
    'description' => 'Sube aqui el icono en formato PNG, las medidas son de 110 x 110px.'
  ) ) );

  $wp_customize->add_setting('titulo_eje_tres',array(
    'default'=>'',
  ));


  $wp_customize->add_control('ctrl_titulo_tres',array(
    'label'=>'Titulo del tercer circulo',
    'type'=>'text',
    'section'=>'menu_tres_sec',
    'settings'=>'titulo_eje_tres',
  ));

  $wp_customize->add_setting( 'texto_eje_tres', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'texto_eje_tres', array(
    'label'      => 'Texto del eje: ',
    'section'    => 'menu_tres_sec',
    'type'       => 'textarea',
    'description' => 'Escribe aqui el texto a mostrar en el eje, por otro lado tienes la opcion de mostrar una lista de enlaces, para ello ve a menus y crea un menu el cual deberas seleccionar abajo, para mostrar este menu este campo de texto debe permanecer vacio.'

  ) );


  $wp_customize->add_setting( 'menu_tresSec', array(
    'default' => '',
  ) );
  $menu_list = array();
  $menus = get_terms('nav_menu');
  foreach($menus as $menu){
    //echo $menu->name . "<br><hr>";
    $menu_list[$menu->name] = $menu->name;

  }
  $wp_customize->add_control( 'menu_tresSec', array(
    'label'      => 'Selecciona el menu para esta seccion: ',
    'type'     => 'select',
    'section'  => 'menu_tres_sec',
    'choices'  => $menu_list,
  ));



   // Seccion del eje 4

  $wp_customize->add_section('menu_cuatro_sec',array(
    'title'=>'Cuarto circulo',
    'priority'=>40,
    'panel'=>'panel_ejes',
  ));

  $wp_customize->add_setting('visibilidad_eje_cuatro',array(
    'default'=>1,
  ));

  $wp_customize->add_control('ctrl_visibilidad_cuatro_circulo',array(
    'label'=>'Mostrar Cuarto círculo',
    'type'=>'checkbox',
    'section'=>'menu_cuatro_sec',
    'settings'=>'visibilidad_eje_cuatro',
  ));

  $wp_customize->add_setting( 'logo_eje_cuatro' ); // Add setting for logo uploader

  // Add control for logo uploader (actual uploader)
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_eje_cuatro', array(
    'label'    => 'Icono',
    'section'  => 'menu_cuatro_sec',
    'settings' => 'logo_eje_cuatro',
    'description' => 'Sube aqui el icono en formato PNG, las medidas son de 110 x 110px.'
  ) ) );

  $wp_customize->add_setting('titulo_eje_cuatro',array(
    'default'=>'',
  ));


  $wp_customize->add_control('ctrl_titulo_cuatro',array(
    'label'=>'Titulo del cuarto circulo',
    'type'=>'text',
    'section'=>'menu_cuatro_sec',
    'settings'=>'titulo_eje_cuatro',
  ));


$wp_customize->add_setting( 'texto_eje_cuatro', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'texto_eje_cuatro', array(
    'label'      => 'Texto del eje: ',
    'section'    => 'menu_cuatro_sec',
    'type'       => 'textarea',
    'description' => 'Escribe aqui el texto a mostrar en el eje, por otro lado tienes la opcion de mostrar una lista de enlaces, para ello ve a menus y crea un menu el cual deberas seleccionar abajo, para mostrar este menu este campo de texto debe permanecer vacio.'

  ) );

  $wp_customize->add_setting( 'menu_cuatroSec', array(
    'default' => '',
  ) );
  $menu_list = array();
  $menus = get_terms('nav_menu');
  foreach($menus as $menu){
    //echo $menu->name . "<br><hr>";
    $menu_list[$menu->name] = $menu->name;

  }
  $wp_customize->add_control( 'menu_cuatroSec', array(
    'label'      => 'Selecciona el menu para esta seccion: ',
    'type'     => 'select',
    'section'  => 'menu_cuatro_sec',
    'choices'  => $menu_list,
  ));



   // Seccion del eje 5

  $wp_customize->add_section('menu_cinco_sec',array(
    'title'=>'Quinto circulo',
    'priority'=>50,
    'panel'=>'panel_ejes',
  ));

  $wp_customize->add_setting('visibilidad_eje_cinco',array(
    'default'=>0,
  ));


  $wp_customize->add_control('ctrl_visibilidad_quinto_circulo',array(
    'label'=>'Mostrar quinto circulo',
    'type'=>'checkbox',
    'section'=>'menu_cinco_sec',
    'settings'=>'visibilidad_eje_cinco',
  ));

  $wp_customize->add_setting( 'logo_eje_cinco' ); // Add setting for logo uploader

  // Add control for logo uploader (actual uploader)
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_eje_cinco', array(
    'label'    => 'Icono',
    'section'  => 'menu_cinco_sec',
    'settings' => 'logo_eje_cinco',
    'description' => 'Sube aqui el icono en formato PNG, las medidas son de 110 x 110px.'
  ) ) );

  $wp_customize->add_setting('titulo_eje_cinco',array(
    'default'=>'',
  ));


  $wp_customize->add_control('ctrl_titulo_cinco',array(
    'label'=>'Titulo del quinto circulo',
    'type'=>'text',
    'section'=>'menu_cinco_sec',
    'settings'=>'titulo_eje_cinco',
  ));

$wp_customize->add_setting( 'texto_eje_cinco', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'texto_eje_cinco', array(
    'label'      => 'Texto del eje: ',
    'section'    => 'menu_cinco_sec',
    'type'       => 'textarea',
    'description' => 'Escribe aqui el texto a mostrar en el eje, por otro lado tienes la opcion de mostrar una lista de enlaces, para ello ve a menus y crea un menu el cual deberas seleccionar abajo, para mostrar este menu este campo de texto debe permanecer vacio.'

  ) );

  $wp_customize->add_setting( 'menu_cincoSec', array(
    'default' => '',
  ) );
  $menu_list = array();
  $menus = get_terms('nav_menu');
  foreach($menus as $menu){
    //echo $menu->name . "<br><hr>";
    $menu_list[$menu->name] = $menu->name;

  }
  $wp_customize->add_control( 'menu_cincoSec', array(
    'label'      => 'Selecciona el menu para esta seccion: ',
    'type'     => 'select',
    'section'  => 'menu_cinco_sec',
    'choices'  => $menu_list,
  ));





}
add_action('customize_register','panel');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Opciones del tema para el slider principal
/* Panel de slider principal */
add_action( 'customize_register', 'slider' );
function slider( $wp_customize ) {
  global $wpdb;
  /* Agregamos la seccion a slider */
  $wp_customize->add_section( 'slider_principal', array(
    'title'    => __( 'Ajustes del slider principal'),
    'priority' => 160,
  ) );

  /*Agregamos los setting a slider */
  $wp_customize->add_setting( 'id_site_slider', array(
    'default' => '',
    'transport' => 'refresh',
  ) );

  /* Consultamos si existe el sitio ingresado */
  $id_site = get_theme_mod('id_site_slider');
  $query_sites = "SELECT blog_id, path FROM tblms_blogs where blog_id = ".$id_site."";
  $id_site_query = $wpdb->get_results($query_sites);
  if (empty($id_site_query)) {
    $description_id_site_slider = 'El sitio no existe, ingresar sitio existente.';
  } else {
    $description_id_site_slider = $id_site_query[0]->path;
  }

  if (current_user_can('administrator')) {
    $wp_customize->add_control( 'id_site_slider', array(
      'label'      => 'ID sitio: ',
      'section'    => 'slider_principal',
      'type'       => 'number',
      'description' => $description_id_site_slider
    ));
  }

  $cats_list = array();
  $args = array('orderby' => 'name', 'order'   => 'ASC');
  $id_site = get_theme_mod('id_site_slider');
  if ($id_site != null || $id_site != 0) {
    $query_cats = "SELECT name as cat_name, slug FROM tblms_".$id_site."_term_taxonomy t
        INNER JOIN tblms_".$id_site."_terms wt on wt.term_id = t.term_id
        WHERE t.taxonomy='category'";
    $cats = $wpdb->get_results($query_cats);
  }else{
    $cats = get_categories( $args );
  }

  foreach($cats as $cat) {
    $cats_list[$cat->slug] = $cat->cat_name;
  }

  $wp_customize->add_setting( 'cat_slider', array(
    'default' => '',
  ) );

  $cats_list = array();
  $args = array('orderby' => 'name', 'order'   => 'ASC');
  $cats = get_categories( $args );
  foreach($cats as $cat) {
    $cats_list[$cat->slug] = $cat->cat_name;
  }

  $wp_customize->add_control( 'cat_slider', array(
    'label'      => 'Categoría de posts del slider principal: ',
    'type'     => 'select',
    'section'  => 'slider_principal',
    'choices'  => $cats_list,
  ));

  $wp_customize->add_setting('visibilidad_titulos_slide',array(
    'default'=>0,
  ));

  $wp_customize->add_control('ctrl_visibilidad_titulos_slide',array(
    'label'=>'Ocultar títulos de slider',
    'type'=>'checkbox',
    'section'=>'slider_principal',
    'settings'=>'visibilidad_titulos_slide',
  ));

  $wp_customize->add_setting( 'num_slides', array(
    'default' => '',
  ) );

  $wp_customize->add_control( 'num_slides', array(
    'label'      => 'Número de slides: ',
    'section'    => 'slider_principal',
    'type'       => 'select',
    'choices'  => array(
      '1' => __( '1' ),
      '2' => __( '2' ),
      '3' => __( '3' ),
      '4' => __( '4' ),
      '5' => __( '5' ),
      '6' => __( '6' ),
      '7' => __( '7' ),
      '8' => __( '8' ),
      '9' => __( '9' ),
      '10' => __( '10' ),
      '11' => __( '11' ),
      '12' => __( '12' ),
      '13' => __( '13' ),
      '14' => __( '14' ),
      '15' => __( '15' )
    )
  ) );

  $wp_customize->add_setting( 'img_default_slider' ); // Add setting for logo uploader

  // Add control for logo uploader (actual uploader)
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img_default_slider', array(
    'label'    => 'Imagen por defecto',
    'section'  => 'slider_principal',
    'description' => 'Imagen a mostrar por defecto, para las notas que no cuenten con una imagen para el carousel.'
  ) ) );
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}
/* Terminan las opciones del tema*/
?>
