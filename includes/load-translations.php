<?php 
function ept_products_load_php_translations() {
  load_plugin_textdomain(
    'e-potis',
    false,
    "ept-products/languages"
  );
}

function ept_products_load_block_translations(){
  $blocks = [
    'ept-products-single-post-details-editor-script',
    'ept-products-product-query-editor-script',
    'ept-products-shopping-cart-editor-script',
    'ept-products-mini-cart-editor-script',
    'ept-products-single-post-details-view-script',
    'ept-products-product-query-view-script',
    'ept-products-shopping-cart-view-script',
    'ept-products-mini-cart-view-script'
  ];

  foreach($blocks as $block){
    wp_set_script_translations(
      $block,
      'e-potis',
      EPT_PRODUCTS_PLUGIN_DIR . "languages"
    );
  }
}