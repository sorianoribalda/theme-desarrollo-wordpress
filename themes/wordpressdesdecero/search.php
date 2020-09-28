<?php 
get_header();
if(have_posts()):
    while(have_posts()):
        the_post();
// escribimos lo que va en el bucle
?>
    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
    <p><span><?php the_date() ?></span></p>
    <p><span><?php the_author() ?></span></p>
    <p><span><?php the_category() ?></span></p>
    <p><?php the_excerpt() ?></p>
    <hr>
<?php
// hasta aquí lo que va del bucle
    endwhile;
else:
    echo 'No hay resultados para tu búsqueda';


endif;


get_footer();

?>