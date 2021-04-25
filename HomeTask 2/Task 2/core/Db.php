<?php

/**
 * Db -- Класс предоставляет функции для работы с БД
 */
class Db {

	protected $db;
	
	public function __construct() {
		$config = require __DIR__ . '/../config/db_config.php';
		$this->db = new PDO('pgsql:host='.$config['host'].';port='.$config['port'].';dbname='.$config['name'].'', $config['user'], $config['password']);
	}
	
	/**
	 * query -- Выполняет произвольный запрос к базе данных
	 *
	 * @param  string $sql Текст SQL запроса
	 * @param  array $params Параметры передаваемые в SQL запрос
	 * @return stmt
	 */
	public function query($sql, $params = []) {
		$stmt = $this->db->prepare($sql);
		if (!empty($params)) {
			foreach ($params as $key => $val) {
				if (is_int($val)) {
					$type = PDO::PARAM_INT;
				} else {
					$type = PDO::PARAM_STR;
				}
				$stmt->bindValue(':'.$key, $val, $type); 
			}
		}
		$stmt->execute();
		return $stmt;
	}
	
	/**
	 * row -- Возвращает строки, соответствующие SQL запросу 
	 *
	 * @param  string $sql Текст SQL запроса
	 * @param  array $params Параметры передаваемые в SQL запрос
	 * @return array
	 */
	public function row($sql, $params = []) {
		$result = $this->query($sql, $params);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}
}
