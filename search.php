<?php get_header(); ?>

<?php
global $query_string;
rewind_posts();
$query_args = explode("&", $query_string);
$search_query = array();
foreach ($query_args as $key => $string) {
    $query_split = explode("=", $string);
    $search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$loop = new WP_Query($search_query);
$total_results = $loop->found_posts;
wp_reset_postdata();
?>

<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <?php $search = filter_input(INPUT_GET, 's', FILTER_SANITIZE_SPECIAL_CHARS); ?>
            <h1 class="entry-title" style='font-weight:bold;color:#000'>Resultados de la b&uacute;squeda para: '<?php echo $search; ?>'</h1>
            <?php
            if ($loop->have_posts()):
                while ($loop->have_posts()): $loop->the_post();

                    ?>
                    <div class="row noticia">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="<?php the_permalink(); ?>">
                                        <h5 class="title_secnot"><?php the_title(); ?></h5>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <!--<a class="cover iluminar" style="background-image: url(<?php echo $image[0]; ?>)" href="<?php the_permalink(); ?>">&nbsp;</a>-->

                                        <a href="<?php the_permalink(); ?>"><img class="img-fluid" src="http://www.administracion.oaxaca.gob.mx/wp-content/themes/dependencias/img/portadacomunicados1024x768.jpg"></a>

                                </div>
                                <div class="col-md-9 excerp_noticia">
                                    <p>
                                        <?php
                                        the_time('d &#100;&#101; F, Y');
                                        ?>
                                    </p>

                                    <p><?php the_excerpt(); ?></p>
                                    <div class="text-right"><a href="<?php the_permalink(); ?>">Leer más +</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
              else:?>
                <h5>No se han encontrado resultados para tu busqueda.</h5>

            <?php
          endif;
            wp_reset_postdata();
            ?>
            <div class="row navegacion">
                <div class="col-md-6 text-left"><?php next_posts_link('Noticias anteriores', $loop->max_num_pages); ?></div>
                <div class="col-md-6 text-right"><?php previous_posts_link('Noticias nuevas', $loop->max_num_pages); ?></div>
            </div>
        </div>

    </div>
</div>





<?php get_footer(); ?>
