<p>
  <label>Title:</label>
  <input class="widefat" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<p>
  <label>Number of CTA's to Display:</label>
  <input class="tiny-text" name="<?php echo $this->get_field_name('num_ctas'); ?>" type="text" value="<?php echo $num_ctas; ?>" />
</p>
<p>
  <label>CTA Classes:</label>
  <input class="widefat" name="<?php echo $this->get_field_name('cta_class'); ?>" type="text" value="<?php echo $cta_class; ?>" />
</p>
<p>
  <label>Layout:</label>
  <textarea class="widefat" rows="16" cols="20" name="<?php echo $this->get_field_name('cta_layout'); ?>"><?php echo $instance['cta_layout']; ?></textarea>
</p>
