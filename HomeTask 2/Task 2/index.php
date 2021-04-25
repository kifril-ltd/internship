<?php 

require_once('repos/PostRepo.php');

$postsRepo = new PostRepo();
$posts = $postsRepo->getAllPosts();

?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>Posts</title>
</head>

<body>
  <div class="container">
    <?php if (!empty($posts)): ?>
    <?php foreach($posts as $post): ?>
    <div class="card my-2">
      <div class="card-header">
        <h5 class="card-title"><?= $post['title'] ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $post['date'] ?></h6>
      </div>
      <div class="card-body">
        <p class="card-text"><?= $post['content'] ?></p>
      </div>
    </div>
    <?php endforeach ?>
    <? else: ?>
    <h1> Нет записей! </h1>
    <? endif ?>
  </div>
</body>

</html>