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
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.bxSlider.min.js"></script>
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

		<?php get_template_part("overlaymenusingle"); ?>
		<?php get_template_part("randompost"); ?>
		<?php get_sidebar(); ?>
			
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php setPostViews(get_the_ID()); ?> <!-- Count the post views -->
			<div class="post">
				<span class="folded-corner"></span>
				<a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
				<?php the_date(); ?>
				<?php the_content(); ?>
				 <span class="left sebelum"><?php previous_post_link(); ?></span>
				 <span class="right sesudah"><?php next_post_link(); ?></span>
				 <br>
				 <h6 class="bar"><span>PROFIL PENULIS</span></h6>
				 <div id="penulis">
					 <span class="fotoprofil"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-snc4/369237_1719390723_408049672_n.jpg" alt="Photo"></span>
					 <span class="bio">
					 <a href="http://about.me/yusufsyaifudin" target="blank">Yusuf Syaifudin</a> adalah seorang mahasiswa tahun kedua di sebuah universitas negeri di Yogyakarta.
					 Sebagai mahasiswa yang tidak jauh dari yang namanya komputer, saya sangat tertarik dengan web: baik itu web design ataupun application.
					 <h6 class="bar"><span>SOCIAL MEDIA</span></h6>
					 <a href="https://twitter.com/yusuf_udin" class="twitter-follow-button" data-show-count="false">Follow @yusuf_udin</a>
					</span>
				</div>
			</div>
			<div class="fb-recommendations-bar" data-href="http://yusyaif.com/" data-side="left" data-read-time="10"></div>
				<?php comments_template(); ?>
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
		<?php endwhile; endif; ?>

		<div class="tags"><?php the_tags('Tags: ',''); ?></div>
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