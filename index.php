<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title></title>
</head>
<body>
 <?php 
	include './model.php';
	include './controller.php';
	include './view.php';
	
	$model = new Model();
	$controller = new Controller($model);
	$view = new View($model, $controller);
	//if (isset($_GET['action'])&& (!empty($_GET['action']))){
	//	$controller -> {$_GET['action']}();
	?>
	
	<form name="mainListForm" method="post">
		<?php 
			$view -> printList();
		?>
	</form>
	<?php 
		if (isset($_POST["button"])){
			echo $_POST["button"];
		}
	?>
	

</body>
</html>
