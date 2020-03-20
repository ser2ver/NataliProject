<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Птицы - Лунь полевой', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>pticy/index.php">Птицы</a></li>
            <li class="breadcrumb-item active" aria-current="page">Лунь полевой</li>
        </ol>
    </nav>
    <h4 class="text-center">Лунь полевой</h4>

    <div id="gallery" class="carousel slide float-left" data-ride="carousel" style="width: 600px; margin-right: 10px;">
        <ol class="carousel-indicators">
            <li data-target="#gallery" data-slide-to="0" class="active">1</li>
            <li data-target="#gallery" data-slide-to="1">2</li>
            <li data-target="#gallery" data-slide-to="2">3</li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/lun-polevoi1.jpg" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
                <img src="img/lun-polevoi2.jpg" class="d-block w-100" alt="2">
            </div>
            <div class="carousel-item">
                <img src="img/lun-polevoi3.jpg" class="d-block w-100" alt="3">
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
        <div class="list-group-item">Крыло более тупое и закруглённое, чем у степного и лугового луней, первое маховое перо относительно короткое. Взрослый самец светло-сизый сверху, вершины крыльев чёрные, поперечная граница с остальной, светлой их частью резкая, чёткая; задний край крыла снизу оконтурен тёмной полосой. Сизые голова, шея и зоб ясно отграничены от белого брюха. Надхвостье белое, хвост без поперечных полос. Самцы в промежуточных нарядах (в возрасте 2–3 лет) могут быть более тёмными — сизо-серыми, с остатками поперечных полос на хвосте и крыльях (по этим признакам их можно спутать с взрослым самцом лугового луня). За счёт неравномерности линьки чёрное поле на крыле у полувзрослых самцов может иметь разную конфигурацию, иногда приближаясь к таковой степного луня.
        </div>
        <div class="list-group-item"> Северная Америка, Евразия от Атлантики до Камчатки, побережья Охотского моря и северного Приморья. К северу до 67-й параллели. Населяет всю территорию Московской области. В последнее десятилетие вид отмечен во многих административных районах (в 83 точках), но гнездование достоверно установлено лишь в Талдомском, Сергиево-Посадском, Воскресенском, Каширском и Наро-Фоминском р-нах.
        </div>
        <div class="list-group-item">
            Ссылки:
            <ul>
                <li><a href="https://ru.wikipedia.org/wiki/%D0%9F%D0%BE%D0%BB%D0%B5%D0%B2%D0%BE%D0%B9_%D0%BB%D1%83%D0%BD%D1%8C" target="_blank">Википедия</a></li>
            </ul>
        </div>
    </div>


</div>
<?= showFooter($path) ?>
