<?php

function ept_products_product_add_meta_boxes_cb($post){
  add_meta_box('price', __('Product Price','e-potis'), 'ept_products_product_add_price');
  add_meta_box('availability', __('Product Availability','e-potis'), 'ept_products_product_add_availability');  
  //add_meta_box('image', 'Product Image', 'ept_products_product_add_image');
}
   