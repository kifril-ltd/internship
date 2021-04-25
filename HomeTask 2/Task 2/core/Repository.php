<?php

require_once('Db.php');

/**
 * Repository -- абстрактный класс для работы с БД
 */
abstract class Repository {

	public $db;
	
	public function __construct() {
		$this->db = new Db;
	}

}