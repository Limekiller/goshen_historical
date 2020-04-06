<?php get_header(); 

wp_enqueue_style('post', get_template_directory_uri().'/public/styles/post.css');?>

<div class='container flex post'>
    <div class='three-quarters'>
        <div class='header-image post'>
            <?php  if (has_post_thumbnail()):
                $url = wp_get_attachment_url( get_post_thumbnail_id(  ), 'thumbnail' );?>
                <img src='<?php echo $url;?>' />
            <?php endif;?>
        </div>
        <?php $post = get_post();?>
        <h1><?php echo $post->post_title;?></h1>
        <span>
            <i><?php echo date("F d, Y", strtotime($post->post_date));?> | 
            <?php echo get_the_category($post->ID)[0]->name;?> 
            </i>
        </span>
        <p><?php echo apply_filters('the_content',$post->post_content);?></p>
    </div>
    <div class='one-quarter'>
        <?php get_sidebar();?> 
    </div>
</div>
<?php get_footer();?>
