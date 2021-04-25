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

	public function changePost() {
		if (!empty($_POST && !empty($_GET))) {
			$this->errors = Post::validate($_POST);
			if (empty($this->errors)) {
				$params = [
					'id' => $_GET['id'],
					'title' => $_POST['title'],
					'content' => $_POST['content'],
					'date' => $_POST['date'],
				];
				$this->db->query('UPDATE posts SET title=:title, content=:content, date=:date WHERE id=:id', $params);
				header("Refresh:0");
			}
		}
	}

	public function getPostById($id) {
		return $this->db->row("SELECT title, content, to_char(date, 'DD.MM.YYYY') AS date FROM posts WHERE id=:id", ['id' => $id])[0];
	}
}