<?php
$path = '';
include $path.'lib.php';
echo showHeader($path, 'Проект', 'home');
?>
<div class="container-fluid">
    <h3 class="text-center font-weight-bold">МБОУ СОШ с. Бессоновка</h3>
    <div>
        <p class="pb-lg-5">
            <img src="<?= $path ?>img/logo-big.png" width="30%" class="float-left mr-xl-3" alt="Animals & Plants" title="Animals & Plants">
        </p>

        <h2 class="mt-xl-5">Учебно-исследовательская работа на тему:</h2>
        <h1 class="mb-xl-5">«Редкие животные и растения Бессоновского района»</h1>

        <p class="text-right mb-sm-5">
            Выполнила: ученица 11 «А» класса<br/>
            <b>Кальченко Наталия</b>
        </p>
        <p class="text-right">Руководитель: <b>Атаманова Т. И.</b></p>
    </div>
</div>
<?= showFooter($path) ?>
