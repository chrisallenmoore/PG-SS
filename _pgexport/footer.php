
        </main>
        <footer class="footer">
            <div class="footerGrass"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-center text-sm-left pr-0 mb-3">
                        <p><strong><?php _e( 'Austin Location', 'spanishschoolhouse' ); ?></strong><?php _e( ': Round Rock', 'spanishschoolhouse' ); ?></p>
                        <p><strong><?php _e( 'DFW Locations', 'spanishschoolhouse' ); ?></strong><?php _e( ': Allen, Arlington, Castle Hills, Coppell, Flower Mound, Fort Worth, Frisco, Keller, McKinney, North Dallas, Rockwall, Southlake', 'spanishschoolhouse' ); ?></p>
                        <p><strong><?php _e( 'Houston Locations', 'spanishschoolhouse' ); ?></strong><?php _e( ': Creakside/Tombell, Katy, Kingwood, Sugar Land, The Woodlands', 'spanishschoolhouse' ); ?></p>
                    </div>
                    <div class="col-sm-6 w-100 text-center text-sm-right">
                        <p><?php _e( 'Corporate and Customer Service', 'spanishschoolhouse' ); ?></p>
                        <p><?php _e( 'Phone:', 'spanishschoolhouse' ); ?> <a href="tel:+19726182500"><?php _e( '(972)618-2500', 'spanishschoolhouse' ); ?></a></p>
                        <p><?php _e( 'Email:', 'spanishschoolhouse' ); ?> <a href="mailto:info@spanishchoolhouse.com"><?php _e( 'info@spanishschoolhouse.com', 'spanishschoolhouse' ); ?></a></p>
                        <!--<nav>
                            <a href="">Home</a>
                            <a href="">About</a>
                            <a href="">Programs</a>
                            <a href="">Resources</a>
                            <a href="">Contact</a>
                        </nav>-->
                        <p>&copy;<span><?php echo date('Y'); ?></span> <?php _e( 'Spanish Schoolhouse. All rights reserved.', 'spanishschoolhouse' ); ?> </p>
                        <?php wp_nav_menu( array(
                                'menu' => 'footer',
                                'menu_class' => 'nav justify-content-center justify-content-sm-end',
                                'menu_id' => 'menu-footer',
                                'container' => '',
                                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                'walker' => new wp_bootstrap_navwalker()
                        ) ); ?>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.container -->
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <?php wp_footer(); ?>
    </body>
</html>
