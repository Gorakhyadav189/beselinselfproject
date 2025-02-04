<?php 
session_start();

$return_array = array();
if(isset($_POST['product_id']) && !empty($_POST['product_id'])){


 $p_id = $_POST['product_id'];
$_SESSION[]=array();

 $_SESSION['cart'] = $p_id;

 $return_array['success'] = true;
 $return_array['msg'] = 'product added to cart';


 print_r(json_encode($return_array));

}


// First check if product Id already on session cart --> Product already exists 
// Add multiple Id's on session cart.

?>