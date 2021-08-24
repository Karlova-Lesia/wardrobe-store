<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>One category</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />
    <style>
        .main-div {
            height: 70px;
            background: white;
            white-space: nowrap;
        }
        .child-div {
            display: inline-block;
        }
        .name-store {
            font-family: Chilanka, sans-serif;
            padding-right: 10%;
            font-size: 40px;
            width: 25%;
        }
        .content-addr-info {
            color: dimgrey;
            font-family: "JetBrains Mono Light", sans-serif;
            font-size: 15px;
        }
        .align-color {
            text-align: right;
            color: dimgrey;
        }
        .parent-div {
            height: 80px;
            background: lightcoral;
            white-space: nowrap;
        }
        .child-div {
            display: inline-block;
        }
        .align-right {
            text-align: right;
        }
        .name-store {
            color: dimgrey;
            font-family: Chilanka, sans-serif;
            padding-right: 10%;
            font-size: 40px;
            width: 25%;
        }
        .categories {
            font-size: 20px;
        }
        .search-block {
            width: 40%;
        }
        .search {
            width: 100% !important;
        }
        .icon {
            width: 5%;
        }
        li > a {
            background-color: lightgrey !important;
        }
        .wrapper {
            display: inline-block;
            width: 100%;
        }
        .btn-group {
            width: 100%;
        }
        .btns {
            height: 60px;
        }
    </style>
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
    <div class="col-md-6">
        <?php

        foreach ($oneCategoryList as $product) :?>
            <div style="margin: 20px;"><img style="width: 600px;" src="<?php echo $product['image'];?>" alt="product">
            </div>

        <?php endforeach;?>
    </div>
    <div class="col-md-2">
        <?php

        foreach ($oneCategoryList as $product) :?>
            <div style="padding-top: 300px; padding-bottom: 450px; padding-right: 50px;">
                <?php echo $product['name'];?><br>
                <div style="color: dimgrey;"> <?php echo $product['description'];?><br>
                    <?php echo $product['price'];?> грн<br></div>
                <div class="btn-group-vertical btn-group">
                    <button type="button" class="btn btn-outline-secondary btns">
          <span style="vertical-align: inherit"
          ><span style="vertical-align: inherit">Додати в кошик</span></span
          >
                    </button>
                </div>
            </div>

        <?php endforeach;?>
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

