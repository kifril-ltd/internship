<?php 
    require_once('repos/PostRepo.php');

    $postsRepo = new PostRepo();
    $postsRepo->addPost();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Добавление поста</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/add_post.php">Добавить пост</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/change_post.php">Изменить пост</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container my-5">
        <form action="" method="post">
            <div class="mb-3">
                <label for="titleInput" class="form-label">Заголовок</label>
                <input type="text" class="form-control" id="titleInput" name="title" placeholder="Заголовок">
            </div>
            <div class="mb-3">
                <label for="contentInput" class="form-label">Текст поста</label>
                <textarea class="form-control" id="contentInput" name="content" rows="5" placeholder="Текст"></textarea>
            </div>
            <div class="mb-3">
                <label for="dateInput" class="form-label">Дата</label>
                <input type="text" class="form-control" id="titleInput" name="date" placeholder="dd.mm.yyyy">
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
        <? if (!empty($postsRepo->errors)): ?>
        <ul>
            <? foreach ($postsRepo->errors as $error): ?>
            <li> <?= $error ?> </li>
            <? endforeach ?>
        </ul>
        <? endif?>
    </div>
</body>

</html>