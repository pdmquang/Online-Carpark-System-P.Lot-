<!-- Done By: Haziq -->

<?php
  # initialise class
	class local	{
		private $id;
		private $address;
		private $lat;
		private $lng;
		private $conn;
		private $tableName = "markers";

   #initialise functions for each attributes for map
		function setId($id) { $this->id = $id; }
		function getId() { return $this->id; }
		function setAddress($address) { $this->address = $address; }
		function getAddress() { return $this->address; }
		function setLat($lat) { $this->lat = $lat; }
		function getLat() { return $this->lat; }
		function setLng($lng) { $this->lng = $lng; }
		function getLng() { return $this->lng; }

   #connect to database
		public function __construct() {
			require_once('map/DBConnect.php');
			$conn = new DbConnect;
			$this->conn = $conn->connect();
		}

    # set function to read location without lng and lat (additional features)
		public function getLocationBlankLatLng() {
			$sql = "SELECT * FROM $this->tableName WHERE lng IS NULL and lat IS NULL";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

	 # set function to read all location
		public function getAllLocation() {
			$sql = "SELECT * FROM $this->tableName";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

   # set function to update location
		public function updateLocationWithLatLng() {
			$sql = "UPDATE $this->tableName SET lat = :lat, lng = :lng WHERE id = :id";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindParam(':lat', $this->lat);
			$stmt->bindParam(':lng', $this->lng);
			$stmt->bindParam(':id', $this->id);

			if($stmt->execute()) {
				return true;
			} else {
				return false;
			}
		}
	}

?>
