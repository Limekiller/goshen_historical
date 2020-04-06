<?php get_header(); 

wp_enqueue_script('home', get_template_directory_uri().'/public/scripts/home.js', array('jquery', 'main'));
wp_enqueue_style('home', get_template_directory_uri().'/public/styles/home.css');?>

    <?php $scrolling_images = get_field('scrolling_images');?>
    <div class='scrolling-images'>
        <div class='scrolling-images-container first'>
            <div class='img'>
                <img src='<?php echo $scrolling_images["scrolling_image_1"];?>' />
            </div>
            <div class='img'>
                <img src='<?php echo $scrolling_images["scrolling_image_2"];?>' />
            </div>
            <div class='img'>
                <img src='<?php echo $scrolling_images["scrolling_image_3"];?>' />
            </div>
            <div class='img'>
                <img src='<?php echo $scrolling_images["scrolling_image_4"];?>' />
            </div>
            <div class='img'>
                <img src='<?php echo $scrolling_images["scrolling_image_5"];?>' />
            </div>
            <div class='img'>
                <img src='<?php echo $scrolling_images["scrolling_image_6"];?>' />
            </div>
        </div>
        <div class='scrolling-images-container second'>
            <div class='img'>
                <img src='<?php echo $scrolling_images["scrolling_image_1"];?>' />
            </div>
            <div class='img'>
                <img src='<?php echo $scrolling_images["scrolling_image_2"];?>' />
            </div>
            <div class='img'>
                <img src='<?php echo $scrolling_images["scrolling_image_3"];?>' />
            </div>
            <div class='img'>
                <img src='<?php echo $scrolling_images["scrolling_image_4"];?>' />
            </div>
            <div class='img'>
                <img src='<?php echo $scrolling_images["scrolling_image_5"];?>' />
            </div>
            <div class='img'>
                <img src='<?php echo $scrolling_images["scrolling_image_6"];?>' />
            </div>
        </div>
    </div>
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
