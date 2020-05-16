</div> <!-- /.container -->

        <footer class="blog-footer">
            <?php
            $num_items_in_cart = WC()->cart->cart_contents_count;
            $cart_opacity_class = 'hidden';
            if ($num_items_in_cart and $pagename !== "cart") { 
                $cart_opacity_class = '';
            } ?>
            <div class='custom-cart <?php echo $cart_opacity_class;?>'>
                <span>Cart</span><br />
                <a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
                    <span class='items'><?php echo WC()->cart->cart_contents_count; ?></span> 
                    <span> items - </span>
                    <span class='price'><?php echo WC()->cart->get_cart_total(); ?></span>
                </a>
            </div>
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
