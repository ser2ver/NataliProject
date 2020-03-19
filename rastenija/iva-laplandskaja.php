<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Растения - Ива лапландская', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>pticy/index.php">Растения</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ива лапландская</li>
        </ol>
    </nav>
    <h4 class="text-center">Ива лапландская</h4>

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
        <div class="list-group-item">  Кустарник до 1,5 м высотой. Листья ланцетные, с нижней стороны беловойлочные. Растение двудомное. Мелкие однополые цветки собраны в мужские и женские соцветия — сережки. Опыляется при помощи пчел. Цветет в мае. Размножается семенами. Для всех ив свойственна особая светолюбивость, в тени и в глухих местах они растут очень плохо, пропадают в тесноте между другими древесными породами; очень влаголюбивы, в сухих местах все виды, за исключением вербы, пропадают; любят более легкую, чем тяжелую почву.
        </div>
        <div class="list-group-item">  Основной ареал охватывает тундровую и таежную зоны Европы и Западной Сибири. В республике вид достаточно спорадически распространен, выявлен в Сюмсинском, Красногорском, Вавожском, Воткинском, Якшур-Бодьинском, Сарапульском, Камбарском районах. Растет на сырых лугах, болотах, по берегам водоемов. В Удмуртии встречается по сфагновым болотам.
        </div>
        <div class="list-group-item">
            Ссылки:
            <ul>
                <li><a href="https://ru.wikipedia.org/wiki/%D0%98%D0%B2%D0%B0_%D0%BB%D0%BE%D0%BF%D0%B0%D1%80%D1%81%D0%BA%D0%B0%D1%8F" target="_blank">Википедия</a></li>
            </ul>
        </div>
    </div>
</div>
<?= showFooter($path) ?>
