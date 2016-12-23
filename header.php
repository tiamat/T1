<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<script type="text/javascript">
			<!--
            var color = 0;
            var interval = 60;  /* time msec, after which color changes */
            var clrInc = 4;     /* HSV degree increment */
            function chcolor(){
                var t1_logo = document.getElementById("t1_tl"); /* div_to_animate */
                color < 360 ? color = color + clrInc : color = 0;
                t1_logo.style.backgroundColor = "hsl("+color+", 100%, 50%)";
            }

            function stchcol(){
                var logoChCol = setInterval(chcolor, interval);
            }
            window.onload = stchcol;
			//-->
        </script>
	<link rel="icon" href="/img/favicon.ico" />
	<link rel="icon" href="/img/favicon.gif" type="image/gif" />
	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
<?php wp_head() // For plugins ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
	<link rel="openid.server" href="http://www.myopenid.com/server" />
	<link rel="openid.delegate" href="http://T1amat.myopenid.com/" /> 
	<meta http-equiv="X-XRDS-Location" content="http://www.myopenid.com/xrds?username=T1amat.myopenid.com" />
	

</head>

<body >

<div id="wrapper" class="hfeed">

	<div id="header">
				
	</div><!--  #header -->
	<div id="navigation">

		<div id="t1_tl" >
		<a href="http://tiamat.name" ><img src="/img/t1_x180_y80_transparent.png" alt="Main page"/></a>
		</div>
		<div id="navigation_categories">		
			<ul><?php wp_list_categories(array('show_count'=>0, 'title_li'=>'')); ?> </ul>
		</div>
		<?php get_sidebar(); ?>
		<div id="credentials">
			<p> Theme T1 (ver 0.6) was designed by Evzhenkov Svyatoslav, exclusively for <a href="http://tiamat.name">tiamat.name</a></p>
			<p> No rights reserved. IE is not a browser.</p>
			<p> 2009-2014. <a href="http://tiamat.name">tiamat.name.</a></p>
		</div>
	</div>
