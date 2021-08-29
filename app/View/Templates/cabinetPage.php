<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cabinet</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />
</head>
<body>
<?php
include_once "../app/View/Layouts/commons/header.php";
?>
<div class="row">
    <div class="col-md-2"><?php
        include_once "../app/View/Layouts/commons/navigation.php";
        ?></div>
    <div class="col-md-2"></div>
    <div class="col-md-6 content">
        <h2 style="margin-bottom: 30px;">Привіт, <?php echo $user['name'];?></h2>
        <p><a href="/cabinet/edit">Редагувати дані</a></p>
        <p><a href="/cabinet/history">Список покупок</a></p>
    </div>
    <div class="col-md-2">
    </div>
</div>
<?php
include_once "../app/View/Layouts/commons/footer.php";
?>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
></script>
</body>
</html>


