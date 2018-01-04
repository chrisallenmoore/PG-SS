<?php
get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="blog-post">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'large', array(
                                'class' => 'img-fluid'
                            ) );
                            }
                         ?>
                        <h2 class="blog-post-title"><?php the_title(); ?></h2>
                        <?php echo get_the_date(); ?>
                        <?php the_content( __( 'more...', 'spanishschoolhouse' ) ); ?>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'spanishschoolhouse' ); ?></p>
            <?php endif; ?>
            <!-- /.blog-post -->
            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#"><?php _e( 'Older', 'spanishschoolhouse' ); ?></a>
                <a class="btn btn-outline-secondary disabled" href="#"><?php _e( 'Newer', 'spanishschoolhouse' ); ?></a>
            </nav>
        </div>
        <!-- /.blog-main -->
        <aside class="col-sm-3 ml-sm-auto blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4><?php _e( 'About', 'spanishschoolhouse' ); ?></h4>
                <p><?php _e( 'Etiam porta', 'spanishschoolhouse' ); ?> <em><?php _e( 'sem malesuada magna', 'spanishschoolhouse' ); ?></em> <?php _e( 'mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.', 'spanishschoolhouse' ); ?></p>
            </div>
            <div class="sidebar-module">
                <h4><?php _e( 'Archives', 'spanishschoolhouse' ); ?></h4>
                <ol class="list-unstyled">
                    <li>
                        <a href="#"><?php _e( 'March 2014', 'spanishschoolhouse' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'February 2014', 'spanishschoolhouse' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'January 2014', 'spanishschoolhouse' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'December 2013', 'spanishschoolhouse' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'November 2013', 'spanishschoolhouse' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'October 2013', 'spanishschoolhouse' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'September 2013', 'spanishschoolhouse' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'August 2013', 'spanishschoolhouse' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'July 2013', 'spanishschoolhouse' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'June 2013', 'spanishschoolhouse' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'May 2013', 'spanishschoolhouse' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'April 2013', 'spanishschoolhouse' ); ?></a>
                    </li>
                </ol>
            </div>
            <div class="sidebar-module">
                <h4><?php _e( 'Elsewhere', 'spanishschoolhouse' ); ?></h4>
                <ol class="list-unstyled">
                    <li>
                        <a href="#"><?php _e( 'GitHub', 'spanishschoolhouse' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'Twitter', 'spanishschoolhouse' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'Facebook', 'spanishschoolhouse' ); ?></a>
                    </li>
                </ol>
            </div>
        </aside>
        <!-- /.blog-sidebar -->
    </div>
</div>            

<?php get_footer(); ?>