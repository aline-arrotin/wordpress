<footer>
	Copyright : Licorne 2016

	<nav>
		<?php
$args =array(
	'menu' => 'second',
	'container' => 'nav',
	'container_class' => 'menu_sociaux',
	'container_id' => '',
	'menu_class' => 'menu_sociaux',
	'menu_id' => '',
    'before' => ' ',
    'after' => '<hr>',
    'link_before' => '',
    'link_after' => '',
    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth' => 0,
    'theme_location' => 'second' );
wp_nav_menu($args); ?>
	</nav> <!-- Je viens placer mon menu dans le html -->

</footer>
<?php wp_footer(); ?>
	</div>

	
<!-- 	<script src="<?php //echo bloginfo('template_url'); ?>/js/main.js"></script> -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-XXXXX-Y', 'auto');
		ga('send', 'pageview');
	</script>
</body>
</html>
