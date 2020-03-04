<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Насекомые - Поликсена', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>nasekomye/index.php">Насекомые</a></li>
            <li class="breadcrumb-item active" aria-current="page">Поликсена</li>
        </ol>
    </nav>
    <h4 class="text-center">Поликсена</h4>

    <div id="gallery" class="carousel slide float-left" data-ride="carousel" style="width: 600px; margin-right: 10px;">
        <ol class="carousel-indicators">
            <li data-target="#gallery" data-slide-to="0" class="active">1</li>
            <li data-target="#gallery" data-slide-to="1">2</li>
            <li data-target="#gallery" data-slide-to="2">3</li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/poliksena1.jpg" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
                <img src="img/poliksena2.jpg" class="d-block w-100" alt="2">
            </div>
            <div class="carousel-item">
                <img src="img/poliksena3.jpg" class="d-block w-100" alt="3">
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
        <div class="list-group-item">Дневная бабочка крупнее среднего размера со слабовыраженным половым диморфизмом. Длина переднего крыла 25—30 мм, размах крыльев 45—55 мм. Крылья сверху охристо-желтые, со сложным рисунком из черных пятен, перевязей и линий (А). Во внешнем поле обоих крыльев проходит черная зигзагообразная линия..</div>
        <div class="list-group-item">В РФ встречается на юге  и в центре европейской части, в Поволжье . В КК ареал охватывает предгорья северного макросклона от Крымского р-на на западе до Отрадненского и Мостовского р-нов на востоке . На Черноморском побережье известен из Анапского р-на, окрестностей Новороссийска , Геленджика, Туапсе. Региональная популяция является ассоциированной частью метапопуляции Северного Кавказа. Ближайшая экстрарегиональная популяция заселяет Крымский полуостров.</div>
        <div class="list-group-item">Хортофильный монофаг, мезофил. Гусеницы развиваются на листьях кирказона ломоносовидного в апреле — мае. Окукливаются они открыто на кормовых растениях и соседних кустарниках. Куколка эстивирует и зимует. Относится к поздневесенне-раннелетней фенологической группе чешуекрылых Северо-Западного Кавказа. Лёт региональной популяции скоротечен — с третьей декады апреля по середину мая.</div>
        <div class="list-group-item">
            Ссылки:
            <ul>
                <li><a href="https://ru.wikipedia.org/wiki/%D0%9F%D0%BE%D0%BB%D0%B8%D0%BA%D1%81%D0%B5%D0%BD%D0%B0_(%D0%B1%D0%B0%D0%B1%D0%BE%D1%87%D0%BA%D0%B0)" target="_blank">Википедия</a></li>
            </ul>
        </div>
    </div>
</div>
<?= showFooter($path) ?>
