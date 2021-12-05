<?php
session_start();
if(!isset($_SESSION['email'])) {
	echo "<script>
			window.location.href=('../index.php');
			</script>";
}
if($_SESSION['level']!="user"){
	session_destroy();
	echo "<script>
			window.location.href=('../index.php');
			</script>";
		}
?>
