<?php get_header(); ?>
    <div class='scrolling-images'>
        <div class='scrolling-images-container first'>
            <div class='img'></div>
            <div class='img'></div>
            <div class='img'></div>
            <div class='img'></div>
            <div class='img'></div>
            <div class='img'></div>
        </div>
        <div class='scrolling-images-container second'>
            <div class='img'></div>
            <div class='img'></div>
            <div class='img'></div>
            <div class='img'></div>
            <div class='img'></div>
            <div class='img'></div>
        </div>
    </div>
    <div class="container">
        <div class='title'>
            <h1>Step into history</h1>
            <h2><i>Right here in Goshen</i></h2>
        </div>
        <div class="row">
            <div class="col-sm-8 blog-main">
                <?php get_template_part( 'content', get_post_format() ); ?>
            </div> <!-- /.blog-main -->
            <?php get_sidebar(); ?>
        </div> <!-- /.row -->
<?php get_footer(); ?>
