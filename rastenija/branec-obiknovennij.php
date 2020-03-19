<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Растения - Бранец обыкновенный', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>pticy/index.php">Растения</a></li>
            <li class="breadcrumb-item active" aria-current="page">Бранец обыкновенный</li>
        </ol>
    </nav>
    <h4 class="text-center">Бранец обыкновенный</h4>

    <div id="gallery" class="carousel slide float-left" data-ride="carousel" style="width: 600px; margin-right: 10px;">
        <ol class="carousel-indicators">
            <li data-target="#gallery" data-slide-to="0" class="active">1</li>
            <li data-target="#gallery" data-slide-to="1">2</li>
            <li data-target="#gallery" data-slide-to="2">3</li>
            <li data-target="#gallery" data-slide-to="3">4</li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/krasotel-pahuchij1.jpg" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
                <img src="img/krasotel-pahuchij2.jpg" class="d-block w-100" alt="2">
            </div>
            <div class="carousel-item">
                <img src="img/krasotel-pahuchij3.jpg" class="d-block w-100" alt="3">
            </div>
            <div class="carousel-item">
                <img src="img/krasotel-pahuchij4.jpg" class="d-block w-100" alt="3">
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
        <div class="list-group-item"> Многолетнее травянистое растение 10-25 см высотой. Стебли дважды-четырежды дихотомически ветвящиеся, укореняющиеся у основания. Спороносных колосков не образует. Спорангии одногнездные, находятся в пазухах обычных листьев, образуя особую спороносную зону. Листья темно-зеленые, жесткие, ланцетные. Спороносит в конце июля - августе. Развитие спор происходит очень медленно (более двух лет), развитие заростка продолжается 12-20 лет. Спорофит переходит к спороношению в возрасте 6-7 лет. Может размножаться вегетативно с помощью выводковых почек. Крупных популяций не образует, растет небольшими куртинами 0,5-1 м в диаметре.
        </div>
        <div class="list-group-item">  Тяготеет к сев. половине Московской обл., но встречается на зап., вост. и даже юге. На территории, ныне занимаемой Москвой, в XIX в. вид регистрировали только в Лосином Острове и близ М. Мытищ. В 1998 г. найден в СБЛ.
        </div>
        <div class="list-group-item">
            Ссылки:
            <ul>
                <li><a href="https://ru.wikipedia.org/wiki/%D0%91%D0%B0%D1%80%D0%B0%D0%BD%D0%B5%D1%86_%D0%BE%D0%B1%D1%8B%D0%BA%D0%BD%D0%BE%D0%B2%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9" target="_blank">Википедия</a></li>
            </ul>
        </div>
    </div>



</div>
<?= showFooter($path) ?>
