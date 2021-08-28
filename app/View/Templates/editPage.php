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
</head>
<body>
<?php
include_once "../app/View/Layouts/commons/header.php";
?>
<div class="row">
    <div class="col-md-2"><?php
        include_once "../app/View/Layouts/commons/navigation.php";
    ?></div>
    <div class="col-md-3"></div>
    <div class="col-md-4">
        <form class="form" method="post">
            <h2>Редагування даних</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Прізвище</label>
                <input type="text" name="lastname" class="form-control" id="exampleInputPasswor1"
                       value="<?php echo $lastname?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                       value="<?php echo $password?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Підтвердіть пароль</label>
                <input type="password" name="password_confirm" class="form-control" id="exampleInputPassword1"
                       value="<?php echo $passwordConfirm?>">
            </div>
            <div>
                <button name="submit" type="submit" class="btn btn-outline-secondary">Зберегти</button>
            </div>
        </form>
    </div>
    <div class="col-md-2" style="margin-top: 150px; float: left;">
        <?php if (isset($errors) && is_array($errors)) :?>
            <ul>
                <?php foreach ($errors as $error) :?>
                    <li style="color: red;"><?php echo $error;?></li>
                <?php endforeach;?>
            </ul>
        <?php endif;?>
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