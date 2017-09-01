<style>
.mm-trig {
	text-align: right;
	float: right;
	margin: 10px;
	cursor: pointer;
	color: #005A93;
}
nav.menu-mobile {
	position: fixed;
	z-index: 1500;
	background-color: white;
	width: 100vw;
	height: 100vh;
	top: 0;
	left: -100vw;
	transition: 200ms ease-in-out;
}
nav.menu-mobile.open {
	left: 0vw !important;
}
nav.menu-mobile img {
	display: block;
	margin: 0 auto;
}
nav.menu-mobile .small-6 > a {
	width: 100%;
	padding: 10px 0;
	text-align: center;
	font-size: 20px;
	display: block;
	font-family: 'Branding';
}
</style>


<nav class="menu-mobile">
	<div class="row">
		<div class="small-8 columns pad-und-sm">
			<img src="<?php bloginfo('template_url'); ?>/img/logo.png">
		</div>
		<div class="small-4 columns pad-und-sm">
			<i class="fa fa-close fa-3x mm-trig" onclick="menuMobile();"></i>
		</div>
		<div class="small-6 columns">
			<a href="#">Lorem</a>
		</div>
		<div class="small-6 columns">
			<a href="#">Lorem</a>
		</div>
		<div class="small-6 columns">
			<a href="#">Lorem</a>
		</div>
		<div class="small-6 columns">
			<a href="#">Lorem</a>
		</div>
		<div class="small-6 columns">
			<a href="#">Lorem</a>
		</div>
		<div class="small-6 columns">
			<a href="#">Lorem</a>
		</div>
		<div class="small-12 columns pad-und-sm">
			<a href="#">Lorem</a>
		</div>
	</div>
</nav>

<script>
function menuMobile() {
	$('.menu-mobile').toggleClass('open');
}

$('.menu-mobile a').click(function(){
	$('.menu-mobile').toggleClass('open');
})
</script>