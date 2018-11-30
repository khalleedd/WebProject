<?php
class DB
{
	private $con = null;
	function __construct($dbname)
	{
		try{
			$this->con = new PDO("mysql:host=localhost;charset=utf8","root",'');
			$this->con->exec("CREATE DATABASE IF NOT EXISTS $dbname");
			$this->con->exec("use ". $dbname);
			}
		catch(PDOException $ex){echo("field connection becouse of ".$ex.getMessage());}
	}
	public function myExec($query)
	{
		return $this->con->exec($query);
	}
	public function add_Rem_updat_Row($query,$params=array())
	{
		$stmt = $this->con->prepare($query);
        $stmt->execute($params);
        return $stmt->rowCount();

	}
	public function getCount($query,$params=array())
	{
		$stmt = $this->con->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchColumn();
    }

	public function getAll($query,$params=array())
	{ 
		$stm = $this->con->prepare($query);
        $stm->execute($params);
        return $stm->fetchAll();
    }
    public function getRow($query,$params=array())
	{ 
		$stm = $this->con->prepare($query);
        $stm->execute($params);
        return $stm->fetch();
    }
}	
