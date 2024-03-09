<?php
error_reporting(E_ALL);

class DB {
	public $mysqli;
	function __construct(){
		$this->mysqli = new mysqli("localhost", "jarek", "1234", "shop");
		if ($this->mysqli->errno) {
			echo "Failed to connect to mysqli: ".$this->mysqli->error;
			exit();
		}
	}
	function __destruct() {
		$this->mysqli->close();
	}
}
