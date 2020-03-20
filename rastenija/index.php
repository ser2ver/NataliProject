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
        <img src="<?= $path ?>rastenija/img/volche-liko1.jpg" class="card-img-top" alt="Волчье лыко">
        <div class="card-body">
            <h5 class="card-title">Волчье лыко</h5>
            <a href="<?= $path ?>rastenija/volche-liko.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <img src="<?= $path ?>rastenija/img/shpagnik1.jpg" class="card-img-top" alt="Шпажник">
        <div class="card-body">
            <h5 class="card-title">Шпажник</h5>
            <a href="<?= $path ?>rastenija/shpagnik.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <img src="<?= $path ?>rastenija/img/kachim-vysochaishyj1.jpg" class="card-img-top" alt="Качим высочайший">
        <div class="card-body">
            <h5 class="card-title">Качим высочайший</h5>
            <a href="<?= $path ?>rastenija/kachim-vysochaishyj.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <img src="<?= $path ?>rastenija/img/kuvshinka-chisto-belaja1.jpg" class="card-img-top" alt="Кувшинка чисто белая">
        <div class="card-body">
            <h5 class="card-title">Кувшинка чисто белая</h5>
            <a href="<?= $path ?>rastenija/kuvshinka-chisto-belaja.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <img src="<?= $path ?>rastenija/img/iva-laplandskaja1.jpg" class="card-img-top" alt="Ива лапландская">
        <div class="card-body">
            <h5 class="card-title">Ива лапландская</h5>
            <a href="<?= $path ?>rastenija/iva-laplandskaja.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <img src="<?= $path ?>rastenija/img/branec-obiknovennij1.jpg" class="card-img-top" alt="Бранец обыкновенный">
        <div class="card-body">
            <h5 class="card-title">Бранец обыкновенный</h5>
            <a href="<?= $path ?>rastenija/branec-obiknovennij.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
</div>
<?= showFooter($path) ?>
