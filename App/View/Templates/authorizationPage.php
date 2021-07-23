<!DOCTYPE html>
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
        .form {
            margin-top: 40px;
            display: inline-block;
            width: 50%;
            height: 700px;
        }
        .link {
            color: dimgrey;
            font-weight: bold;
            text-decoration: none;
        }

    </style>
</head>
<body>
    <?php
    include_once "/home/lesia/Desktop/wardrobe/App/View/Layouts/commons/header.html";
    ?>
    <div class="row">
       <div class="col-md-2"><?php
           include_once "/home/lesia/Desktop/wardrobe/App/View/Layouts/commons/navigation.html";
           ?></div>
        <div class="col-md-3"></div>
        <div class="col-md-5">
            <form class="form"  method="post" action="">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Запам'ятай мене</label>
                </div>
                <div>
                    <button type="submit" class="btn btn-outline-secondary">Увійти</button>
                </div>
                <a class="link" href="/registration.php">зареєструватись</a>
            </form>
        </div>
    </div>
    <?php
    include_once "/home/lesia/Desktop/wardrobe/App/View/Layouts/commons/footer.html";
    ?>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
></script>
</body>
</html>