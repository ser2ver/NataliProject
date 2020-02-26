<?php
$path = '';
include $path.'lib.php';
echo showHeader($path, 'Проект', 'home');
?>
<div class="container-fluid">
    <h2 class="text-center">Натали & Портман<br>представляют</h2>
    <br>
    <h3 class="text-center">секретный проект</h3>
    <br>
    <h1 class="text-center">ИСЧЕЗАЮЩИЕ ВИДЫ</h1>
    <br>
    <h2>В последний раз вы увидите:</h2>
    <ol>
        <li>Девушка-красотка</li>
        <li>Император-позорщик</li>
        <li>Трескучий огонек</li>
        <li>Аполон бельведерский</li>
        <li><a href="nasekomye/index.php">Насекомые</a></li>
        <li><a href="ryby/index.php">Рыбы</a></li>
    </ol>
</div>
<?= showFooter($path) ?>
