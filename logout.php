
<?php include "header.php";?>
<?php

session_start();

echo $_SESSION['email'];
$expire = time()-86400;
setcookie("rent",$_SESSION['email'], $expire);
session_destroy();
echo "Logout successful! You will redirect in 3 seconds!";
header("Refresh:3; url=/bootstrap/FashionClothes");
?>