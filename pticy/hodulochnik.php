<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Птицы - Ходулочник', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>pticy/index.php">Птицы</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ходулочник</li>
        </ol>
    </nav>
    <h4 class="text-center">Ходулочник</h4>

    <div id="gallery" class="carousel slide float-left" data-ride="carousel" style="width: 600px; margin-right: 10px;">
        <ol class="carousel-indicators">
            <li data-target="#gallery" data-slide-to="0" class="active">1</li>
            <li data-target="#gallery" data-slide-to="1">2</li>
            <li data-target="#gallery" data-slide-to="2">3</li>
            <li data-target="#gallery" data-slide-to="3">4</li>
            <li data-target="#gallery" data-slide-to="4">5</li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/hodulochnik1.jpg" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
                <img src="img/hodulochnik2.jpg" class="d-block w-100" alt="2">
            </div>
            <div class="carousel-item">
                <img src="img/hodulochnik3.jpg" class="d-block w-100" alt="3">
            </div>
            <div class="carousel-item">
                <img src="img/hodulochnik4.jpg" class="d-block w-100" alt="3">
            </div>
            <div class="carousel-item">
                <img src="img/hodulochnik5.jpg" class="d-block w-100" alt="3">
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
        <div class="list-group-item">Ходулочник крупный, меньше голубя кулик с длинными красными ногами. Длина тела 35–40 см, масса до 200 г, размах крыльев 67–85 см. Крылья и спина черные, остальное оперение белое, включая хвост и надхвостье, клином вдающееся в темное оперение спины. Задний палец отсутствует, клюв черный. У молодых птиц верх головы, зашеек, часть спины и плечевые перья буровато-серые. В отличие от шилоклювки клюв прямой, ноги длинные, шея короче, задний палец отсутствует. В гнездовой период предпочитает соленые водоемы. Гнездится небольшими колониями. В центральной части края обитает на очистных сооружениях сельскохозяйственных комплексов, сахарных заводов. К размножению приступает на 2–3-е лето.
        </div>
        <div class="list-group-item">  Глобальный ареал: юг Палеарктики и Неарктики, Южная Америка, Африка, Южная Азия и Австралия. В РФ гнездится по южной окраине России: Предкавказье, Прикаспий, юг Саратовской и Оренбургской областей, отдельные поселения в Туве, Забайкалье, Приморье. Региональный ареал включает Восточное Приазовье, Северное Причерноморье, а также центральную часть К К.
        </div>
        <div class="list-group-item">
            Ссылки:
            <ul>
                <li><a href="https://ru.wikipedia.org/wiki/%D0%A5%D0%BE%D0%B4%D1%83%D0%BB%D0%BE%D1%87%D0%BD%D0%B8%D0%BA" target="_blank">Википедия</a></li>
            </ul>
        </div>
    </div>
</div>
<?= showFooter($path) ?>
