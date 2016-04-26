   <section class="storefront-product-section storefront-homepage-extra-sections">
		
		<div class="woocommerce columns-3">
			
			<?php if ( is_active_sidebar( 'shesw-1' ) || is_active_sidebar( 'shesw-2' ) || is_active_sidebar( 'shesw-3' ) ) { ?>
				<?php if ( is_active_sidebar( 'shesw-1' ) ) { ?>
				    <div class="shes-widget first">
					    <?php dynamic_sidebar( 'shesw-1' ); ?>
	                </div><!-- .widget-area -->
                <?php } ?>
				
				<?php if ( is_active_sidebar( 'shesw-2' ) ) { ?>
				    <div class="shes-widget">
					    <?php dynamic_sidebar( 'shesw-2' ); ?>
	                </div><!-- .widget-area -->
                <?php } ?>
				
				<?php if ( is_active_sidebar( 'shesw-3' ) ) { ?>
				    <div class="shes-widget last">
					    <?php dynamic_sidebar( 'shesw-3' ); ?>
	                </div><!-- .widget-area -->
                <?php } 
			} ?>
					
			
		</div>
		
	</section>