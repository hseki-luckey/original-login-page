<?php
/*
Plugin Name: Original Login Page
Plugin URI: https://tech.linkbal.co.jp/3087/
Description: ログイン画面をカスタム
Version: 1.0
Author: hseki, LINKBAL
Author URI: https://tech.linkbal.co.jp/author/hseki/
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/* ロゴ画像変更 */
function custom_login_page () { ?>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script>
$(document).ready(function(){
	$('#nav').html('<a href="<?php echo home_url('/wp-login.php?action=lostpassword'); ?>">パスワード再発行</a>');
	$('#backtoblog').html('<a href="<?php echo home_url('/'); ?>">TOPに戻る</a>');
});
</script>
<style>
body.login {
	background-image: url(<?php echo plugins_url( 'logo.png', __FILE__ ); ?>);
	background-repeat: no-repeat;
	background-position: right 5px bottom 10px;
	background-size: 400px;
	background-color: azure;
}

div#login {
	margin-top: 10%;
	width: 400px;
}

.login #login h1 {
	display: none;
}

form#loginform {
	background: #053352;
	border-radius: 6px;
	-webkit-border-radius: 6;
	-moz-border-radius: 6;
	font-size: 20px;
}

form#loginform label {
	color: white;
}

form#loginform .input {
	padding: 5px 10px;
}

.login #nav a {
	float: left;
}

.login #backtoblog a {
	float: right;
}
</style>
<?php }
add_action( 'login_enqueue_scripts', 'custom_login_page' );
?>