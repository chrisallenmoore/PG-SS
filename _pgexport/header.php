<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Bootstrap core CSS -->
        <!-- Custom styles for this template -->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <header>
            <section id="text-rotator" class="text-center bg-secondary text-primary show-text-rotator" data-show-text-rotator>
                <a href="#" class="close-text-rotator"><?php _e( 'X', 'spanishschoolhouse' ); ?></a>
                <span id="js-rotating"><?php echo get_theme_mod( 'text_for_rotator', '<span>NOW OPEN</span><br> <span>in <a href="#">Kingwood!</a></span>, <span>NOW OPEN</span><br> <span>in <a href="#">Roundrock!</a></span>, <span>NOW OPEN</span><br> <span>in <a href="#">Sugarland!</a></span>, <span>COMING SOON:</span><br> <span><a href="#">Creekside/Tomball</a></span>' ); ?></span>
            </section>
            <section class="brand d-flex">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 brand-left text-center text-sm-left w-100">
                            <a href="<?php echo esc_url( get_home_url() ); ?>">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/SSH-Logo-horizontal.svg" class="brand-image img-fluid">
                            </a>
                        </div>
                        <div class="col-sm-4 brand-right text-center text-sm-right">
                            <a href="#" class="text-primary brand-link">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/iconContact.png" alt="icon-contact">
                                <?php _e( 'Contact', 'spanishschoolhouse' ); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <nav class="navbar navbar-expand-sm navbar-primary bg-primary">
                <div class="container position-relative">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fa fa-bars fa-sm"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTop">
                        <?php wp_nav_menu( array(
                                'menu' => 'corporate',
                                'menu_class' => 'navbar-nav mr-auto',
                                'container' => '',
                                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                'walker' => new wp_bootstrap_navwalker()
                        ) ); ?>
                        <a class="btn btn-secondary btn-login hover d-none d-sm-block" href="https://portal.spanishschoolhouse.com/login"><?php _e( 'Login', 'spanishschoolhouse' ); ?></a>
                    </div>
                </div>
                <a class="btn btn-secondary btn-login hover d-sm-none" href="https://portal.spanishschoolhouse.com/login"><?php _e( 'Login', 'spanishschoolhouse' ); ?></a>
            </nav>
            <div class="tear">
                <div class="tear-padding"></div>
                <div class="tear-image"></div>
                <div class="tear-image"></div>
            </div>
        </header>
        <main class="main">