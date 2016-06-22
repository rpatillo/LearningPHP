<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body>
    <?PHP
   
    require 'class/Autoloader.php';
    \Tutoriel\Autoloader::register();
    $form = new \Tutoriel\BootstrapForm($_POST);
    ?>

    <form action="#" method="post">
        <?PHP
        echo $form->input('username');
        echo $form->input('password');
        echo $form->submit();
        ?>
    </form>
</body>