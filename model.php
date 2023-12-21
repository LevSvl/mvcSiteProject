 <?php 
	class Model{
		public $string;
		public $mainList;
		public $descriptionList = array (1=>'480 гб', 2=>'250 гб', 3=>'512 гб');
		
		public function __construct(){
			try{
				$this ->conn = new PDO("pgsql:host=winhost;port=5432;dbname=test-db;user=postgres;password=postgres");
			}
			catch(PDOException $e) {
				die($e->getMessage());
			}
			
		}
		// вывести список товаров
		public function getConn(){
		}
		public function getList(){
			$stmt = 'select itemid,name from items order by itemid';
			$stmt = $this->conn->prepare($stmt);
			$stmt->execute();
			$results = array();

			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				array_push($results,$row['name']);
			}

			$this -> mainList = $results;
			return $this -> mainList;
		}
		// вывести описание конкретного товара
		public function get_description($id){
			$targetDesc = null; 
		
			$stmt = 'select itemid,description from iteminfo order by itemid';
			$stmt = $this->conn->prepare($stmt);
			$stmt->execute();
			$descriptionList = array();

			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				array_push($descriptionList,$row['description']);
			}



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
