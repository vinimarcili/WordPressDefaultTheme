<?php
/**
*  Theme Customizer File
*  Author:
*  Description:
*/

namespace theme_luapp\Customizer;
/*
* Customizer Exemples
*
function footer_customize_register( $wp_customize ) {
  $wp_customize->add_section( 'footer', array(
			'title'	=> esc_html__( 'Footer', 'unius' ),
			'capability' => 'edit_theme_options',
			'description' => esc_html__( 'Change top title and logo', 'unius' ),
			'prioriry' => 120
		)
	);

  //Facebook
  $wp_customize->add_setting('facebook',[
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => '',
		'sanitize_js_callback' => '', // Basically to_json.
  ]);

  $wp_customize->add_control( 'facebook', array(
  		'label' => esc_html__( 'Facebook', 'unius' ),
		'section' => 'footer',
		'settings' => 'facebook',
		'type' => 'text'
  	)
  );

  //Google +
  $wp_customize->add_setting('google',[
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => '',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => '',
    'sanitize_js_callback' => '', // Basically to_json.
  ]);

  $wp_customize->add_control( 'google', array(
      'label' => esc_html__( 'Google +', 'unius' ),
    'section' => 'footer',
    'settings' => 'google',
    'type' => 'text'
    )
  );

}
add_action('customize_register',__NAMESPACE__ .  '\\footer_customize_register');
*
*/
