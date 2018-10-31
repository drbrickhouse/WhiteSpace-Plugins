<?php
//Before
echo $before_widget;
if(!empty($title)){echo $before_title . $title . $after_title;}
?>
<div class="cta-area">
<?php
//The below loop is meant to work with the layout field. If I can ever find a working solution, I will switch to this.

$args = array( 'post_type' => 'ctas', 'posts_per_page' => $num_ctas );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <div class="<?php echo $cta_class; ?>">
    <?php
      if(!empty($cta_layout)){
        eval('?>'.$cta_layout);
      } else { ?>
    <h3><?php the_title(); ?></h3>
    <?php the_content(); ?>
    <a href="<?php the_field('link'); ?>" class="btn btn-primary">Read More</a>
    <?php } ?>
  </div>
<?php endwhile; ?>

<div class="clear"></div>

<?php
//This loop is a fallback to using layout files in case the other version doesn't work out.
/*
$args = array( 'post_type' => 'ctas', 'posts_per_page' => $num_ctas );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <div class="<?php echo $cta_class; ?>">
    <?php require ( 'whitespace_widget_layouts/ctas.php' ); ?>
  </div>
<?php endwhile;
*/
?>
</div>
<?php
//After The Widget
echo $after_widget;
?>
