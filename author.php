<?php
$path = '';
include $path.'lib.php';
echo showHeader($path, 'Проект - Бессоновка', 'besson');
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $path ?>index.php">Главная</a></li>
            <li class="breadcrumb-item active" aria-current="page">Об авторе</li>
        </ol>
    </nav>
    <h4 class="text-center">Об авторе</h4>
</div>
<?= showFooter($path) ?>
