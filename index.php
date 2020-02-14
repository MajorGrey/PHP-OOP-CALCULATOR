<?php 
include 'inc/calc.php';
if (isset($_POST['ca'])) {

	$fir = $_POST['fir'];
	$sec = $_POST['sec'];
	$cac = $_POST['cac'];

	$calculator = new Calc($fir, $sec, $cac);
	$result = $calculator->calcMethod();
}
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>X-Calculator</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div class="content">
		<div class="text-center mt-4">
			<a href="https:chuksokwuenu.com"><img class="img-fluid" src="assets/img/logo.png"></a>
			<br>
			<h3>Simple OOP Calculator</h3>
			<br>
			<!-- <p class="text-center">simple calculator made with php</p> -->
		</div>

		<div class="container">
			<div class="row ">
				<form method="post">
					<?php if (isset($result)) { ?>
						<div class="form-group">
							<input type="text" style="text-align: center;" class="form-control form-control-lg" value="<?php echo $result; ?>" disabled>
						</div>
					<?php } ?>
					<div class="form-group ">	
						<input class="form-control form-control-lg" type="number" name="fir" required>
					</div>
					<div class="form-group">
						<select class="form-control" name="cac" required>
						<option value ="+">Add</option>
						<option value="-">Subtract</option>
						<option value="*">Multiply</option>
						<option value="/">Divide</option>
					</select>
					</div>
					<div class="form-group">	
					<input class="form-control form-control-lg" type="number" name="sec" required>
					</div>
					<div class="text-center">
					<input type="submit" class="btn btn-dark btn-lg btn-block" name="ca" value="calculate">
					</div>
				</form>
			</div>
			<div class="footer mt-3" style="text-align: center; font-size: 14px; color: grey;">
            <br>
            &copy <?php echo date("Y"); ?> <a class="mb-0" style="text-decoration: none;color: grey;" href="https://chuksokwuenu.com" target="_blank">Chuks Okwuenu</a>
        </div>
		</div>
	</div>
</body>
</html>