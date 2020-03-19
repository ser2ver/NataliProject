<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Растения - Волчье лыко', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>pticy/index.php">Растения</a></li>
            <li class="breadcrumb-item active" aria-current="page">Волчье лыко</li>
        </ol>
    </nav>
    <h4 class="text-center">Волчье лыко</h4>

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
        <div class="list-group-item"> Это листопадный кустарник, высота которого зависит от условия выращивания и может составлять от 40 см на склонах до 2.5 метров в культурных посадках. Побеги с желтовато-серой корой, молодые веточки опушены плотно прилегающими ворсинками. Листья собраны на концах веток, обратно-яйцевидно-ланцетные. Цветки двуполые, сидячие, распускаются весной в апреле-мае до появления листьев, душистые. Плоды - костянки красного цвета. Предпочитает темнохвойные леса, растёт по берегам рек, на опушках, редко образует заросли.
        </div>
        <div class="list-group-item">  Изредка и в небольшом числе встречается во всех р-нах Московской обл. На территории, ныне занимаемой Москвой, в XIX — первой половине XX вв. волчье лыко отмечали в Лосином Острове, Измайловском лесу, Кускове, Кунцеве, Останкине, Свиблове. В 1985-2000 гг. он зарегистрирован в Лосином Острове, Измайловском лесу и Терлецком л-ке, СБЛ, Алёшкинском лесу. В 2001-2010 гг. подтверждено произрастание вида только в Лосином Острове и Измайловском лесу, но другие лесные массивы не обследовались столь тщательно.
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
