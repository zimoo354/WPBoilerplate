<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><< Site Title goes here >> | <?php echo get_the_title(); ?></title>
	<meta name="title" value="<< Site Title goes here >>">
	<meta name="description" value="<< Description goes here >>">

	<?php wp_head(); ?>
</head>
<body>
	<header class="section-div">
		<div class="row">
			<div class="small-6 medium-3 columns">
				<img src="<?php res() ?>/path/to/logo.png" alt="Logo">
			</div>
			<div class="hide-for-small-only medium-9 columns">
				<ul class="menu float-right">
				<?php
				$menu = wp_get_nav_menu_items('main');
				foreach ($menu as $e) :
					?>
					<li><a href="<?php echo $e->url ?>"><?php echo $e->title ?></a></li>
				<?php endforeach ?>
				</ul>
			</div>
            <div class="small-6 columns show-for-small-only">
                <a href="#sidr" class="menu-mobile-trigger"><i class="fa fa-bars fa-2x float-right"></i></a>
            </div>
		</div>
	</header>

	<?php get_template_part('menu', 'mobile'); ?>

	