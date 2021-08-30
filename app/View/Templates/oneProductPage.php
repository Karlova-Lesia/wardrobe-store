<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>product</title>
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
    <div class="col-md-6 img">
            <div style="margin: 20px;"><img style="width: 600px;" src="<?php echo $product['image'];?>" alt="product">
            </div>
    </div>
    <div class="col-md-2">
            <div style="padding-top: 300px; padding-bottom: 450px; padding-right: 50px;">
                <?php echo $product['name'];?><br>
                <div style="color: dimgrey;"> <?php echo $product['description'];?><br>
                    <?php echo $product['price'];?> грн<br></div>
                <div class="btn-group-vertical btn-group">
                    <button onClick='location.href="http://wardrobe.com/cart/add/<?php echo $product['id'];?>"'
                            type="button" class="btn btn-outline-secondary btns">
          <span style="vertical-align: inherit"
          ><span style="vertical-align: inherit">Додати в кошик</span></span
          >
                    </button>
                </div>
            </div>
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

