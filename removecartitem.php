<?php
session_start();

if (isset($_GET['id'])) {
  $proid = $_GET['id'];

  unset($_SESSION['cart'][$proid]);
  header("location: cart.php");
}

;?>
<?php
include ('removecartitem.php');
$id = $_GET['pro_id'];
$delete_data"delete from product where deleteproduct = '$pro_id' ";
$database->exec($delete_data);
?>