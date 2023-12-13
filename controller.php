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
		public function parse_user_input(){
			$output = null;
			if (isset($_POST["button"])){
				if (isset($_POST["radioButton"])){
					$radioValId = $_POST["radioButton"];
					$output = $this -> model -> get_description($radioValId);
				}
			}
			return $output;
		}
	}
 ?>

