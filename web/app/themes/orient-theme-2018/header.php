<!--
Hey! I see you checking out the source code of this site. Think there are
things that should be changed? Think you could do better? If you're a Bowdoin
student and want to join the Orient tech team, email orient@bowdoin.edu.
-->

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<!-- Required -->
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Links -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<script type="text/eqcss" src="<?php echo get_stylesheet_directory_uri(); ?>/sass/element-queries.eqcss"></script>

	<!-- Font loading -->
	<script type="text/javascript" src="https://use.typekit.com/rmt0nbm.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/7613576/7415972/css/fonts.css" />

	<link rel="author" href="/humans.txt">

    <!-- WordPress Scripts -->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="top-bar">
	<div class="top-bar__social-links top-bar__component">
		<a href="https://www.facebook.com/bowdoinorient" class="facebook-icon" target="_blank">
		   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="40"><path d="M17 1H3C1.9 1 1 1.9 1 3v14c0 1.1 0.9 2 2 2h7v-7H8V9.5h2V7.5c0-2.2 1.2-3.7 3.8-3.7l1.8 0v2.6h-1.2C13.4 6.4 13 7.1 13 7.8v1.7h2.6L15 12h-2v7h4c1.1 0 2-0.9 2-2V3C19 1.9 18.1 1 17 1z"/></svg>
		</a>

		<a href="https://twitter.com/bowdoinorient" class="twitter-icon" target="_blank">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="40"><path d="M17.3 6.2c0 0.2 0 0.3 0 0.5 0 5-3.8 10.7-10.7 10.7 -2.1 0-4.1-0.6-5.8-1.7 0.3 0 0.6 0.1 0.9 0.1 1.8 0 3.4-0.6 4.7-1.6 -1.7 0-3-1.1-3.5-2.6 0.2 0 0.5 0.1 0.7 0.1 0.3 0 0.7 0 1-0.1 -1.7-0.3-3-1.9-3-3.7 0 0 0 0 0 0 0.5 0.3 1.1 0.5 1.7 0.5 -1-0.7-1.7-1.8-1.7-3.1 0-0.7 0.2-1.3 0.5-1.9C3.9 5.5 6.7 7 9.9 7.2 9.8 6.9 9.8 6.6 9.8 6.3c0-2.1 1.7-3.8 3.8-3.8 1.1 0 2.1 0.5 2.8 1.2 0.9-0.2 1.7-0.5 2.4-0.9 -0.3 0.9-0.9 1.6-1.7 2.1 0.8-0.1 1.5-0.3 2.2-0.6C18.7 5.1 18.1 5.7 17.3 6.2z"/></svg>
		</a>

		<a href="https://vimeo.com/bowdoinorient" class="vimeo-icon" target="_blank">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="40"><path d="M18.9 5.8c-1 5.8-6.6 10.7-8.3 11.8 -1.7 1.1-3.2-0.4-3.8-1.6C6.2 14.6 4.2 7.3 3.7 6.7 3.2 6.1 1.7 7.3 1.7 7.3L1 6.4c0 0 3.1-3.7 5.4-4.2C8.9 1.7 8.9 6 9.5 8.4c0.6 2.3 1 3.7 1.5 3.7 0.5 0 1.5-1.3 2.5-3.3 1.1-2 0-3.8-2.1-2.5C12.1 1.3 19.9 0.1 18.9 5.8z"/></svg>
		</a>

		<a href="https://www.instagram.com/bowdoinorient/" class="instagram-icon" target="_blank">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" width="40"><path d="M17.95 5.3a6.6 6.6 0 0 0-.42-2.2 4.4 4.4 0 0 0-1.04-1.6A4.4 4.4 0 0 0 14.9.48a6.6 6.6 0 0 0-2.2-.42C11.76 0 11.45 0 9 0S6.25 0 5.3.05a6.6 6.6 0 0 0-2.2.42A4.4 4.4 0 0 0 1.5 1.5 4.4 4.4 0 0 0 .48 3.1a6.6 6.6 0 0 0-.42 2.2C0 6.24 0 6.55 0 9s0 2.75.05 3.7a6.6 6.6 0 0 0 .42 2.2 4.4 4.4 0 0 0 1.04 1.6 4.4 4.4 0 0 0 1.6 1.03 6.6 6.6 0 0 0 2.2.42C6.25 18 6.56 18 9 18s2.75 0 3.7-.05a6.6 6.6 0 0 0 2.2-.42 4.6 4.6 0 0 0 2.63-2.63 6.6 6.6 0 0 0 .42-2.2c.04-.95.05-1.26.05-3.7s0-2.75-.05-3.7zm-1.62 7.34a4.98 4.98 0 0 1-.3 1.67 2.98 2.98 0 0 1-1.72 1.73 4.98 4.98 0 0 1-1.65.3c-.95.05-1.24.06-3.64.06s-2.7 0-3.63-.06a4.98 4.98 0 0 1-1.67-.3 2.8 2.8 0 0 1-1.04-.7 2.8 2.8 0 0 1-.68-1.02 4.98 4.98 0 0 1-.3-1.66C1.62 11.7 1.6 11.4 1.6 9s0-2.7.05-3.64a4.98 4.98 0 0 1 .3-1.67 2.8 2.8 0 0 1 .7-1.05 2.8 2.8 0 0 1 1.02-.68 4.98 4.98 0 0 1 1.66-.3C6.3 1.62 6.6 1.6 9 1.6s2.7 0 3.64.05a4.98 4.98 0 0 1 1.67.3 2.8 2.8 0 0 1 1.05.7 2.8 2.8 0 0 1 .68 1.02 4.98 4.98 0 0 1 .3 1.66c.05.95.06 1.24.06 3.64s0 2.7-.06 3.64zM9 4.38A4.62 4.62 0 1 0 13.62 9 4.62 4.62 0 0 0 9 4.38zM9 12a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm5.88-7.8a1.08 1.08 0 1 1-1.08-1.08 1.08 1.08 0 0 1 1.08 1.08z"/></svg>
		</a>

		<a href="<?php echo wp_login_url('wp-admin') ?>" class="wordpress-login-icon">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="40"><path d="M10,1.3l2.388,6.722H18.8l-5.232,3.948l1.871,6.928L10,14.744l-5.438,4.154l1.87-6.928L1.199,8.022h6.412L10,1.3z"/></svg>
		</a>
	</div>

	<?php if(!is_in_front_page_tree()) : ?>
	<div class="top-bar__nameplate top-bar__component">
		<a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nameplate.svg" alt="">
			<span class="visually-hidden">The Bowdoin Orient - Home</span>
		</a>
	</div>
	<?php endif; ?>

	<div class="top-bar__search-link top-bar__component">
		<a href="#" class="search-icon" id="searchIcon">
			<!-- <span class="icon"> -->
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="40"><path d="M17.5 15.5l-3.8-3.8c0.6-0.9 0.9-2 0.9-3.2 0-3.4-3-6.4-6.4-6.4C4.9 2.1 2.1 4.9 2.1 8.3c0 3.4 3 6.4 6.4 6.4 1.1 0 2.2-0.3 3.1-0.8l3.8 3.8c0.4 0.4 1 0.4 1.3 0l0.9-0.9C18.1 16.3 17.9 15.8 17.5 15.5zM4 8.3c0-2.4 1.9-4.3 4.3-4.3 2.4 0 4.5 2.1 4.5 4.5 0 2.4-1.9 4.3-4.3 4.3C6.1 12.8 4 10.7 4 8.3z"/></svg>
			<!-- </span>
			<span class="close js-hidden"> -->
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="40"><path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697c0.469-0.469,1.228-0.469,1.697,0L10,8.183l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0c0.469,0.469,0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15C14.817,13.62,14.817,14.38,14.348,14.849z"/></svg>
			<!-- </span> -->
		</a>
	</div>
</div>

<?php wp_reset_query(); if (!is_in_front_page_tree()) : ?>
<!-- The set of navigation links underneath the top menu. Substitutes for
the home page navigation menu on non-home pages. -->
<div class="mini-nav">
	<div class="sections">
		<a href="/">Home</a>
		<a href="/section/news">News</a>
		<a href="/section/features">Features</a>
		<a href="/section/arts-entertainment">Arts &amp; Entertainment</a>
		<a href="/section/sports">Sports</a>
		<a href="/section/opinion">Opinion</a>
	</div>
	<div class="more-pages">
		<a href="/about">About</a>
		<a href="/contact">Contact</a>
		<a href="/advertise">Advertise</a>
	</div>
</div>
<?php endif; ?>
