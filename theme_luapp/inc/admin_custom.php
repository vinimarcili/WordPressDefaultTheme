<?php
/**
*  Theme Admin Panel Custom File
*  Author:
*  Description:
*/

/*
* Admin Custom Exemples
*
//-> BD Data
function up_del_new_field($field)
{
	if($_REQUEST[$field] != ''){
		  update_option($field, $_REQUEST[$field]);

		  if (isset($_REQUEST[$field])) {
		    $value = preg_replace('/\\\"(.*)\\\"/', "“$1”", $_REQUEST[$field]);
		    update_option($field, $value);
		  } else {
		    delete_option($field);
		  }
	}
	else{
		echo "<script>alert('Erro de validação')</script>";
		die;
	}
}

// Add page to wp_admin
function main_admin_add() {
    add_theme_page("Dados Gerais", "Dados Gerais", 'edit_theme_options', basename(__FILE__), 'main_admin_html', '', 3);
}

// Page Layout
function main_admin_html() {
  // Form control
  $form_sent = false;

  if(isset($_REQUEST['save_options'])) {

  //Field Values

	//Address
		up_del_new_field('endereco');
		up_del_new_field('link_endereco');
		up_del_new_field('email');
		up_del_new_field('tel1');
		up_del_new_field('tel2');

  //Social
  	up_del_new_field('facebook_unidade');
  	up_del_new_field('instagram_unidade');
  	up_del_new_field('twitter_unidade');
  	up_del_new_field('linkedin_unidade');
  	up_del_new_field('google_plus_unidade');
  	up_del_new_field('youtube_unidade');
		up_del_new_field('rss');

		$form_sent = true;

		echo "<script>alert('Dados atualizados!')</script>";
  }

	//Address
	$endereco  = trim(addslashes(strip_tags(get_option('endereco'))));
	$link_endereco = trim(addslashes(strip_tags(get_option('link_endereco'))));
	$email = trim(addslashes(strip_tags(get_option('email'))));
	$tel1  = trim(addslashes(strip_tags(get_option('tel1'))));
	$tel2  = trim(addslashes(strip_tags(get_option('tel2'))));

  //Social
	$facebook_unidade  = trim(addslashes(strip_tags(get_option('facebook_unidade'))));
	$instagram_unidade = trim(addslashes(strip_tags(get_option('instagram_unidade'))));
	$twitter_unidade   = trim(addslashes(strip_tags(get_option('twitter_unidade'))));
	$linkedin_unidade  = trim(addslashes(strip_tags(get_option('linkedin_unidade'))));
	$google_plus_unidade  = trim(addslashes(strip_tags(get_option('google_plus_unidade'))));
	$youtube_unidade  = trim(addslashes(strip_tags(get_option('youtube_unidade'))));
	$rss  = trim(addslashes(strip_tags(get_option('rss'))));

	//Include HTML form Layout
	include('view/customform.php');

}
add_action('admin_menu' , 'main_admin_add');
*
*/
?>
