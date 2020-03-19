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
        <div class="card-header">Лазоревка белая</div>
        <div class="card-body">
            <p class="card-text">Лазоревка белая</p>
            <a href="<?= $path ?>pticy/lazorevka-belaja.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <div class="card-header">Змееяд</div>
        <div class="card-body">
            <p class="card-text">Змееяд</p>
            <a href="<?= $path ?>pticy/zmeejad.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <div class="card-header">Ходулочник</div>
        <div class="card-body">
            <p class="card-text">Ходулочник</p>
            <a href="<?= $path ?>pticy/hodulochnik.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <div class="card-header">Выпь малая</div>
        <div class="card-body">
            <p class="card-text">Выпь малая</p>
            <a href="<?= $path ?>pticy/vyp-malaja.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <div class="card-header">Лунь полевой</div>
        <div class="card-body">
            <p class="card-text">Лунь полевой</p>
            <a href="<?= $path ?>pticy/lun-polevoi.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
</div>
<?= showFooter($path) ?>
