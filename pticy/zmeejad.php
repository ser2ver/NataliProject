<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Птицы - Змееяд', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>pticy/index.php">Птицы</a></li>
            <li class="breadcrumb-item active" aria-current="page">Змееяд</li>
        </ol>
    </nav>
    <h4 class="text-center">Змееяд</h4>

    <div id="gallery" class="carousel slide float-left" data-ride="carousel" style="width: 600px; margin-right: 10px;">
        <ol class="carousel-indicators">
            <li data-target="#gallery" data-slide-to="0" class="active">1</li>
            <li data-target="#gallery" data-slide-to="1">2</li>
            <li data-target="#gallery" data-slide-to="2">3</li>
            <li data-target="#gallery" data-slide-to="3">4</li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/zmeejad1.jpg" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
                <img src="img/zmeejad2.jpg" class="d-block w-100" alt="2">
            </div>
            <div class="carousel-item">
                <img src="img/zmeejad3.jpg" class="d-block w-100" alt="3">
            </div>
            <div class="carousel-item">
                <img src="img/zmeejad4.jpg" class="d-block w-100" alt="3">
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
        <div class="list-group-item">Змееяда часто называют орлом, однако внешне эти птицы мало похожи. Змееяд – крупный хищник с длиной тела около 70 см, размахом крыльев от 170 до 190 см, масса взрослых особей достигает 2 кг. Самки, как правило, по размерам немного больше, чем самцы, но не отличаются от последних по окрасу оперения. Спина у змееяда серо-бурого цвета. Горло бурое. Брюхо белого цвета с многочисленными темными пестринами. По крыльям и хвосту заметны темные полосы. Молодые особи темнее в окрасе, чем взрослые птицы. Питание у змееядов узкоспециализированное. Рацион птицы ограничен гадюками, ужами, медянками и полозами, а также другими видами змей, собственно, благодаря чему вид и получил свое название. Изредка змееяд может поедать ящериц.
        </div>
        <div class="list-group-item">  На гнездовании змееяд придерживается сосновых лесов, чередующихся с болотами и вырубками. Гнёзда устраивает на деревьях, в их вершинной части. Сравнительно с размерами птиц гнёзда небольшие — диаметром до 75 см. В кладке, как правило, 1 яйцо. Кормом для птенцов и взрослых птиц служат гадюки, ужи, ящерицы, изредка лягушки. За весь период выкармливания один птенец потребляет 240-270 змей.
        </div>
        <div class="list-group-item">
            Ссылки:
            <ul>
                <li><a href="https://ru.wikipedia.org/wiki/%D0%97%D0%BC%D0%B5%D0%B5%D1%8F%D0%B4" target="_blank">Википедия</a></li>
            </ul>
        </div>
    </div>
</div>
<?= showFooter($path) ?>
