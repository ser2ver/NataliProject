<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Бесхвостые земноводные - Травяная лягушка', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>beshvostye-zemnovodnye/index.php">Бесхвостые земноводные</a></li>
            <li class="breadcrumb-item active" aria-current="page">Травяная лягушка</li>
        </ol>
    </nav>
    <h4 class="text-center">Травяная лягушка</h4>

    <div id="gallery" class="carousel slide float-left" data-ride="carousel" style="width: 600px; margin-right: 10px;">
        <ol class="carousel-indicators">
            <li data-target="#gallery" data-slide-to="0" class="active">1</li>
            <li data-target="#gallery" data-slide-to="1">2</li>
            <li data-target="#gallery" data-slide-to="2">3</li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/travjanaja-ljagushka1.jpg" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
                <img src="img/travjanaja-ljagushka2.jpg" class="d-block w-100" alt="2">
            </div>
            <div class="carousel-item">
                <img src="img/travjanaja-ljagushka3.jpg" class="d-block w-100" alt="3">
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
        <div class="list-group-item">Лягушка средних размеров с массивным телом длиной до 8 см. Голова широкая, слегка уплощенная; морда короткая, спереди не заостренная. Внутренний пяточный бугор низкий и в среднем равен 1/3 длины первого пальца. По бокам головы от глаза через барабанную перепонку до основания плеча тянется темно-коричневое височное пятно. Спина окрашена разнообразно: от серого и шоколадного до темно-коричневого цвета. На спине и по бокам
        </div>
        <div class="list-group-item"> Распространение: Московской обл. обычный широко распространённый вид. На территории Москвы вплоть до середины 1980-х гг. травяная лягушка обитала практически во всех лесных массивах, включая расположенные в срединной части города, и по многим незастроенным речным долинам, где имелись пригодные для её размножения водоёмы. На территории Москвы населяет самые разные лесные, луговые и другие природные биотопы, а также сады и огороды при наличии там пригодных для размножения водоёмов. На озеленённых территориях, даже в больших парках с прудами, не живёт. Весной для размножения травяные лягушки собираются в различные временные и постоянные водоёмы — заполненные талой водой ямы, рытвины, осушительные канавы и придорожные кюветы, пруды, речные заводи.
        </div>
        <div class="list-group-item">
            Ссылки:
            <ul>
                <li><a href="https://ru.wikipedia.org/wiki/%D0%A2%D1%80%D0%B0%D0%B2%D1%8F%D0%BD%D0%B0%D1%8F_%D0%BB%D1%8F%D0%B3%D1%83%D1%88%D0%BA%D0%B0" target="_blank">Википедия</a></li>
            </ul>
        </div>
    </div>


</div>
<?= showFooter($path) ?>
