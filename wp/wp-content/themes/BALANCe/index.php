<?php
get_header();
get_template_part('page/top/index');
if (have_posts()) :
  while (have_posts()) : the_post();
    the_title('<h1>', '</h1>');
    the_content();
  endwhile;
else :
  echo '<p>No content found</p>';
endif;
?>

<button>on click!</button>

<?php get_footer(); ?>
