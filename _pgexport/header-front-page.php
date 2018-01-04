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
    <body>
        <header>
            <section id="text-rotator" class="text-center bg-secondary text-primary">
                <span id="js-rotating"> <?php _e( '&#x3C;div&#x3E;NOW OPEN&#x3C;/div&#x3E;', 'spanishschoolhouse' ); ?> <?php _e( '&#x3C;div&#x3E;in &#x3C;a href=&#x22;#&#x22;&#x3E;Kingwood!&#x3C;/a&#x3E;&#x3C;/div&#x3E;,', 'spanishschoolhouse' ); ?> <?php _e( '&#x3C;div&#x3E;NOW OPEN&#x3C;/div&#x3E;', 'spanishschoolhouse' ); ?> <?php _e( '&#x3C;div&#x3E;in &#x3C;a href=&#x22;#&#x22;&#x3E;Roundrock!&#x3C;/a&#x3E;&#x3C;/div&#x3E;,', 'spanishschoolhouse' ); ?> <?php _e( '&#x3C;div&#x3E;NOW OPEN&#x3C;/div&#x3E;', 'spanishschoolhouse' ); ?> <?php _e( '&#x3C;div&#x3E;in &#x3C;a href=&#x22;#&#x22;&#x3E;Sugarland!&#x3C;/a&#x3E;&#x3C;/div&#x3E;,', 'spanishschoolhouse' ); ?> <?php _e( '&#x3C;div&#x3E;COMING SOON:&#x3C;/div&#x3E;', 'spanishschoolhouse' ); ?> <?php _e( '&#x3C;div&#x3E;&#x3C;a href=&#x22;#&#x22;&#x3E;Creekside/Tomball&#x3C;/a&#x3E;&#x3C;/div&#x3E;', 'spanishschoolhouse' ); ?></span>
            </section>
            <section class="brand d-flex">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 brand__left">
                            <a href="<?php echo esc_url( get_home_url() ); ?>">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/SSH-Logo-horizontal.svg" class="img-fluid brand__image">
                            </a>
                        </div>
                        <div class="col-sm-4 brand__right">
                            <a href="#" class="text-primary brand__link"> <i class="fa fa-phone fa-lg text-primary" aria-hidden="true"></i> <?php _e( 'Contact', 'spanishschoolhouse' ); ?> </a>
                        </div>
                    </div>
                </div>
            </section>
            <nav class="navbar navbar-expand-sm navbar-primary bg-primary">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fa fa-hamburger fa-sm"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTop">
                        <?php wp_nav_menu( array(
                                'menu' => 'primary',
                                'menu_class' => 'navbar-nav mr-auto',
                                'container' => '',
                                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                'walker' => new wp_bootstrap_navwalker()
                        ) ); ?>
                        <button class="btn btn-secondary btn-login my-2 my-sm-0 hover">
                            <?php _e( 'Login', 'spanishschoolhouse' ); ?>
                        </button>
                    </div>
                </div>
            </nav>
            <div class="tear">
                <div class="tear__padding"></div>
                <div class="tear__image"></div>
            </div>
        </header>
        <main class="main">