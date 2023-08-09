<?php include("utils/lang.php"); $data = Iniciar(); ?>

<?php GetLangHTML(); ?>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Guinxu">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php GetData($data, "header", "projects"); ?> - Guinxu</title>
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32.png">
        <link rel="icon" type="image/png" sizes="192x192" href="img/favicon-192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon-180.png">
        <link rel="stylesheet" href="utils/style.css">
    </head>
    <body>
        
        <?php include('utils/header.php'); ?>
        
        <div class="content">
            <div class="content-body">
                <h1 align=center>Error 404</h1>
                <h2 align=center>File not found</h2>
            </div>
        </div>
        
        <?php include('utils/footer.html'); ?>
        
    </body>
</html>