<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title></title>
</head>
<body>
 <?php 
	class Model{
		public $string;
		public $mainList = array (1=>"Kingston", 2=>"SeaGate", 3=>'WD');
		private $descriptionDict = array (1=>'480 гб', 2=>'250 гб', 3=>'512 гб');
		
		public function __construct(){
			$this->string = "SSD-диск марки ";
		}
		// вывести список товаров
		public function getList(){
			return $this -> mainList;
		}
		// вывести описание конкретного товара
		public function get_description($id){
			echo '1';
		}
	}
	
 ?>
</body>
</html>

