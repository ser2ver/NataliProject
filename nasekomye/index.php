<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Насекомые', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item active" aria-current="page">Насекомые</li>
        </ol>
    </nav>
    <h4 class="text-center">Насекомые</h4>

    <div class="card float-left m-sm-1" style="width: 18rem;">
        <img src="<?= $path ?>nasekomye/img/krasotka-devushka1.jpg" class="card-img-top" alt="Красотка-девушка">
        <div class="card-body">
            <h5 class="card-title">Красотка-девушка</h5>
            <a href="<?= $path ?>nasekomye/krasotka-devushka.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <img src="<?= $path ?>nasekomye/img/ognevka-treskuchaja1.jpg" class="card-img-top" alt="Огневка трескуча">
        <div class="card-body">
            <h5 class="card-title">Огневка трескуча</h5>
            <a href="<?= $path ?>nasekomye/ognevka-treskuchaja.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <img src="<?= $path ?>nasekomye/img/krasotel-pahuchij1.jpg" class="card-img-top" alt="Красотел пахучий">
        <div class="card-body">
            <h5 class="card-title">Красотел пахучий</h5>
            <a href="<?= $path ?>nasekomye/krasotel-pahuchij.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
    <div class="card float-left m-sm-1" style="width: 18rem;">
        <img src="<?= $path ?>nasekomye/img/poliksena1.jpg" class="card-img-top" alt="Поликсена">
        <div class="card-body">
            <h5 class="card-title">Поликсена</h5>
            <a href="<?= $path ?>nasekomye/poliksena.php" class="card-link stretched-link">Перейти</a>
        </div>
    </div>
</div>
<?= showFooter($path) ?>
