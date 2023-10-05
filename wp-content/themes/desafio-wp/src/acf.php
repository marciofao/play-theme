<?php 

add_action( 'admin_notices', 'my_theme_dependencies' );

function my_theme_dependencies() {
  if( ! function_exists('acf_add_local_field_group') )
    echo '<div class="error"><p>' . __( 'Aviso: O tema Play precisa do plugin Advanced Custom Fields para funcionar corretamente!', 'my-theme' ) . '</p></div>';
}


add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_651e1ced9a7cc',
	'title' => 'Videos',
	'fields' => array(
		array(
			'key' => 'field_651e1cee26841',
			'label' => 'Duração do Vídeo',
			'name' => 'bx_play_video_duration',
			'aria-label' => '',
			'type' => 'number',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 80,
			'min' => '',
			'max' => '',
			'placeholder' => '',
			'step' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_651e1d5167609',
			'label' => 'Embed de Vídeo',
			'name' => 'bx_play_video_ID',
			'aria-label' => '',
			'type' => 'url',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_651e6c2d0d164',
			'label' => 'Descrição',
			'name' => 'descricao',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_651e6c510d165',
			'label' => 'Sinopse',
			'name' => 'sinopse',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'video',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );

