<?php /* Template Name: WPBeginnerT1 */ ?>
<?php get_header(); ?>
	<div class="slider">
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('slider')) : ?><?php endif; ?>
	</div>
	<div class="content-cat">
		<div class="container">
			<div class="row">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('cat-top')) : ?><?php endif; ?>
			</div>
		</div>
	</div>
    <div class="slider-pr">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('slider-pr')) : ?><?php endif; ?>
    </div>
    <div class="content-bg1">
    	<div class="container">
    		<div class="col-sm-12 col-lg-7 col-md-9 inner-content-bg1">
    		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('content-bg1')) : ?><?php endif; ?>
    		</div>
    	</div>
    </div>
    <div class="whole-content">
	    <div class="content-pr">
	    	<div class="container">
	        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('products')) : ?><?php endif; ?>
	        </div>
	    </div>
	    <div class="whychoose">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-6">
	    				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('text-choose')) : ?><?php endif; ?>
	    			</div>
	    			<div class="col-md-6">
	    				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('img-choose')) : ?><?php endif; ?>
	    			</div>
	    		</div>
	    	</div>
	    </div>
    </div>
    <div class="wave">
    </div>
    <div class="articles">
    	<div class="container">
    	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('articles-cat')) : ?><?php endif; ?>
    	</div>
    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

