<?php

require_once(__DIR__ . '\..\core\Repository.php');
require_once(__DIR__ . '\..\models\Post.php');

/**
 * PostRepo -- Репозиторий для работы с таблицей posts в БД
 */
class PostRepo extends Repository {

	public $errors = [];
		
	/**
	 * getAllPosts -- возвращает все записи из таблицы posts
	 *
	 * @return array
	 */
	public function getAllPosts() {
		$result = $this->db->row('SELECT * FROM posts');
		return $result;
	}
	
	/**
	 * addPost -- Добавление нового поста
	 *
	 * @return void
	 */
	public function addPost() {
		if (!empty($_POST)) {
			$this->errors = Post::validate($_POST);
			if (empty($this->errors)) {
				$params = [
					'title' => $_POST['title'],
					'content' => $_POST['content'],
					'date' => $_POST['date'],
				];
				$this->db->query('INSERT into posts (title, content, date) VALUES (:title, :content, :date)', $params);
			}
		}
	}
}