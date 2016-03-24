<?php 
	
class Database{

	public $server;
	public $username;
	public $password;
	public $dbname;
	public $connection;

	public function __construct($server,$username,$password,$dbname){

		$this->server = $server;
		$this->username = $username;
		$this->password = $password;
		$this->dbname = $dbname;

		$this->connection = mysqli_connect($this->server,$this->username,$this->password,$this->dbname);

		if($this->connection){
			echo "connected";
		}else{
			echo "Error! ";
		}

	}

}

class News extends Database 
{

	public $newsTitle;
	public $newsDate;
	public $newsDesc;
	public $status;
	public $connection;

public function __construct($connection,$newsTitle,$newsDate,$newsDesc,$status)

	{
		$this->newsTitle=$newsTitle;
		$this->newsDate=$newsDate;
		$this->newsDesc=$newsDesc;
		$this->status=$status;
		$this->connection=$connection;
		$this->insertNews();
	}

	public function insertNews() 
	{

		$sql = "INSERT INTO news (title,desc,date,status)
		VALUES ('$this->newsTitle','$this->newsDesc','$this->newsDate','$this->status')";
		echo $sql."<br>";
		$query=mysqli_query($this->connection,$sql);

if($query) {
	echo "success";
}else{
	echo "error";
}

	}

}

 ?>