<?php get_header(); 

wp_enqueue_script('home', get_template_directory_uri().'/public/scripts/home.js', array('jquery', 'main'));?>

    <div class='header-image'>
        <?php  if (has_post_thumbnail()):
            $url = wp_get_attachment_url( get_post_thumbnail_id(  ), 'thumbnail' );?>
            <img src='<?php echo $url;?>' />
        <?php endif;?>
    </div>
    <div class="container">
        <?php $post = get_post();?>
        <div class='title'>
            <h1><?php echo $post->post_title;?></h1>
        </div>
        <p><?php echo apply_filters('the_content',$post->post_content);?></p>
    </div>
<?php get_footer(); ?>
