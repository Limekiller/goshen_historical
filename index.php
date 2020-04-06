<?php get_header();

wp_enqueue_script('home', get_template_directory_uri().'/public/scripts/home.js', array('jquery', 'main'));?>

    <div class='header-image'>
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id( 14 ), 'thumbnail' );?>
        <img src='<?php echo $url;?>' />
    </div>
    <div class="container">
        <div class='title'>
            <h1>News</h1>
        </div>
            <div class='news-container'>
                <?php while ( have_posts() ) : the_post(); ?>
                    <a href='<?php echo the_permalink();?>'>
                        <div class='news'>
                            <?php if (has_post_thumbnail()): ?>
                                <?php echo the_post_thumbnail();?>
                            <?php endif; ?>
                            <div class='news-info-holder'>
                                <h2><?php echo the_title();?></h2>
                                <?php echo the_date();?>
                                <p><?php echo wp_trim_words(get_the_content(), 20, '...');?></p>
                            </div>
                        </div>
                    </a>
                <?php endwhile; ?>
            </div>
<?php get_footer(); ?>
