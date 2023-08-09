<?php GetLangHTML(); ?>
    <head>
        <meta charset="UTF-8">
        <?php DrawMetaDescription($data, "index") ?>
        <meta name="keywords" content="Alva Majo, GameDev, Game Dev, desarrollador, Indie, youtuber, majotori, golfing over it, pineapple on pizza, pureya, shipped, the one who pulls out the sword will be crowned king, mafiadevs, influencer">
        <meta name="author" content="Alva Majo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alva Majo</title>
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32.png">
        <link rel="icon" type="image/png" sizes="192x192" href="img/favicon-192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon-180.png">
        <link rel="stylesheet" href="main/style.css">
    </head>
    <body>
        
        <?php include('utils/header.php'); ?>

        <div class="content">
            <div class="content-body">
                
                <div class="columns-wrapper">
                    
                    <div class="columns-element" style="padding: 0px 0px !important;">
                        <img src="fotos/guinxu/guinxu-main.jpg" style="width: 78%; border-radius: 10px;">
                    </div>
                    
                    <div class="columns-element" style="width: 600px; padding: 0px 0px !important;">
                        <p align=justify>
                            <?php GetData($data, "main", "description-youtube"); ?>
                            <?php GetData($data, "main", "description-promos"); ?>
                            <?php GetData($data, "main", "description-games"); ?>
                        </p>
                    </div>
                    
                </div>
                
                <br><br>
                
                <h2 align=left><?php GetData($data, "main", "brands"); ?></h2>
                <?php DrawBrands(); ?>
                
                <h2 align=left><?php GetData($data, "main", "projects"); ?></h2>
                
                <div class="collection-wrapper">
                    <div class="collection-element white-expand-hover"><a href="flatworld"><img src="img/games/flatworld-cover-small.png" width=470 class="rounded-corners shadow-effect"></a></div>
                    <div class="collection-element white-expand-hover"><a href="no-more-shopping"><img src="img/games/no-more-shopping-cover-small.png" width=470 class="rounded-corners shadow-effect"></a></div>
                    <div class="collection-element white-expand-hover"><a href="one-cat-a-day"><img src="img/games/one-cat-a-day-cover-small.png" width=470 class="rounded-corners shadow-effect"></a></div>
                </div>
                
                <h2 align=left><?php GetData($data, "main", "videos"); ?></h2>
                <?php GuinxuYTDrawPlaylist($youtube, "UUGsVaz3QTFdspLqt79jIuPA", 6); ?>
                
            </div>
        </div>
        
        <?php include('utils/footer.html'); ?>
        
    </body>
</html>