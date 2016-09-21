<?php

/**
 * Created by PhpStorm.
 * User: AMBROSE
 * Date: 26-Sep-22
 * Time: 17:51
 */
class dbconnect {

	public function connect (){

		define("DBHOST","localhost");
		define("DBUSER","root");
		define("DBPASSWORD", "");
		define("DBNAME", "forecast");

		$mysqli_connection = new mysqli(DBHOST,DBUSER,DBPASSWORD, DBNAME);

		if($mysqli_connection->connect_errno){

			echo $mysqli_connection->connect_error;
		}else{
			return $mysqli_connection;
		}

	}
}