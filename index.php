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

        <div>Search</div>
        <div>Facebook</div>
        <div>Tweeter</div>
    </header>


    <?php wp_footer(); ?>
</body>
</html>