<?php get_header(); ?>
<!-- Cette page n'est pas supposé apparaitre -->
<!-- sauf pour l'instant la page newsletter -->
<?php
if ( is_page('newsletter') ) {
      echo 'coucou';
}
?>
<?php get_footer(); ?>