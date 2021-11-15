<?php
include 'Validator.php';
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$flash = new FlashMessage();

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <title>Document</title>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
    <!-- general form elements disabled -->
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Валидатор</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Text</label>
                            <input type="text" class="form-control" autocomplete="off" name="text">
                        </div>
                        <!-- email input -->
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" autocomplete="off" name="email">
                        </div>
                        <!-- password input -->
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" autocomplete="off" name="pass">
                        </div>
                        <!-- user name input -->
                        <div class="form-group">
                            <label>login</label>
                            <input type="text" class="form-control" autocomplete="off" name="login">
                        </div>
                        <!-- Number -->
                        <div class="form-group">
                            <label>Number</label>
                            <input type="number" class="form-control" autocomplete="off" name="num">
                        </div>
                        <!-- Tel -->
                        <div class="form-group">
                            <label>Tel</label>
                            <input type="tel" class="form-control" autocomplete="off" name="tel">
                        </div>
                        <!-- Url -->
                        <div class="form-group">
                            <label>Url</label>
                            <input type="url" class="form-control" autocomplete="off" name="url">
                        </div>
                        <!-- Date -->
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" class="form-control" autocomplete="off" name="date">
                        </div>
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Textarea</label>
                            <textarea class="form-control" rows="3" name="textarea"></textarea>
                        </div>
                        <!--Image -->
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="img">
                                <label class="custom-file-label" for="customFile">Загрузить изображение</label>
                            </div>
                        </div>
                        <!--Doc -->
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="doc">
                                <label class="custom-file-label" for="customFile">Загрузить документ</label>
                            </div>
                        </div>

                    </div>
                </div>

        </div>
    </div>
</div>
        <div class="col-md-6">
            <button type="submit">Отправить</button>
            </form>
            <?php

            echo '<pre>';
            print_r(new Validator($_POST));

            if(!Validator::email($_POST['email'])) {
                $flash->setFlashMessage('error');
                $flash->displayFlashMessage('error');
            } else {$flash->setFlashMessage('success');
                    $flash->displayFlashMessage('success');}
            //echo '<br>';
            //Validator::text($_POST['text']);
            //echo '<br>';
            //Validator::pass($_POST['pass'], 6);
            //echo '<br>';
            //Validator::login($_POST['login']);
            //echo '<br>';
            //Validator::numberminmax($_POST['text'],1,5);
            //echo '<br>';
            //Validator::numbermin($_POST['num'],5);
            //echo '<br>';
            //Validator::numbermax($_POST['num'],5);
            //echo '<br>';
            //Validator::tel($_POST['tel']);
//            echo '<br>';
//            Validator::doc($_FILES['doc'],'xlsx, doc, docx, pdf');
//            echo '<br>';
//            Validator::img($_FILES['img'],'jpg, bmp, jpeg');
//            echo '<br>';
//            Validator::url($_POST['url']);
//            echo '<br>';
              Validator::text($_POST['textarea'], 5);
              echo '<br>';

            ?>
        </div>
    </div>
</div>

</body>
</html>

