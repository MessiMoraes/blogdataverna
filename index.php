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
        
        <div class="box">

            <div class="search">
                Search
            </div>
            <div class="social">
               Instagram
            </div>

        </div>

    </header>

    <section class="random-post">
        <section>
            <img src="" alt="">

            <span>13/09/2023</span>
            <span>Anime</span>

            <h1>Title</h1>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eos quaerat molestiae expedita perspiciatis alias minus! Ut omnis adipisci eligendi accusantium alias ratione modi, fuga, et beatae sapiente distinctio doloremque?</p>


        </section>

    </section>



    <?php wp_footer(); ?>
</body>
</html>