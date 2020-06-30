<?php
// Agregado por JL 04-06-2019
if (function_exists("register_field_group")) {
  register_field_group(array(
    'id' => 'acf_opciones-de-la-entrada',
    'title' => 'Opciones de la entrada',
    'fields' => array(
      array(
        'key' => 'field_56b12e8353122',
        'label' => 'Enlace externo',
        'name' => 'ENLACE_EXTERNO',
        'type' => 'text',
        'instructions' => '(*) Requerido en caso referenciar un link enlace externo (PDF, Sitio externo, Publicación anterior)',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_56b12e8353123',
        'label' => '¿Deshabilitar Permalink?',
        'name' => 'DISABLED_PERMALINK',
        'instructions'  => '(*) Requerido si desea omitir el link hacía el post (También deshabilita el enlace externo)',
        'default_value' => '0',
        'ui' => 'stylized',
        'type' => 'true_false'
      ),
      array(
        'key' => 'field_56b12be1e3325',
        'label' => 'Portada de "Noticias Recientes"',
        'name' => 'PORTADA_NOTICIA_RECIENTE',
        'type' => 'image',
        'instructions' => '(*) Requerido en caso de usar como "Mostrar en noticias recientes"',
        'save_format' => 'url',
        'preview_size' => 'thumbnail',
        'library' => 'all',
      ),
      array(
        'key' => 'field_56b21ac176510',
        'label' => 'Portada de "Lo destacado"',
        'name' => 'PORTADA_DESTACADO',
        'type' => 'image',
        'instructions' => '(*) Requerido en caso de usar como "Mostrar en lo destacado"',
        'save_format' => 'url',
        'preview_size' => 'thumbnail',
        'library' => 'all',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array(
      'position' => 'normal',
      'layout' => 'default',
      'hide_on_screen' => array(
      ),
    ),
    'menu_order' => 0,
  ));
}
// ----------------------------------------------------------------
?>
