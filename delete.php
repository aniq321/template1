<?php 
include "header.php";
$id = $_GET['id'];
 mysqli_query($connection,"DELETE FROM user WHERE id='$id'");
 echo "<script>window.location='index.php'</script>";
include "footer.php";
?>