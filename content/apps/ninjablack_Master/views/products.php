<?php app_header(); ?>

<h2><?php get_page_title(); ?></h2>

<div class="item-container clearfix">
	<?php foreach( get_all_product_ids() as $id ) : ?>
    	<?php if( the_product_stock( $id ) != 0 ) : ?>
            <div class="item item-sm">
                <a href="<?php get_product_slug( $id ); ?>" class="item-click"></a>
                <div class="item-cover">
                    <div class="item-cover-darken-on-hover"><a href="<?php get_product_slug( $id ); ?>"></a></div>
                    <img class="item-cover-image" src="<?php get_product_image( $id ); ?>" alt="<?php the_product_name( $id ); ?>" />
                </div><!-- end item-cover -->
                <div class="item-details">
                    <div class="item-title"><a href="<?php get_product_slug( $id ); ?>"><?php get_product_name( $id ); ?></a></div>
                    <div class="item-subtitle primary">We need <?php get_product_stock( $id ); ?> for Eyden.</div>
                    <div class="item-price-container">
                        <div class="item-price">
                            <a href="<?php get_product_slug( $id ); ?>" class="btn btn-link btn-sm">$<?php get_product_price( $id ); ?></a>
                        </div><!-- end item-price -->
                        <div class="item-price-container-body">
                            At <?php get_product_seller( $id ); ?> 
                        </div><!-- end item-price-container-body -->
                    </div><!-- end item-price-container -->
                </div><!-- end item-details -->
            </div><!-- end item -->
       	<?php endif; ?>
    <?php endforeach; ?>
</div><!-- end item-container --> 

<?php app_footer(); ?>