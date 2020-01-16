<?php
class Database {
	private $hostname = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname = "database_real_estate";
	private $dblink;
	private $result = true;
	private $records;
	private $affectedRows;


	function __construct($dbname)
	{
		$this->$dbname = $dbname;
		$this->Connect();
	}

	public function getResult()
	{
		return $this->result;
	}

	function __destruct()
	{
		$this->dblink->close();
	}


	function Connect()
	{
		$this->dblink = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
		if($this->dblink->connect_errno)
		{
			printf("Konekcija neuspesna: %s\n",  $mysqli->connect_error);
			exit();
		}
		$this->dblink->set_charset("utf8");
	}

function unesiNekretninu($pod) {
			$mysqli = new mysqli("localhost", "root", "", "database_real_estate");
			
			$name = $_POST['name'];
	  $charges = $_POST['charges'];
	  $adress = $_POST['adress'];
	  $floor = $_POST['floor'];
	  $description = $_POST['description'];
	  $owner = $_POST['owner'];
	  
	  $file_name = $_FILES["image"]["name"];
      $upit = "INSERT INTO real_estate(name,monthly_charges,images,address,floor_space, description, owner) VALUES ('$name','$charges','$file_name','$adress','$floor','$description','$owner')";  

			$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
			fwrite($myfile, $upit);
			if($mysqli->query($upit))
			{
				$this ->result = true;
			}
			else
			{
				$this->result = false;
			}
			$mysqli->close();
		}

	function vratiAgente() {
	  $mysqli = new mysqli("localhost", "root", "", "database_real_estate");
	  $upit = 'SELECT * FROM agent';
	  $this ->result = $mysqli->query($upit);
	  $mysqli->close();
	}

	function vratiNekretninu($id) {
	  $mysqli = new mysqli("localhost", "root", "", "database_real_estate");
	  $q = 'SELECT * FROM real_estate c where c.id='.$id;
	  $this ->result = $mysqli->query($q);
	  $mysqli->close();
	}
	function vratiNekretnine() {
	  $mysqli = new mysqli("localhost", "root", "", "database_real_estate");
	  $q = 'SELECT * FROM real_estate';
	  $this ->result = $mysqli->query($q);
	  $mysqli->close();
	}



	function ExecuteQuery($query)
	{
		if($this->result = $this->dblink->query($query)){
			if (isset($this->result->num_rows)) $this->records         = $this->result->num_rows;
				if (isset($this->dblink->affected_rows)) $this->affected        = $this->dblink->affected_rows;
					return true;
		}
		else{
			return false;
		}
	}
}
?>
