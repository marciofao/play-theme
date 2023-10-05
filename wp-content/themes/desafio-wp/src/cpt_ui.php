<?php 

function cptui_register_my_cpts() {

	/**
	 * Post Type: Videos.
	 */

	$labels = [
		"name" => esc_html__( "Videos", "play" ),
		"singular_name" => esc_html__( "Video", "play" ),
	];

	$args = [
		"label" => esc_html__( "Videos", "play" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "video", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-editor-video",
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "video", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Duração dos vídeos.
	 */

	$labels = [
		"name" => esc_html__( "Duração dos vídeos", "play" ),
		"singular_name" => esc_html__( "Duração do Vídeo", "play" ),
	];

	
	$args = [
		"label" => esc_html__( "Duração dos vídeos", "play" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'bx_play_video_duration', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "bx_play_video_duration",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "bx_play_video_duration", [ "video" ], $args );

	/**
	 * Taxonomy: Tipo dos vídeos.
	 */

	$labels = [
		"name" => esc_html__( "Tipo dos vídeos", "play" ),
		"singular_name" => esc_html__( "Tipo do Vídeo", "play" ),
	];

	
	$args = [
		"label" => esc_html__( "Tipo dos vídeos", "play" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'video_type', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "video_type",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "video_type", [ "video" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
function cptui_register_my_taxes_bx_play_video_duration() {

	/**
	 * Taxonomy: Duração dos vídeos.
	 */

	$labels = [
		"name" => esc_html__( "Duração dos vídeos", "play" ),
		"singular_name" => esc_html__( "Duração do Vídeo", "play" ),
	];

	
	$args = [
		"label" => esc_html__( "Duração dos vídeos", "play" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'bx_play_video_duration', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "bx_play_video_duration",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "bx_play_video_duration", [ "video" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_bx_play_video_duration' );

function cptui_register_my_taxes_video_type() {

	/**
	 * Taxonomy: Tipo dos vídeos.
	 */

	$labels = [
		"name" => esc_html__( "Tipo dos vídeos", "play" ),
		"singular_name" => esc_html__( "Tipo do Vídeo", "play" ),
	];

	
	$args = [
		"label" => esc_html__( "Tipo dos vídeos", "play" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'video_type', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "video_type",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "video_type", [ "video" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_video_type' );