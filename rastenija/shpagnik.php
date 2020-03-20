<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Растения - Шпажник', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>rastenija/index.php">Растения</a></li>
            <li class="breadcrumb-item active" aria-current="page">Шпажник</li>
        </ol>
    </nav>
    <h4 class="text-center">Шпажник</h4>

    <div id="gallery" class="carousel slide float-left" data-ride="carousel" style="width: 600px; margin-right: 10px;">
        <ol class="carousel-indicators">
            <li data-target="#gallery" data-slide-to="0" class="active">1</li>
            <li data-target="#gallery" data-slide-to="1">2</li>
            <li data-target="#gallery" data-slide-to="2">3</li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/shpagnik1.jpg" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
                <img src="img/shpagnik2.jpg" class="d-block w-100" alt="2">
            </div>
            <div class="carousel-item">
                <img src="img/shpagnik3.jpg" class="d-block w-100" alt="3">
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
        <div class="list-group-item">Травянистый клубнелуковичный поликарпик. Высота – 40–70 см. Клубнелуковицы яйцевидные, одеты сетчато-волокнистыми влагалищами. Стебли облиственные. Листья линейно-мечевидные, до 15 мм шириной, с выдающимися жилками.
        </div>
        <div class="list-group-item">Колос короткий, 3–8-цветковый. Прицветники ланцетные, в 2 раза короче цветков. Околоцветники пурпурово-фиолетовые, 2,5–3 см длиной, с сильноизогнутой трубкой, доли его почти одинаковые, обратнояйцевидно-овальные, туповатые, с узкими ноготками, все сходящи-еся. Коробочка обратнояйцевидная, тупотрехгранная. Семена узкокрылатые. Цветет в мае, плодоносит в августе. Энтомофил. Размножается семенами и вегетативно с помощью клубнелуковиц-деток. Клубнелуковица ежегодно замещается. Семена прорастают зимой, осенью и весной. Длительность жизни монокарпического побега 23 месяца. Мезофит, сциогелиофит. Растет от низменности до среднегорий на сырых лужайках, лугах. Отмечен на высоте до 1200 м над у. м.
        </div>
        <div class="list-group-item">
            Ссылки:
            <ul>
                <li><a href="https://ru.wikipedia.org/wiki/%D0%A8%D0%BF%D0%B0%D0%B6%D0%BD%D0%B8%D0%BA" target="_blank">Википедия</a></li>
            </ul>
        </div>
    </div>
</div>
<?= showFooter($path) ?>
