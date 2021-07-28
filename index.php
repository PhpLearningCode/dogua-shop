<?php get_header();?>

<div class="container pb-5">
    <div class="banner">
        <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/rolica1.png'; ?>"  />
        <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/doga1.png'; ?>"  />
    </div>

    <div class="products"> 
        <?php  
            global $paged;
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  
            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => 04,
                'paged' => $paged
            );

            $loop = new WP_Query( $args );

            while ( $loop->have_posts() ) : $loop->the_post();
                global $product;
                echo '<a href="'.get_permalink().'">' . woocommerce_get_product_thumbnail().'</br> '.get_the_title();
                echo '<p>R$' . wc_get_product()->get_price() . '</p></a>';
            endwhile;

            wp_reset_query();
        ?>
        
        <nav>
            <ul>
                <li><?php previous_posts_link( '&laquo;', $loop->max_num_pages) ?></li> 
                <li><?php next_posts_link( '&raquo;', $loop->max_num_pages) ?></li>
            </ul>
        </nav>

        <?php wp_reset_postdata(); ?>
    
    </div>
    
</div>

<?php get_footer();?>