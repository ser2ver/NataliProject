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

    <div id="gallery" class="carousel slide float-left" data-ride="carousel" style="width: 600px; margin-right: 10px;">
        <ol class="carousel-indicators">
            <li data-target="#gallery" data-slide-to="0" class="active">1</li>
            <li data-target="#gallery" data-slide-to="1">2</li>
            <li data-target="#gallery" data-slide-to="2">3</li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/krasotka-devushka1.jpg" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
                <img src="img/krasotka-devushka2.jpg" class="d-block w-100" alt="2">
            </div>
            <div class="carousel-item">
                <img src="img/krasotka-devushka3.jpg" class="d-block w-100" alt="3">
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
        <div class="list-group-item">Небольшая стрекоза из семейства красоток полностью оправдывает свое название красотка-девушка. Тело самца сине-зеленое с металлическим отливом, самки – бронзово зеленое. Глянцевый блеск хитинового покрова создает неповторимое впечатление. Длина насекомого 45-49 мм, размер крыла – 30 мм. Отличительной характеристикой вида Calopteryx virgo является отсутствие птеростигмы – утолщения у передней кромки крыла.</div>
        <div class="list-group-item">Они выбирают озера, медленно текущие реки, ручьи, для жизни им даже подходят болота. Основное условие – достаточное количество водной растительности, так как на стеблях растений самки откладывают яйца.</div>
        <div class="list-group-item">Жизнь у этих красавиц не продолжительная: с апреля по октябрь. За эти несколько месяцев самка должна выполнить свое главное предназначение – отложить яйца. В кладке одной самки находиться 250-300 яиц.</div>
        <div class="list-group-item">
            Ссылки:
            <ul>
                <li><a href="https://ru.wikipedia.org/wiki/%D0%9A%D1%80%D0%B0%D1%81%D0%BE%D1%82%D0%BA%D0%B0-%D0%B4%D0%B5%D0%B2%D1%83%D1%88%D0%BA%D0%B0" target="_blank">Википедия</a></li>
            </ul>
        </div>
    </div>
</div>
<?= showFooter($path) ?>
