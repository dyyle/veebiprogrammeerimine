<?php

	$useremail= "";
	$userpassword = "";
	$firstname = "";
	$lastname = "";
	$gender = "";

	
	if(isset($_POST["logiSisse"])) {

		if (isset($_POST["loginEmail"]) && !empty($_POST["loginEmail"])){
			$useremail = $_POST["loginEmail"];
		} else {
			$useremail = "";
			echo "Kasutajanime ei sisestatud<br>";
		}

		if (isset($_POST["loginPassword"]) && !empty($_POST["loginPassword"])){
			$userpassword = $_POST["loginPassword"];
		} else {
			$userpassword = "";
			echo "Parooli ei sisestatud<br>";
		}
	};

	if(isset($_POST["Registreeri"])) {

		if (isset($_POST["signupFirstName"]) && !empty($_POST["signupFirstName"])){
			$firstname = $_POST["signupFirstName"];
		} else {
			$firstname = "";
			echo "Eesnime ei sisestatud<br>";
		}

		if (isset($_POST["signupFamilyName"]) && !empty($_POST["signupFamilyName"])){
			$lastname = $_POST["signupFamilyName"];
		} else {
			$lastname = "";
			echo "Perenime ei sisestatud<br>";
		}

		if (isset($_POST["gender"])) {
			$gender = $_POST["gender"];
			echo "Sugu".$gender;
		}

		if (isset($_POST["signupEmail"]) && !empty($_POST["signupEmail"])){
			$useremail = $_POST["signupEmail"];
		} else {
			$useremail = "";
			echo "Kasutajanime ei sisestatud<br>";
		}

		if (isset($_POST["signupPassword"]) && !empty($_POST["signupPassword"])){
			$userpassword = $_POST["signupPassword"];
		} else {
			$userpassword = "";
			echo "Parooli ei sisestatud<br>";
		}
	};
	
	$monthNamesEt = ["jaanuar", "veebruar", "märts", "aprill", "mai", "juuni", "juuli", "august", "september", "oktoober", "november", "detsember"];
	$signupMonthSelectHTML= "";
	$signupMonthSelectHTML .= '<select name="signupBirthMonth">
	?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="container">

<h1> Logi sisse </h1>
<form method="post">
<label> Kasutajanimi: </label> <br>
<input name="loginEmail" type="email" value="<?php echo $useremail ?>"> <br>
<label> Salasõna: </label><br>
<input name="loginPassword" type="password">
<br><br>
<input name="logiSisse" type="submit" value="Logi sisse">
</form>
<br> <br>
<h1> Registreeru </h1>
<form method="post">
<label>Eesnimi: </label>
<input name="signupFirstName" type="text" value="<?php echo $firstname ?>"> <br>
<label>Perekonnanimi:</label>
<input name="signupFamilyName" type="text" value="<?php echo $lastname ?>"> <br>
<label>SUGU: </label> <br>
<label for="1">Mees</label>
<input type="radio" name="gender" value="man" checked> <br>
<label for="2">Naine</label>
<input type="radio" name="gender" value="woman"> <br>
<label>E-mail: </label>
<input name="signupEmail" type="email" value="<?php echo $useremail ?>"> <br>
<label>Salasõna: </label>
<input name="signupPassword" type="password"> <br>
<br>
<input name="Registreeri" type="submit" value="Registreeri"> <br>
</form>
</div>
</body>
</html>