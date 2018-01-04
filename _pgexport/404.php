<?php
get_header(); ?>

<div class="error">
    <div class="container">
        <div class="error-code m-b-10 m-t-20">
            <?php _e( '404', 'spanishschoolhouse' ); ?>
        </div>
        <h3 class="font-bold"><?php _e( 'We couldn\'t find the page..', 'spanishschoolhouse' ); ?></h3>
        <div class="error-desc">
            <?php _e( 'Sorry, but the page you are looking for was either not found or does not exist.', 'spanishschoolhouse' ); ?>
            <br /> 
            <?php _e( 'Try refreshing the page or click the button below to go back to the Homepage.', 'spanishschoolhouse' ); ?>
            <div>
                <a class="btn" href="/"><?php _e( 'Go back to Homepage', 'spanishschoolhouse' ); ?></a>
            </div>
        </div>
    </div>
</div>            

<?php get_footer(); ?>