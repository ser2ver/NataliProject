<?php
if ($_SERVER['SCRIPT_FILENAME'] === __FILE__) {
    die('Kwaheri rafiki');
}

function showHeader($path, $title, $section)
{
    $activeHome = $section === 'home' ? ' active' : '';
    $activeCategs = $section === 'categs' ? ' active' : '';
    $activeBesson = $section === 'besson' ? ' active' : '';
    $activeAuthor = $section === 'author' ? ' active' : '';
    $activeProject = $section === 'project' ? ' active' : '';

    $text = <<<EOT
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>$title</title>

    <link rel="stylesheet" href="{$path}css/bootstrap.min.css">

    <script src="{$path}js/jquery-3.4.1.slim.js"></script>
    <script src="{$path}js/popper.js"></script>
    <script src="{$path}js/bootstrap.min.js"></script>
    
    <style type="text/css">
        footer {
            position: fixed;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header class="navbar navbar-expand-sm navbar-light sticky-top" style="background-color: #96bcfe;">
        <a href="{$path}index.php" class="navbar-brand">
            <img src="{$path}img/logo.png" width="52" alt="Animals & Plants">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link{$activeHome}" href="{$path}index.php">Главная</a>
                <a class="nav-item nav-link{$activeCategs}" href="{$path}categories.php">Категории</a>
                <a class="nav-item nav-link{$activeBesson}" href="{$path}bessonovka.php">О Бессоновке</a>
                <a class="nav-item nav-link{$activeAuthor}" href="{$path}author.php">Об авторе</a>
                <a class="nav-item nav-link{$activeProject}" href="{$path}project.php">О проекте</a>
            </div>
        </div>
    </header>
EOT;
    return $text;
}

function showFooter($path) {
    return <<<EOT
<br/>
<footer class="container-fluid navbar-expand-sm navbar-light text-right" style="background-color: #96bcfe;">&copy; Бессоновка 2020</footer>
</body>
</html>
EOT;
}
