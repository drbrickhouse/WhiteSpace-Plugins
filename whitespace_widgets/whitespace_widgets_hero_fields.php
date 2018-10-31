<p>
  <label>Title:</label>
  <input class="widefat" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<p>
  <label>Image Path:</label>
  <input class="widefat" name="<?php echo $this->get_field_name('img_path'); ?>" type="text" value="<?php echo $img_path; ?>" />
</p>
<p>
  <label>Hero Classes:</label>
  <input class="widefat" name="<?php echo $this->get_field_name('hero_class'); ?>" type="text" value="<?php echo $hero_class; ?>" />
</p>
<p>
  <label>Text Overlay:</label>
  <textarea class="widefat" rows="16" cols="20" name="<?php echo $this->get_field_name('text_overlay'); ?>"><?php echo $instance['text_overlay']; ?></textarea>
</p>
<p>
  <label>Layout:</label>
  <textarea class="widefat" rows="16" cols="20" name="<?php echo $this->get_field_name('hero_layout'); ?>"><?php echo $instance['hero_layout']; ?></textarea>
</p>
