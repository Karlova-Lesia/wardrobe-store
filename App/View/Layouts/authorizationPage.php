<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>authentication</title>
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
    </style>
</head>
<body>
    <?php
    include_once "commons/header.html";
    ?>
    <div class="row">
       <div class="col-md-4"><?php
           include_once "commons/navigation.html";
           ?></div>
        <div class="col-md-5">
            <form class="form">
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
                <button type="submit" class="btn btn-primary">Увійти</button>
            </form>
        </div>
    </div>
    <?php
    include_once "commons/footer.html";
    ?>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
></script>
</body>
</html>