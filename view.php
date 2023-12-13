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
		public function print($output){
			echo  "$output";
		}
		public function printList(){
			$mainList = $this-> model -> getList();
			foreach (array_values($mainList) as $itemId => $value){

				echo"<tr>
						<td>$value</td>
						<td><input type='radio' id='$itemId' name='radioButton' value='$itemId'/></td> 
					</tr>";
				
			}
		}
	}
 ?>

