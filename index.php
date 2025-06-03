<?php get_header(); ?>

<?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        the_title( '<h1 class="entry-title">', '</h1>' );
        ?>
<div class="entry-content">
    <?php the_content(); ?>
</div>
<?php
      }
    }
    ?>


<h1 class="text-3xl font-bold underline">Hello World</h1>

<?php get_footer(); ?>