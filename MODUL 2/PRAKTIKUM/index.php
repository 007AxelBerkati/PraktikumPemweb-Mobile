<!DOCTYPE html>
<html>
<head>
<title>Praktikum Modul 2</title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="nm" value="" placeholder="Username">
    <br>
    <input type="text" name="p" value="" placeholder="Password">
    <br>

    <input type="submit" name="s" value="LOGIN">
</form>

<?php
if(isset($_POST['s'])){
    $n = $_POST['nm'];
    $p = $_POST['p'];
    if(empty($n)){
        echo "Tolong Masukan Username anda<br>";
    }
    if(strlen($n)>7){
        echo "username tidak boleh lebih dari 7 karakter<br>";
    }
    if(empty($p)){
        echo "Tolong masukan password anda<br>";
    }
    if(strlen($p)<10){
        echo "Password tidak boleh kurang dari 10 karakter<br>";
    }
    if ( !preg_match("#[0-9]+#", $p) ) {
		echo "Password harus terdiri dari angka<br>";
	}

	if ( !preg_match("#[a-z]+#", $p) ) {
		echo "Password harus terdiri dari huruf kecil<br>";
	}

	if ( !preg_match("#[A-Z]+#", $p) ) {
		echo "Password harus terdiri dari huruf besar<br>";
	}

	if ( !preg_match("/[\'^£$%&*()}{@#~?><>,|=_+!-]/", $p) ) {
		echo "Password harus terdiri dari special character<br>";
	}
}
?>

</body>
</html>
    