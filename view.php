<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title></title>
</head>
<body>
 <?php 
	//include './model.php';
	// './controller.php';
	class View{
		private $model;
		private $controller;
		public function __construct(object $model, object $controller){
			$this -> controller = $controller;
			$this -> model = $model;
		}
		public function output(){
			echo  "<button type='submit' name='reset'>Clear</button>";
		}
		public function printList(){
			$mainList = $this-> model -> getList();
			foreach (array_values($mainList) as $i => $value){
				echo "<button type='submit' name = 'button' value='$value' id='$i' >$value</button>";
				
			}
		}
	}
 ?>
</body>
</html>

