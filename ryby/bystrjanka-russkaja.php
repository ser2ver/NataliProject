<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Рыбы - Быстрянка русская', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>ryby/index.php">Рыбы</a></li>
            <li class="breadcrumb-item active" aria-current="page">Быстрянка русская</li>
        </ol>
    </nav>
    <h4 class="text-center">Быстрянка русская</h4>

    <div id="gallery" class="carousel slide float-left" data-ride="carousel" style="width: 600px; margin-right: 10px;">
        <ol class="carousel-indicators">
            <li data-target="#gallery" data-slide-to="0" class="active">1</li>
            <li data-target="#gallery" data-slide-to="1">2</li>
            <li data-target="#gallery" data-slide-to="2">3</li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/bystrjanka-russkaja1.jpg" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
                <img src="img/bystrjanka-russkaja2.jpg" class="d-block w-100" alt="2">
            </div>
            <div class="carousel-item">
                <img src="img/bystrjanka-russkaja3.jpg" class="d-block w-100" alt="3">
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
        <div class="list-group-item">Мелкая рыба, длиной до 10 — 15 см. Форма тела лещевидная. Вдоль боковой линии выше и ниже её располагается два ряда чёрных точек.Это рыбка не большого размера, которая относится к семейству карповых видов рыб. Ее часто путают с уклейкой, поскольку быстрянка отличается такими же размерами, как и уклейка, но если внимательно ее изучить, то можно по бокам обнаружить темные полосы, расположенные вдоль тела по обоим бокам.
        </div>
        <div class="list-group-item"> В пределах России распространена в бассейнах р. Волга, Дон, Днепр. Обитает в малых и средних чистых реках с достаточно быстрым течением, где придерживается коряги других затопленных предметов. Имеет короткий жизненный цикл. Половой зрелости достигает на 2 — 3 году жизни. Нерестится в мае-июне на перекатах. Икру откладывает на песок или гальку. Питается планктоном, нитчатыми водорослями и падающими в воду насекомыми.
        </div>

        <div class="list-group-item">
            Ссылки:
            <ul>
                <li><a href="https://ru.wikipedia.org/wiki/%D0%A0%D1%83%D1%81%D1%81%D0%BA%D0%B0%D1%8F_%D0%B1%D1%8B%D1%81%D1%82%D1%80%D1%8F%D0%BD%D0%BA%D0%B0" target="_blank">Википедия</a></li>
            </ul>
        </div>
    </div>
</div>
<?= showFooter($path) ?>
