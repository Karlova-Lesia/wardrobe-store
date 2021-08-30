<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edit</title>
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
    <div class="col-md-1"></div>
    <div class="col-md-7" style="margin-top: 100px;">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Назва</th>
                <th scope="col">Опис</th>
                <th scope="col">Кількість</th>
                <th scope="col">Сума, грн</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $product) : ?>
            <tr>
                <th scope="row"><a href="/products/OneProduct/<?php echo $product['id'];?>">
                    <?php echo $product['name'];?>
                </th>
                <td><?php echo $product['description'];?></td>
                <td><?php echo $productsInCart[$product['id']];?></td>
                <td><?php echo($product['price'] * $productsInCart[$product['id']]);?></td>
                <td>
                    <a href="/cart/delete/<?php echo $product['id'];?>">
                    <button type="button" class="btn btn-outline-secondary">
                        <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-cart-x"
                                viewBox="0 0 16 16">
                            <path d="M7.354 5.646a.5.5 0 1 0-.708.708L7.793 7.5 6.646 8.646a.5.5 0 1 0 .708.708L8.5 8.207l1.146 1.147a.5.5 0 0 0 .708-.708L9.207 7.5l1.147-1.146a.5.5 0 0 0-.708-.708L8.5 6.793 7.354 5.646z"></path>
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                        </svg>
                        <span class="visually-hidden">Button</span>
                    </button>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <div style="float: right;">
            <p>Cума до сплати: <?php echo \App\Models\Cart::getTotalPrice($products);?> грн</p>
            <button type="button" class="btn btn-outline-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                </svg>
                Оформити замовлення
            </button>
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
</div>
</body>
</html>