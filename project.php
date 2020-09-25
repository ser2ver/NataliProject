<?php
$path = '';
include $path.'lib.php';
echo showHeader($path, 'Проект - О проекте', 'project');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item active" aria-current="page">О проекте</li>
        </ol>
    </nav>
    <h4 class="text-center">О проекте</h4>
    <p>
        В работе над проектом были использованы следующие инструменты:
        <img src="img/qr-code.gif" alt="QR-code" class="float-right"/>
    </p>
    <ul>
        <li>HTML</li>
        <li>CSS</li>
        <li>JavaScript</li>
        <li>Bootstrap</li>
        <li>PHP</li>
        <li>Git</li>
        <li>Azure</li>
        <li>PhpStorm</li>
        <li>Gimp</li>
        <li>Linux</li>
    </ul>
    <p>
        Исходный код проекта доступен по адесу:<br/>
        <a href="https://github.com/ser2ver/NataliProject">https://github.com/ser2ver/NataliProject</a>
    </p>
</div>
<?= showFooter($path) ?>
