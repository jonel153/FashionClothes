<?php

session_start();
$expire = time()-86400;
setcookie("rent",$_SESSION['email'], $expire);
setcookie("name",$_SESSION['name'], $expire);
session_destroy();

header("Refresh:5; url=/bootstrap/FashionClothes");
include("header.php");
echo '<div class="alert alert-success">
  <strong>Success!</strong>Logout successfully!. You will redirect in 3 seconds....
</div>';
?>