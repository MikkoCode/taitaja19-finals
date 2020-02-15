<?php
if (isset($_GET['id'])) {
	mysqli_report(MYSQLI_REPORT_STRICT);
	$conn = mysqli_connect("mikko.rautavirta.test", "mikko.rautavirta", "4939", "mikko_main");
	$id = $_GET['id'];
    $sql = "DELETE FROM mikko_toiminnot WHERE id='{$id}'";
    if (mysqli_query($conn, $sql)) {
      header("Location: /toiminnot.php");
   	} else {
      echo "Virhe: " . $conn->error;
   	}
    
} else {
    header("Location: /admin.php");
	die();
}
?>