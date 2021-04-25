<?php

require_once(__DIR__ . '\..\core\Repository.php');

/**
 * PostRepo -- Репозиторий для работы с таблицей posts в БД
 */
class PostRepo extends Repository {
		
	/**
	 * getAllPosts -- возвращает все записи из таблицы posts
	 *
	 * @return array
	 */
	public function getAllPosts() {
		$result = $this->db->row('SELECT * FROM posts');
		return $result;
	}
}