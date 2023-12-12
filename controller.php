<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title></title>
</head>
<body>
 <?php 
	//include './model.php';
	class Controller{
		private $model;
		public function __construct(object $model){
			$this -> model = $model;
		}
		public function clicked(){
			$this -> model -> $string = "Данные обновлены";
		}
	}
 ?>
</body>
</html>

