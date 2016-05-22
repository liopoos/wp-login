//更改登录界面
	function custom_login() {
		echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('template_directory') . '/css/login.css" />'."\n";
		echo '<script type="text/javascript" src="'.get_bloginfo('template_directory').'/js/jquery.min.js"></script>'."\n";
	}
	add_action('login_head', 'custom_login');

	//Login Page Title
	function custom_headertitle ( $title ) {
		//return get_bloginfo('name');
	}
	add_filter('login_headertitle','custom_headertitle');

	//Login Page Link
	function custom_loginlogo_url($url) {
		return esc_url( home_url('/') );
	}
	add_filter( 'login_headerurl', 'custom_loginlogo_url' );

	//Login Page Footer
	function custom_html() {
		echo '<div class="footer">'."\n";
		echo '<p>Copyright &copy; '.date('Y').' All Rights | <a href="https://blog.mayuko.cn" target="_blank">Hades</a></p>'."\n";
		echo '</div>'."\n";
		echo '<script type="text/javascript" src="'.get_bloginfo('template_directory').'/js/resizeBg.js"></script>'."\n";
		echo '<script type="text/javascript">'."\n";
		echo 'jQuery("body").prepend("<div class=\"loading\"><img src=\"'.get_bloginfo('template_directory').'/images/login_loading.gif\" width=\"58\" height=\"10\"></div><div id=\"bg\"><img /></div>");'."\n";
		echo 'jQuery(\'#bg\').children(\'img\').attr(\'src\', \''.get_bloginfo('template_directory').'/images/bing.php\').load(function(){'."\n";
		echo '	resizeImage(\'bg\');'."\n";
		echo '	jQuery(window).bind("resize", function() { resizeImage(\'bg\'); });'."\n";
		echo '	jQuery(\'.loading\').fadeOut();'."\n";
		echo '});';
		echo '</script>'."\n";
	}
	add_action('login_footer', 'custom_html');