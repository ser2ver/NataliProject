<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Растения', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item active" aria-current="page">Растения</li>
        </ol>
    </nav>
    <h4 class="text-center">Растения</h4>

    <div class="card float-left m-sm-1" style="width: 18rem;">
        <div class="card-header">Волчье лыко</div>
        <div class="card-body">
            <p class="card-text">Волчье лыко</p>
            <a href="<?= $path ?>rastenija/volche-liko.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <div class="card-header">Шпажник</div>
        <div class="card-body">
            <p class="card-text">Шпажник</p>
            <a href="<?= $path ?>rastenija/shagnik.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <div class="card-header">Качим высочайший</div>
        <div class="card-body">
            <p class="card-text">Качим высочайший</p>
            <a href="<?= $path ?>rastenija/kachim-disochaishj.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <div class="card-header">Кувшинка чисто белая</div>
        <div class="card-body">
            <p class="card-text">Кувшинка чисто белая</p>
            <a href="<?= $path ?>rastenija/kuvshinka-chisto-belaja.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <div class="card-header">Ива лапландская</div>
        <div class="card-body">
            <p class="card-text">Ива лапландская</p>
            <a href="<?= $path ?>rastenija/iva-laplandskaja.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <div class="card-header">Бранец обыкновенный</div>
        <div class="card-body">
            <p class="card-text">Бранец обыкновенный</p>
            <a href="<?= $path ?>rastenija/branec-obiknovennij.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
</div>
<?= showFooter($path) ?>
