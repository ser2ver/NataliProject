<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Птицы - Лазоревка белая', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>pticy/index.php">Птицы</a></li>
            <li class="breadcrumb-item active" aria-current="page">Лазоревка белая</li>
        </ol>
    </nav>
    <h4 class="text-center">Лазоревка белая</h4>

    <div id="gallery" class="carousel slide float-left" data-ride="carousel" style="width: 600px; margin-right: 10px;">
        <ol class="carousel-indicators">
            <li data-target="#gallery" data-slide-to="0" class="active">1</li>
            <li data-target="#gallery" data-slide-to="1">2</li>
            <li data-target="#gallery" data-slide-to="2">3</li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/lazorevka-belaja1.jpg" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
                <img src="img/lazorevka-belaja2.jpg" class="d-block w-100" alt="2">
            </div>
            <div class="carousel-item">
                <img src="img/lazorevka-belaja3.jpg" class="d-block w-100" alt="3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#gallery" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#gallery" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="list-group">
        <div class="list-group-item">Белая лазоревка — птица, вес которой составляет в среднем 15г, а длина тела — не более 15 см. Эти птицы являются одними из немногих представителей рода лазоревки семейства синицевые. Помимо лазаревок этот род также объединяет птиц вида князьки. Общим для всех видов лазаревок является их яркое оперение с контрастом между голубоватым оттенком спинки и желтым — брюшка. Общими для всех синицевых являются маленькие размеры тела и способность к изданию певчих звуков.
        </div>
        <div class="list-group-item"> Белая лазаревка имеет более бледный окрас, чем обысная. Головка ее белая, а по бокам от клюва к глазам и дальше на затылок отходят черные полосы. Крылья белых лазаревок темно-синие, а спинка серо-синяя. Самцы более темные чем самки. Брюшко птиц может быть полностью желтым, белым с желтоватым оттенком или белым с примесью желтых вкраплений. Клюв у лазаревок маленький, но очень острый, что позволяет им охотиться на насекомых и даже вырубать отверстия в тростнике. Взрослеют птицы быстро — молодняк покидает гнездо уже через 2 недели после вылупления.
        </div>
        <div class="list-group-item"> Ареалом обитания белых лазаревок является широкая полоса Евразии от Белоруссии до наиболее восточных точек России и Китая. Однако распространенность птиц неодинакова на всей территории ареала. Встречаются лазаревки спорадически. Большая их часть проживает на Урале и в Сибири.
        </div>
        <div class="list-group-item">
            Ссылки:
            <ul>
                <li><a href="https://ru.wikipedia.org/wiki/%D0%91%D0%B5%D0%BB%D0%B0%D1%8F_%D0%BB%D0%B0%D0%B7%D0%BE%D1%80%D0%B5%D0%B2%D0%BA%D0%B0" target="_blank">Википедия</a></li>
            </ul>
        </div>
    </div>
</div>
<?= showFooter($path) ?>
