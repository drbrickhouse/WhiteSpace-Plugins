<?php
//Before
echo $before_widget;
if(!empty($title)){echo $before_title . $title . $after_title;}
?>

<div class="<?php echo $hero_class; ?>" style="background-image: url('<?php echo $img_path; ?>');">
  <?php
    if(empty($hero_layout)){ ?>
  <div class="col-md-12 hero-overlay">
    <?php echo $text_overlay; ?>
  </div>
    <?php } else {
  eval('?>'.$hero_layout);
   } ?>
</div>

<?php
//After The Widget
echo $after_widget;
?>
