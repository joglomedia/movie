<?php get_header();?>
<div id="main-content" class="rounded">
<h1 class="entry-title">Currently browsing: <span class="yellow"><?php single_cat_title(); ?></span></h1>
<div id="playingnow"></div>
<?php $i=0;if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php $i++;if($i==2||$i==9||$i==18):?>
	<div class="ads336" align="center"><div class="rounded" style="box-shadow:0 0 20px lightblue;width:336px;padding:5px">
	<?php if (get_theme_option('336')) {echo get_theme_option('336');}else{echo '<img src="http://images.fachrul.com/upload/images/VL64.jpg"/>';} ?>
	</div>.:Advertisement:.</div>
	<? endif;?>
<?php include('post.php'); ?>
<? endwhile;?>
<?php if(function_exists('wp_pagenavi')) { ?><?php wp_pagenavi(); ?>
			<?php } else { ?>
			<div class="left"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="right"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
			<?php } ?>
<? else:?>
<span class="yellow">Sorry, We don't have your request. That's all we know.</span> 
<? endif;?>
</div>
<?php get_footer(); ?>