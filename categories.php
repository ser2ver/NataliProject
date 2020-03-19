<?php
$path = '';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item active" aria-current="page">Категории</li>
        </ol>
    </nav>
    <h4 class="text-center">Категории</h4>

    <div class="card float-left m-sm-1" style="width: 18rem;">
        <div class="card-header">Рыбы</div>
        <div class="card-body">
            <p class="card-text">Семейство "Рыбы"</p>
            <a href="<?= $path ?>ryby/index.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <div class="card-header">Насекомые</div>
        <div class="card-body">
            <p class="card-text">Семейство "Насекомые"</p>
            <a href="<?= $path ?>nasekomye/index.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <div class="card-header">Бесхвостые земноводные</div>
        <div class="card-body">
            <p class="card-text">Семейство "Земноводные"</p>
            <a href="<?= $path ?>beshvostye-zemnovodnye/index.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <div class="card-header">Птицы</div>
        <div class="card-body">
            <p class="card-text">Семейство "Птицы"</p>
            <a href="<?= $path ?>pticy/index.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <div class="card-header">Млекопитающие</div>
        <div class="card-body">
            <p class="card-text">Семейство "Млекопитающие"</p>
            <a href="<?= $path ?>mlekopitajushie/index.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <div class="card-header">Растения</div>
        <div class="card-body">
            <p class="card-text">Семейство "Растения"</p>
            <a href="<?= $path ?>rastenija/index.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
</div>
<?= showFooter($path) ?>
