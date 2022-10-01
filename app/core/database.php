<?php

Class Database
{


	public function db_connect()
	{
		try {
			$string = DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME.";";
			return $db = new PDO($string, DB_USER, DB_PASS);
		} catch(PDOExeption $e) {

			die($e->getMessage());
		}
	}

	public function read($query)
	{
		$DB = $this->db_connect();
		$stm = $DB->prepare($query);
		$stm->execute();
		return $result = $stm->fetchAll( PDO::FETCH_ASSOC );
	}


}

?>