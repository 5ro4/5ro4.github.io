<nav class="menu-container">

    <ul class="menu-row">
        
        <li class="menu-cell menu-active"><a href="."><img src="img/menu-logo.png" style="border: 0px; margin: 0px; padding: 0px;"></a></li>
        
        <li class="menu-dropdown">
            <a href="javascript:void(0)" class="menu-dropdown-button"><?php GetData($data, "header", "info"); ?> <img src="img/triangleMenu.png"></a>
            <div class="menu-dropdown-content">
                <a href="about"><?php GetData($data, "header", "about"); ?></a>
                <a href="faq"><?php GetData($data, "header", "faq"); ?></a>
                <a href="setup"><?php GetData($data, "header", "setup"); ?></a>
                <a href="contact"><?php GetData($data, "header", "contact"); ?></a>
                <a href="presskit"><?php GetData($data, "header", "presskit"); ?></a>
            </div>
        </li>
        
        <li class="menu-cell"><a href="games"><?php GetData($data, "header", "projects"); ?></a></li>
        
        <li class="menu-dropdown">
            <a href="javascript:void(0)" class="menu-dropdown-button"><?php GetData($data, "header", "influencer"); ?> <img src="img/triangleMenu.png"></a>
            <div class="menu-dropdown-content">
                <a href="youtube"><?php GetData($data, "header", "youtube"); ?></a>
                <a href="social"><?php GetData($data, "header", "rrss"); ?></a>
                <a href="promo"><?php GetData($data, "header", "promo"); ?></a>
            </div>
        </li>
        
        <li class="menu-cell"><a href="gallery"><?php GetData($data, "header", "gallery"); ?></a></li>
        
        <li class="menu-dropdown" style="float:right">
            <a href="javascript:void(0)" class="menu-dropdown-button"><?php GetLangName(); ?></a>
            <div class="menu-dropdown-content">
                <a href="javascript:void(0)" onclick="SetLang('es');"><img src="img/flag_es.png"> Español</a>
                <a href="javascript:void(0)" onclick="SetLang('en');"><img src="img/flag_en.png"> English</a>
            </div>
        </li>
        
    </ul>
    
    
    <ul class="menu-row-mobile">
        
        <li class="menu-dropdown-mobile">
            <a href="javascript:void(0)" class="menu-dropdown-button" onclick="UnfoldMobileMenu(); return false;">&#9776; <?php GetData($data, "header", "menu"); ?></a>
            <div class="menu-dropdown-content-mobile">
                <a href="." class="pallete-yellow"><img src="img/menu-logo.png" style="border: 0px; margin: 0px; padding: 0px;"></a>
                
                <a href="about"><?php GetData($data, "header", "about"); ?></a>
                <a href="faq"><?php GetData($data, "header", "faq"); ?></a>
                <a href="setup"><?php GetData($data, "header", "setup"); ?></a>
                <a href="contact"><?php GetData($data, "header", "contact"); ?></a>
                <a href="presskit"><?php GetData($data, "header", "presskit"); ?></a>
                
                <a href="games"><?php GetData($data, "header", "projects"); ?></a>
                
                <a href="youtube"><?php GetData($data, "header", "youtube"); ?></a>
                <a href="social"><?php GetData($data, "header", "rrss"); ?></a>
                <a href="promo"><?php GetData($data, "header", "promo"); ?></a>
                
                <a href="gallery"><?php GetData($data, "header", "gallery"); ?></a>
                
                <?php echo "<a href='javascript:void(0)' onclick=SetLang('" . GetNoLang() . "');>"; ?>
                <?php GetNoLangName(); ?>
                <?php echo "</a>"; ?>
            </div>
        </li>
    </ul>

</nav>


<script>

function UnfoldMobileMenu()
{
    if (document.querySelector('.menu-row-mobile .menu-dropdown-mobile .menu-dropdown-content-mobile').style.display == 'block')
    {
        document.querySelector('.menu-row-mobile .menu-dropdown-mobile .menu-dropdown-content-mobile').style.display = 'none';
    }
    else
    {
        document.querySelector('.menu-row-mobile .menu-dropdown-mobile .menu-dropdown-content-mobile').style.display = 'block';
    }
}

function SetLang(newLang)
{
    var urlOriginal = window.location.pathname;
    var sufijo = urlOriginal.replace("en/", "");
    
    if (newLang == "es") { window.location.href = "https://guinxu.com" + sufijo; }
    if (newLang == "en") { window.location.href = "https://guinxu.com/en" + sufijo; }
}
    
</script>


<?php

function DrawBrands()
{
    echo "<div class='brands-container'>";
        echo "<div class='brands-logo'><img src='img/brands/opera.png'></div>";
        echo "<div class='brands-logo'><img src='img/brands/gameloft.png'></div>";
        echo "<div class='brands-logo'><img src='img/brands/ikea.png'></div>";
        echo "<div class='brands-logo'><img src='img/brands/sega.png'></div>";
        echo "<div class='brands-logo'><img src='img/brands/gamemaker.png'></div>";
        echo "<div class='brands-logo'><img src='img/brands/hostinger.png'></div>";
        echo "<div class='brands-logo'><img src='img/brands/mihoyo.png'></div>";
        echo "<div class='brands-logo'><img src='img/brands/logitech.png'></div>";
        echo "<div class='brands-logo'><img src='img/brands/atlus.png'></div>";
        echo "<div class='brands-logo'><img src='img/brands/ankama.png'></div>";
        echo "<div class='brands-logo'><img src='img/brands/supermario.png'></div>";
    echo "</div>";
}

?>
