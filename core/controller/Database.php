<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="bc3391548c80be";$this->pass="aaa94689";$this->host="us-cdbr-east-05.cleardb.net";$this->ddbb="heroku_12f3139c169dc03";
	}

	function connect(){
		$this->user="bc3391548c80be";$this->pass="aaa94689";$this->host="us-cdbr-east-05.cleardb.net";$this->ddbb="heroku_12f3139c169dc03";
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
