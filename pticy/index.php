<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Птицы', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item active" aria-current="page">Птицы</li>
        </ol>
    </nav>
    <h4 class="text-center">Птицы</h4>

    <div class="card float-left m-sm-1" style="width: 18rem;">
        <img src="<?= $path ?>pticy/img/lazorevka-belaja1.jpg" class="card-img-top" alt="Лазоревка белая">
        <div class="card-body">
            <h5 class="card-title">Лазоревка белая</h5>
            <a href="<?= $path ?>pticy/lazorevka-belaja.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <img src="<?= $path ?>pticy/img/zmeejad1.jpg" class="card-img-top" alt="Змееяд">
        <div class="card-body">
            <h5 class="card-title">Змееяд</h5>
            <a href="<?= $path ?>pticy/zmeejad.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <img src="<?= $path ?>pticy/img/hodulochnik1.jpg" class="card-img-top" alt="Ходулочник">
        <div class="card-body">
            <h5 class="card-title">Ходулочник</h5>
            <a href="<?= $path ?>pticy/hodulochnik.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <img src="<?= $path ?>pticy/img/vyp-malaja1.jpg" class="card-img-top" alt="Выпь малая">
        <div class="card-body">
            <h5 class="card-title">Выпь малая</h5>
            <a href="<?= $path ?>pticy/vyp-malaja.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <img src="<?= $path ?>pticy/img/lun-polevoi1.jpg" class="card-img-top" alt="Лунь полевой">
        <div class="card-body">
            <h5 class="card-title">Лунь полевой</h5>
            <a href="<?= $path ?>pticy/lun-polevoi.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
</div>
<?= showFooter($path) ?>
