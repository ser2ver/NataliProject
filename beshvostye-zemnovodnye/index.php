<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Бесхвостые земноводные', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item active" aria-current="page">Бесхвостые земноводные</li>
        </ol>
    </nav>
    <h4 class="text-center">Бесхвостые земноводные</h4>

    <div class="card float-left m-sm-1" style="width: 18rem;">
        <img src="<?= $path ?>beshvostye-zemnovodnye/img/travjanaja-ljagushka1.jpg" class="card-img-top" alt="Травяная лягушка">
        <div class="card-body">
            <h5 class="card-title">Травяная лягушка</h5>
            <a href="<?= $path ?>beshvostye-zemnovodnye/travjanaja-ljagushka.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
</div>
<?= showFooter($path) ?>
