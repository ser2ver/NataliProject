<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Насекомые - Красотка-девушка', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>nasekomye/index.php">Насекомые</a></li>
            <li class="breadcrumb-item active" aria-current="page">Огневка трескучая</li>
        </ol>
    </nav>
    <h4 class="text-center">Огневка трескучая</h4>

    <div id="gallery" class="carousel slide float-left" data-ride="carousel" style="width: 600px; margin-right: 10px;">
        <ol class="carousel-indicators">
            <li data-target="#gallery" data-slide-to="0" class="active">1</li>
            <li data-target="#gallery" data-slide-to="1">2</li>
            <li data-target="#gallery" data-slide-to="2">3</li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/ognevka-treskuchaja1.jpg" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
                <img src="img/ognevka-treskuchaja2.jpg" class="d-block w-100" alt="2">
            </div>
            <div class="carousel-item">
                <img src="img/ognevka-treskuchaja3.jpg" class="d-block w-100" alt="3">
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
        <div class="list-group-item">Длина тела самца 23-25 мм, самки - 30-40 мм. Окраска тела самца черная или темно-коричневая, самки - бурая или светло-коричневая. Надкрылья в расплывчатых темных пятнах и точках, у самцов надкрылья не достигают вершины брюшка. Крылья киноварно-красного цвета, непрозрачные, с черной вершиной.</div>

        <div class="list-group-item">
            <p>Ареал обитания Северная и Центральная Европа, Южная Сибирь, Северный Казахстан, Монголия, Корея. В Нижегородской области отмечалась из окрестностей г. Дзержинска, г. Н. Новгорода, в Кстовском и Семеновском районах, из окрестностей д. Головино Чкаловского р-на.</p>
            <p>Места обитания: На европейской территории России обитает преимущественно в полосе смешанных и широколиственных лесов и в лесостепи, встречается на открытых участках, сухих лужайках, вересковых полянах, прогалинах с проективным покрытием травостоя 60-80%, в лесостепной полосе - на остепненных участках по опушкам лесов.</p>
            <p style="margin-bottom: 0">Уничтожение или деградация мест обитания в результате строительства, распашки, перевыпаса скота. Специальные меры охраны не принимались.</p>
        </div>

        <div class="list-group-item">
            <p>Численность и тенденции ее изменения: Встречается спорадически. Во всех известных местах обитания численность невысока и имеет тенденцию к сокращению.</p>
            <p style="margin-bottom: 0">Держится на почве, на растения не взбирается, поедает листья злаков, сложноцветных, гераниевых, подорожников, реже - бобовых. Самцы в полете громко трещат крыльями, самки не летают. Кубышку, содержащую 12-38 яиц, самка откладывает в почву.</p>
        </div>
        <div class="list-group-item">
            Ссылки:
            <ul>
                <li><a href="https://ru.wikipedia.org/wiki/%D0%9E%D0%B3%D0%BD%D1%91%D0%B2%D0%BA%D0%B0_%D1%82%D1%80%D0%B5%D1%81%D0%BA%D1%83%D1%87%D0%B0%D1%8F" target="_blank">Википедия</a></li>
            </ul>
        </div>
    </div>






</div>
<?= showFooter($path) ?>
