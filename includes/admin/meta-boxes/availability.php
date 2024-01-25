<?php

function ept_products_product_add_availability($post){
  $oldAvail = get_post_meta($post->ID, 'product_avail', true);
  ?>
    <label for="Available"><?php _e('Available', 'e-potis') ?>:</label>
      <select name="ept_products_product_avail">
      <option value = 1
          <?php if($oldAvail == 1) {echo "selected";} ?> > 
          <?php _e('Available', 'e-potis') ?> </option>
        <option value = 0
          <?php if($oldAvail == 0) {echo "selected";} ?> >
          <?php _e('Not Available', 'e-potis') ?> </option>
          <p class="description"><?php _e('The product\'s availability', 'e-potis')?> </p>  
</select>
  <?php
}

