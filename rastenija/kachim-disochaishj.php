<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Растения - Качим высочайший', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>pticy/index.php">Растения</a></li>
            <li class="breadcrumb-item active" aria-current="page">Качим высочайший</li>
        </ol>
    </nav>
    <h4 class="text-center">Качим высочайший</h4>

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
        <div class="list-group-item"> Многолетнее травянистое растение высотой 30—80 см с 1—3 прямостоячими побегами. Побеги в верхней части железисто опушенные. Листья сизоватые от воскового налета, продолговатые, с тупой верхушкой, собраны в прикорневую розетку. Стеблевые листья малочисленные, меньшего размера, супротивные. Мелкие белые цветки собраны в щитковидно-метельчатое соцветие. Плод — шаровидная коробочка.
        </div>
        <div class="list-group-item">  Ареал обитания: лесостепной кальцефит, приуроченный к местам выходов карбонатных пород скального и осыпного типа, разреженным степным сообществам на склонах речных долин и балок. Цветет в июне—августе, размножается преимущественно семенами. Восточная Европа, Кавказ, Западная и Восточная Сибирь, Средняя Азия, Произрастает в черноземной полосе, севернее редко. Находится на северной границе ареала в пределах востока европейской части России. Считается редким видом в Татарстане. В Чувашской Республике встречается в Апатырском, Батыревском, Порецком, Чебоксарском и Яльчикском районах.
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
