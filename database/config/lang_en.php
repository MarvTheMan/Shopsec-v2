<?php
/*
* Start page
*/
$config['start_page'] = "1";
$config['rules_page'] = "4";
$config['page_search'] = "17";
$config['basket_page'] = "15";
$config['order_page'] = "16";
$config['order_print'] = "18";

$config['products_list'] = "6";

$config['currency_symbol'] = "EUR";
$config['orders_email'] = "c.vannimwegen@uu.nl";

/*
* Your website's title, description
*/
$config['logo'] = "MaskIt";
$config['title'] = "MaskIt";
$config['description'] = "Dé nummer een verkoper van niet-medische mondkapjes";
$config['slogan'] = "The only way to stay fit, is to mask it";
$config['foot_info'] = "Copyright MaskIt 2020 ©";

// Define all page ids where page tree for product list should be displayed
$aDisplayPagesTreeInProductsList = Array( $config['page_search']=>true );

/*
// Define characters that you want to be replaced in URL addresses, for example: ą to a, ü to u, etc
// Default charsets are specified in the core/libraries/trash.php in function change2Latin()
function change2Latin( $sContent ){
  return str_replace(
    Array( 'ś', 'ą' ), // from
    Array( 's', 'a' ), // to
    $sContent
  );
} // end function change2Latin
*/
?>