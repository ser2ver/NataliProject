<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Насекомые - Красотел пахучий', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>nasekomye/index.php">Насекомые</a></li>
            <li class="breadcrumb-item active" aria-current="page">Красотел пахучий</li>
        </ol>
    </nav>
    <h4 class="text-center">Красотел пахучий</h4>

    <div id="gallery" class="carousel slide float-left" data-ride="carousel" style="width: 600px; margin-right: 10px;">
        <ol class="carousel-indicators">
            <li data-target="#gallery" data-slide-to="0" class="active">1</li>
            <li data-target="#gallery" data-slide-to="1">2</li>
            <li data-target="#gallery" data-slide-to="2">3</li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/krasotka-devushka1.jpg" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
                <img src="img/krasotka-devushka2.jpg" class="d-block w-100" alt="2">
            </div>
            <div class="carousel-item">
                <img src="img/krasotka-devushka3.jpg" class="d-block w-100" alt="3">
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
        <div class="list-group-item">Крупный жук (22 — 31 мм). Голова и переднеспинка темно-синие или сине-зеленые. Надкрылья золотисто-зеленые с медно-красным отливом, иногда медно-красные. Легко узнается по ярко металлической окраске.</div>
        <div class="list-group-item"> Ареал обитания западно-центрально-палеарктический суббореальный вид. Распространен от Сев. Африки и Зап. Европы до Центральной Азии и Алтая. В Восточной Европе приурочен в основном к зонам широколиственных лесов и лесостепи. В Удмуртии достоверно известен по двум находкам в Сарапульском и Каракулинском районах. Имеются устные сообщения о нахождении двух экземпляров в разные годы в Алнашском районе (близ д. Богородское).</div>
        <div class="list-group-item">Вид биоценотически связан преимущественно с широколиственными лесами. На основании данных последних лет можно предположить, что на крайнем севере ареала приурочен в основном к антропогенным биотопам. Обладает высокой миграционной активностью. Обитает в кронах деревьев. Хорошо летает, активный хищник, охотится на гусениц листогрызущих насекомых на деревьях и на поверхности почвы.</div>
        <div class="list-group-item">Современное состояние не изучено. Известен по единичным находкам. Достоверных данных о наличии стабильных популяций вида в регионе нет. Возможно, все находки на территории Удмуртии относятся к мигрирующим особям.</div>
        <div class="list-group-item">
            Ссылки:
            <ul>
                <li><a href="https://ru.wikipedia.org/wiki/%D0%9A%D1%80%D0%B0%D1%81%D0%BE%D1%82%D0%BA%D0%B0-%D0%B4%D0%B5%D0%B2%D1%83%D1%88%D0%BA%D0%B0" target="_blank">Википедия</a></li>
            </ul>
        </div>
    </div>
</div>
<?= showFooter($path) ?>
