<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Растения - Кувшинка чисто белая', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>rastenija/index.php">Растения</a></li>
            <li class="breadcrumb-item active" aria-current="page">Кувшинка чисто белая</li>
        </ol>
    </nav>
    <h4 class="text-center">Кувшинка чисто белая</h4>

    <div id="gallery" class="carousel slide float-left" data-ride="carousel" style="width: 600px; margin-right: 10px;">
        <ol class="carousel-indicators">
            <li data-target="#gallery" data-slide-to="0" class="active">1</li>
            <li data-target="#gallery" data-slide-to="1">2</li>
            <li data-target="#gallery" data-slide-to="2">3</li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/kuvshinka-chisto-belaja1.jpg" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
                <img src="img/kuvshinka-chisto-belaja2.jpg" class="d-block w-100" alt="2">
            </div>
            <div class="carousel-item">
                <img src="img/kuvshinka-chisto-belaja3.jpg" class="d-block w-100" alt="3">
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
        <div class="list-group-item"> Водный травянистый длиннокорневищный укореняющийся, с плавающими листьями поликарпик. Корневище горизонтальное, корни придаточные. Прилистники ланцетные. Листья крупные, плавающие, округло-овальные, на длинных толстых черешках (длина и ширина до 30 см), в молодости красноватые. Цветки белые, одиночные, крупные, до 20 см в поперечнике. Чашелистики продолговатые, снизу зеленые, с пятью жилками, кверху быстросуженные, островатые. Основание чашечки округлое. Лепестки наружного круга (10–15) постепенно переходят в тычинки. Рыльце плоское, многолучевое. Плод – губчатая ягодообразная многолистовка.
        </div>
        <div class="list-group-item">   Ареал обитания: Скандинавия, Атлантическая, Средняя, Восточная (Украина); Средиземноморье (Балканы); Малая Азия; Кавказ (Восточное Закавказье). Россия: Европейская часть (о. Середыш, оз. Кольчужное; Ленинградская, Псковская, Волгоградская обл., РО (протоки Дона около о. Зеленки, в Шолоховском р-не и др.);
        </div>
        <div class="list-group-item">
            Ссылки:
            <ul>
                <li><a href="https://ru.wikipedia.org/wiki/%D0%9A%D1%83%D0%B2%D1%88%D0%B8%D0%BD%D0%BA%D0%B0_%D1%81%D0%BD%D0%B5%D0%B6%D0%BD%D0%BE-%D0%B1%D0%B5%D0%BB%D0%B0%D1%8F" target="_blank">Википедия</a></li>
            </ul>
        </div>
    </div>
</div>
<?= showFooter($path) ?>
