$amount = '30'; // Amount
            $discount_type = 'percent'; // Type: fixed_cart, percent, fixed_product, percent_product

            $coupon = array(
                'post_title' => $coupon_code,
                'post_content' => '',
                'post_status' => 'publish',
                'post_author' => 1,
                'post_type'     => 'shop_coupon'
            );

            $new_coupon_id = wp_insert_post( $coupon );

// Add meta
            update_post_meta( $new_coupon_id, 'discount_type', $discount_type );
            update_post_meta( $new_coupon_id, 'coupon_amount', $amount );
            update_post_meta( $new_coupon_id, 'individual_use', 'yes' );
            update_post_meta( $new_coupon_id, 'product_ids', '' );
            update_post_meta( $new_coupon_id, 'exclude_product_ids', '' );
            update_post_meta( $new_coupon_id, 'usage_limit', '1' );
            update_post_meta( $new_coupon_id, 'date_expires', '7 Aug 2024' );
            update_post_meta( $new_coupon_id, 'used_by', get_current_user_id() );
            update_post_meta( $new_coupon_id, 'free_shipping', 'no' );
