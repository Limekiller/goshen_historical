jQuery(document).ready(function() {
    window.setTimeout(() => {
        jQuery('.add_to_cart_button').click(() => {
            window.setTimeout(() => {
                jQuery.post({
                    url:'../wp-admin/admin-ajax.php',
                    datatype: 'JSON',
                    data: {action:'get_wc_cart_info'},
                    success:function(result) {
                        let parsedResult = JSON.parse(result);
                        jQuery('.custom-cart').removeClass('hidden');
                        jQuery('.items').html(parsedResult[0]);
                        jQuery('.price').html(parsedResult[1]);
                    }
                });
            }, 1000);
        });
    }, 1000);
});
