<?php get_header(); 

wp_enqueue_script('home', get_template_directory_uri().'/public/scripts/home.js', array('jquery', 'main'));
wp_enqueue_style('home', get_template_directory_uri().'/public/styles/home.css');?>

    
    <?php 
    $slideshow = get_field('slideshow');
    if ($slideshow) {  ?>
        <div class='slide-container'>
            <?php for ($i = 1; $i <= 3; $i++) {  
                if ($i === 1) { ?>
                    <img class='active' src='<?php echo $slideshow['slideshow_image_'.$i]?>' />
                <?php } else { ?>
                    <img src='<?php echo $slideshow['slideshow_image_'.$i]?>' />
                <?php } 
            } ?>
            <div class='mask'></div>
        </div>
    <?php } ?>

    <div class="container">
        <?php
        $headline = get_field("headline");
        $subhead = get_field("subhead");?>
        <div class='title'>
            <?php
            if ($headline) {?>
                <h1><?php echo $headline;?></h1>
            <?php } else { ?>
                <h1>Step into history</h1>
            <?php }
            if ($subhead) { ?>
                <h2><i><?php echo $subhead;?></i></h2>
            <?php } else { ?>
                <h2><i>Right here in Goshen</i></h2>
            <?php } ?>
        </div>
        <?php query_posts('posts_per_page=10&type=post'); ?>
        <?php if ( have_posts() ):?>
            <h1>News</h1>
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
        <?php endif; ?>
        <img class='divider' src='http://localhost/goshen_historical/wp-content/uploads/2020/04/long_divider.png' />
        <?php $post = get_post(9); ?>
        <h1><?php echo $post->post_title; ?></h1>
        <p><?php echo $post->post_content; ?></p>
<?php get_footer(); ?>
