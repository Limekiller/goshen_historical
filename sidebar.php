<div class="sidebar">
    <img src='http://localhost/goshen_historical/wp-content/uploads/2020/04/long_divider_rotated.png'/>
    <div class='sidebar-content'>
        <h2>News</h2>
        <ul>
            
            <?php query_posts('posts_per_page=10', 'type=post'); ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <li><a href='<?php echo the_permalink();?>'>
                <span class='sidebar-title'><?php echo the_title();?></span><br />
                <span class='sidebar-date'><?php echo the_date();?></span>
                </a></li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>
