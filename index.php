<!DOCTYPE HTML>
<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="keywords" content="Yusyaif, info teknologi, tutorial html, tutorial, html, css">
	<meta name="description" content="Situs tutorial, tips trick dan update mengenai teknologi informasi; serta tulisan lain mengenai ilmu pengetahuan.">
	<meta name="author" content="Yusuf Syaifudin" >
	<meta name="viewport" content="user-scalable=no; width=device-width; initial-scale=1.0; maximum-scale=1.0;">

	<title><?php wp_title('&raquo;', true, 'right'); bloginfo('name'); ?></title>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/normalize.css">

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/shortcut.js"></script>

	<script type="text/javascript">var switchTo5x=false;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "ur-927ef1f5-9404-75b9-8236-85527e63e128"}); </script>
</head>
<body>
<div id="fb-root"></div>
<div id="fade" class="black_overlay" onclick = "tutupcari();"></div>
<div class="wrap">
	<?php get_header(); ?>
	<?php get_template_part("menukiri"); ?>

	<div class="content">
		<?php get_template_part("overlaymenu"); ?>
		<?php if (is_home() && !is_paged()) { ?>
			<?php get_header("featured"); ?>
		<?php } else { get_template_part("randompost"); } ?>

		<?php get_sidebar(); ?>
		
		<?php $i=0; ?>		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php $i++; ?>
		<?php if($i < 6) { ?>
			<div class="post">
				<span class="folded-corner"></span>
				<a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
				<div class="post-info"><a href="javascript: void(0)" title="<?php the_time('F jS, Y'); ?>"><?php wp_days_ago(); ?></a> &mdash; <?php echo getPostViews(get_the_ID()); ?></div>
				<?php if (has_post_thumbnail()) : ?><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-thumb');?></a><?php endif; ?><?php the_excerpt(); ?>
			</div>

		<?php } else if($i==6) { ?>
		<div class="post">
			<script>
				/** yusyaif.com **/
				var sitti_pub_id = "BC0021074";
				var sitti_ad_width = "610";
				var sitti_ad_height = "60";
				var sitti_ad_type = "5";
				var sitti_ad_number = "1";
				var sitti_ad_name = "yusyaif.com";
				var sitti_dep_id = "76063";
				</script>
				<script src="http://stat.sittiad.com/delivery/sittiad.b1.js"></script> 
		</div>
		<div class="post">
				<span class="folded-corner"></span>
				<a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
				<div class="post-info"><a href="javascript: void(0)" title="<?php the_time('F jS, Y'); ?>"><?php wp_days_ago(); ?></a> &mdash; <?php echo getPostViews(get_the_ID()); ?></div>
				<?php if (has_post_thumbnail()) : ?><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-thumb');?></a><?php endif; ?><?php the_excerpt(); ?>
			</div>

		<?php } else if($i>6) { ?>
			<div class="post">
				<span class="folded-corner"></span>
				<a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
				<div class="post-info"><a href="javascript: void(0)" title="<?php the_time('F jS, Y'); ?>"><?php wp_days_ago(); ?></a> &mdash; <?php echo getPostViews(get_the_ID()); ?></div>
				<?php if (has_post_thumbnail()) : ?><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-thumb');?></a><?php endif; ?><?php the_excerpt(); ?>
			</div>
		<?php } ?>

		<?php endwhile; endif; ?>

		<div class="halaman">
			 <?php paginate(); ?>
		</div>
	</div>

	<?php get_footer(); ?>

	<div id="back-top">
		<a href="#top"><span></span>Back to Top</a>
	</div>
</div>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/expanding-images-slider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/all.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/facebook.js"></script>
</body>
</html>