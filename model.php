 <?php 
	class Model{
		public $string;
		public $mainList = array (1=>"Kingston", 2=>"SeaGate", 3=>'WD');
		public $descriptionList = array (1=>'480 гб', 2=>'250 гб', 3=>'512 гб');
		
		public function __construct(){
			$this->string = "SSD-диск марки ";
		}
		// вывести список товаров
		public function getList(){
			return $this -> mainList;
		}
		// вывести описание конкретного товара
		public function get_description($id){
			$targetDesc = null; 
			$descriptionList = $this-> descriptionList;

			foreach (array_values($descriptionList) as $itemId => $itemDesc){
				if ($id == $itemId){
					$targetDesc = $itemDesc;
					break;
				}
			}
			return $targetDesc; 
		}
	}
	
 ?>
