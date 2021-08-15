<!DOCTYPE html>
 <?php
    include_once "../App/Models/Dresses.php";
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>authorization</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />
    <style>
        .blockDresses {
            display: inline-block;
        }

    </style>
</head>
<body>
<?php
include_once "../Layouts/commons/header.html";
?>
<div class="row">
    <div class="col-md-2"><?php
        include_once "../Layouts/commons/navigation.html";
    ?></div>
    <div class="blockDresses">
        <div class="row">
            <?php
            include_once "../App/Models/Dresses.php";
            foreach (getDressesList::$dressesList as $dress) :?>
                <div class="col-md-3">
                    <a href="#"><img src="" alt="текст"></a>
                    <p><a href="/dresses/<?php echo $dress['id'];?>"></a></p>
                    <p><?php echo $dress['description'];?></p>
                    <p><?php echo $dress['size'];?></p>
                    <p><?php echo $dress['price'];?></p>
                </div>
        </div>
            <?php endforeach;?>
    </div>
</div>
<?php
include_once "../Layouts/commons/footer.html";
?>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
></script>
</body>
</html>
