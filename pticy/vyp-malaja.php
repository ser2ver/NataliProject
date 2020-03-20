<?php
$path = '../';
include $path.'lib.php';
echo showHeader($path, 'Проект - Категории - Птицы - Выпь малая', 'categs');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>categories.php">Категории</a></li>
            <li class="breadcrumb-item"><a href="<?= $path ?>pticy/index.php">Птицы</a></li>
            <li class="breadcrumb-item active" aria-current="page">Выпь малая</li>
        </ol>
    </nav>
    <h4 class="text-center">Выпь малая</h4>

    <div id="gallery" class="carousel slide float-left" data-ride="carousel" style="width: 600px; margin-right: 10px;">
        <ol class="carousel-indicators">
            <li data-target="#gallery" data-slide-to="0" class="active">1</li>
            <li data-target="#gallery" data-slide-to="1">2</li>
            <li data-target="#gallery" data-slide-to="2">3</li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/vyp-malaja1.jpg" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
                <img src="img/vyp-malaja2.jpg" class="d-block w-100" alt="2">
            </div>
            <div class="carousel-item">
                <img src="img/vyp-malaja3.jpg" class="d-block w-100" alt="3">
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
        <div class="list-group-item">Мелкая птица, заметно мельче вороны. У самца верх головы - "шапочка", спина и маховые перья блестяще-черные, шея и грудь охристые, на груди слабо выраженный бурый продольный рисунок, кроющие крыла розоватожелтые, брюшко беловатое. У самок и молодых птиц верх тела рыжевато-бурый, низ охристый, с темно-бурыми продольными пестринами. Глаза и клюв желтые, ноги серовато-зеленые. Гнездится по заросшим ивняком, тростником и рогозом берегам водоемов. Наибольшая активность наблюдается в сумеречные и ночные часы, но в период выкармливания птенцов птицы активны и в дневное время. Гнездо из стеблей и листьев тростника и ивовых веточек располагается в зарослях околоводной растительности.
        </div>
        <div class="list-group-item">  Распростронение: Евразия от Атлантики до долины р. Оби и Непала; Африка, Австралия и Новая Зеландия. В Московской области в конце XIX - первой половине ХХ в. вид населял заросшие берега водоемов и речные поймы; достоверно гнездился в Бронницком и Богородском уездах. Во второй половине ХХ века заселил карьеры торфоразработок, пруды рыбхозов и заболоченные луга на месте бывших лесов.
        </div>
        <div class="list-group-item">
            Ссылки:
            <ul>
                <li><a href="https://ru.wikipedia.org/wiki/%D0%9C%D0%B0%D0%BB%D0%B0%D1%8F_%D0%B2%D1%8B%D0%BF%D1%8C" target="_blank">Википедия</a></li>
            </ul>
        </div>
    </div>
</div>
<?= showFooter($path) ?>
