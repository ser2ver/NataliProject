<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Рыбы', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item active" aria-current="page">Рыбы</li>
        </ol>
    </nav>
    <h4 class="text-center">Рыбы</h4>

    <div class="card float-left m-sm-1" style="width: 18rem;">
        <img src="<?= $path ?>ryby/img/bystrjanka-russkaja1.jpg" class="card-img-top" alt="Быстрянка русская">
        <div class="card-body">
            <h5 class="card-title">Быстрянка русская</h5>
            <a href="<?= $path ?>ryby/bystrjanka-russkaja.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
</div>
<?= showFooter($path) ?>
