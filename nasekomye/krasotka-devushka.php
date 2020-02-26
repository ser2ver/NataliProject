<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Насекомые - Красотка-девушка', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>nasekomye/index.php">Насекомые</a></li>
            <li class="breadcrumb-item active" aria-current="page">Красотка-девушка</li>
        </ol>
    </nav>
    <h4 class="text-center">Красотка-девушка</h4>

    <div class="card float-left m-sm-1" style="width: 18rem;">
        <div class="card-header">Красотка-девушка</div>
        <div class="card-body">
            <p class="card-text">Красотка-девушка</p>
            <a href="<?= $path ?>nasekomye/krasotka-devushka.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
</div>
<?= showFooter($path) ?>
