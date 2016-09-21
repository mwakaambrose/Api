<?php

/**
 * Created by PhpStorm.
 * User: AMBROSE
 * Date: 26-Sep-22
 * Time: 17:52
 */

require_once 'dbconnect.php';

class api {

	public $connection;

	public function __construct() {
		$this->getConnection();
	}

	public function getData(){
		$qry = "SELECT * FROM today";
		$result = $this->connection->query($qry);
		$assoc = $result->fetch_assoc();
		
		$data = array();
		$data[] = $assoc;
		
		echo json_encode($data);
	}

	private function getConnection(){
		$dbconnect = new dbconnect();
		$this->connection = $dbconnect->connect();
	}

}

$api = new api();
$api->getData();