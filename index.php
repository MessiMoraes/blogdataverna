<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>





    <?php wp_head(); ?>
</head>
<body>
    
    <header>
        <div class="logo">Logo</div>
        <?php
            if(has_nav_menu('primary')) {
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => 'nav',
                    'container_class' => 'menu-principal',
                    'fallback_cb' => false

                ));
            }
        
        ?>

        <div class="social">
            <span>Facebook</span>
            <span>Instagram</span>
        </div>

        <div class="search">Search</div>

       
    </header>

    <div class="owl-carousel owl-theme">
        <div class="item"><h4>1</h4></div>
        <div class="item"><h4>2</h4></div>
        <div class="item"><h4>3</h4></div>
        <div class="item"><h4>4</h4></div>
        <div class="item"><h4>5</h4></div>
    </div>


    <?php wp_footer(); ?>
</body>
</html>