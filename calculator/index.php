<!DOCTYPE html>
<html>
<head>
	<title>Prosty kalkulator</title>
	<meta charset="utf-8" /> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body background="123.jpg" style="background-size: 100%;background-repeat: no-repeat; text-align: center; position: absolute; top: 50%; bottom: 50%; width: 100%;">
	<h2>Prosty kalkulator</h2>
	<form action="index.php" method="POST">
		<input type="text" name="a" placeholder="podaj pierwszą liczbę">
		<select name="equasion">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
		<input type="text" name="b" placeholder="podaj drugą liczbę">
		<input type="submit" value="=">

	</form>


	<?php
	$a = $_POST['a'];
	$b = $_POST['b'];
	$equasion = $_POST['equasion'];
	$result="";
	switch ($equasion) {
		case '+':
			$result = $a + $b;
			break;
		case '-':
			$result = $a - $b;
			break;
		case '*':
			$result = $a * $b;
			break;
		case '/':
			$result = $a / $b;
			break;
	}
	?>
<p><strong>Wynik to: <?php echo $result; ?></strong></p
</body>
</html>
