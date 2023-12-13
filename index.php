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
	?>

	<!-- Форма выбора товара -->
	<form name="mainListForm" method="post">
		<table>
			<th>Товар</th><th>Выбор</th>
			<?php 
				$view -> printList();
			?>
		</table>

		<button type='submit' name = 'button' value='$value' id='$i' >Выбрать</button>
	</form>

	<!-- Форма вывода описания -->
	<form>
		<p>Описание<Br>
		<textarea name="comment" cols="40" rows="3">
			<?php
				$result = $controller -> parse_user_input();
				$view -> print($result);
			?>
		</textarea></p>
	</form>

</body>
</html>
