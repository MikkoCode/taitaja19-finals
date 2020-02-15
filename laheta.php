<?php
if (!empty($_POST)) {
	mysqli_report(MYSQLI_REPORT_STRICT);
	$conn = mysqli_connect("mikko.rautavirta.test", "mikko.rautavirta", "4939", "mikko_main");
	$conn->set_charset('utf8');
	$stack = array();
	
	foreach ($_POST as $key => $value) {
		if ($key != "siirra"){
			if ($key != "kayttoaika"){
				$komento = htmlspecialchars($value);
				array_push($stack,$komento);
			}
			
		}
	}

	$jsoni = json_encode($stack);
	session_start();
	$user = $_SESSION['username'];
	$kayttoaika = (int)$_POST['kayttoaika'];
	echo $kayttoaika;
	$query = "SELECT id FROM mikko_users WHERE username='{$user}'";
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) > 0 ){
		$row = mysqli_fetch_assoc($result);
		$userid = $row["id"];
	} else {
		echo "user not found";
	}

    $sql = "INSERT INTO mikko_toimintoloki (toiminnot, kayttoaika, kayttaja) VALUES ('{$jsoni}', $kayttoaika, '{$userid}')";
    if (mysqli_query($conn, $sql)) {
      header("Location: /toiminnot.php?success=true");
   	} else {
      echo "Virhe: " . $conn->error;
   	}
    
} else {
    header("Location: /toiminnot.php");
	die();
}
?>