</div> <!-- /.container -->

        <footer class="blog-footer">
            <?php
            $num_items_in_cart = WC()->cart->cart_contents_count;
            if ($num_items_in_cart and $pagename !== "cart") { ?>
                <div class='custom-cart'>
                    <span>Cart</span><br />
                    <a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', WC()->cart->cart_contents_count, 'woothemes'), WC()->cart->cart_contents_count);?> - <?php echo WC()->cart->get_cart_total(); ?></a>
                </div>
            <?php } ?>
            <div class='container right'>
                <div class='row'> 
                    <div class='col-sm-12'>
                        <span>Copyright <?php echo date("Y");?></span><br />
                        <span>Designed by <a target='_blank' href='https://bryceyoder.com'>Bryce Yoder</a></span>
                    </div>
               </div>
            </div>
        </footer>

      <?php wp_footer(); ?>
    </div> <!-- /.site-wrapper -->
  </body>
</html>
