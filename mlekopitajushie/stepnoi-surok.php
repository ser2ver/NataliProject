<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Млекопитающие - Степной сурок', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>mlekopitajushie/index.php">Млекопитающие</a></li>
            <li class="breadcrumb-item active" aria-current="page">Степной сурок</li>
        </ol>
    </nav>
    <h4 class="text-center">Степной сурок</h4>

    <div id="gallery" class="carousel slide float-left" data-ride="carousel" style="width: 600px; margin-right: 10px;">
        <ol class="carousel-indicators">
            <li data-target="#gallery" data-slide-to="0" class="active">1</li>
            <li data-target="#gallery" data-slide-to="1">2</li>
            <li data-target="#gallery" data-slide-to="2">3</li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/stepnoi-surok1.jpg" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
                <img src="img/stepnoi-surok2.jpg" class="d-block w-100" alt="2">
            </div>
            <div class="carousel-item">
                <img src="img/stepnoi-surok3.jpg" class="d-block w-100" alt="3">
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
        <div class="list-group-item">Самый крупный представитель семейства беличьих. Длина тела 50-60 см, масса 4,5-8,0 кг. Мех короткий, мягкий, серовато-желтый, с черной рябью на спине. Брюхо покрыто редкими остевыми волосами рыжеватоого цвета. На голове мех более короткий, темный. Вокруг губ и на подбородке белесые волосы. Ушная раковина почти не выступает из-под меха. Хвост короткий с темно-коричневыми концевыми волосами. Небольшие колонии европейского степного сурка сохранились по овражно-балочным сетям, на всхолмленных участках и в речных долинах. В Западном Приуралье населяет разно-травные, в Зауралье — полынно-злаковые, ковыльные, типчаково-ковыльные степи. Яв-ляется типично колониальным животным. Активен в дневное время. Ведет норный образ жизни. Норы бывают двух типов: гнездовые (они же используются для зимовки) и времен-ные, служащие для укрытия в случае опасности. Гнездовые норы глубокие и сложные, с большим количеством (до 20) отнорков, их глубина иногда превышает 4 метра, а общая протяженность ходов составляет десятки метров. В результате регулярного углубления сте-нок нор формируются сурчины или бутаны — кучи земли до 1,5 метра высотой. Сурки ис-пользуют их как наблюдательные пункты. Питается дикорастущими травами. Размножается на третий год, в помете 4-5 детенышей.
        </div>
        <div class="list-group-item"> В прошлом был широко распространен в степной зоне Евразии. Распашка степей и неумеренная добыча значительно сократили ареал. В настоящее время встречается в восьми областях и автономных республиках России. Прежде обитал повсеместно. С середины 50-х годов XX века исчез на большей части территории европейской части РФ. Феномен воз-рождения европейского степного сурка объясняется организацией строгой охраны, его естественным расселением и реакклиматизацией в места бывшего обитания.
        </div>
        <div class="list-group-item">
            Ссылки:
            <ul>
                <li><a href="https://ru.wikipedia.org/wiki/%D0%91%D0%B0%D0%B9%D0%B1%D0%B0%D0%BA" target="_blank">Википедия</a></li>
            </ul>
        </div>
    </div>
</div>
<?= showFooter($path) ?>
