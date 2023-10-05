<?php 

$scripts_version = 1.0;
//dev cache boosting
//$scripts_version = time();

add_theme_support( 'custom-logo' );

require_once('src/acf.php');
require_once('src/cpt_ui.php');

/* adds stylesheet file to the end of the queue */
function play_override_style()
{
    global $scripts_version;
    $dir = get_template_directory_uri();
    wp_enqueue_style('theme-override', $dir . '/dist/output.css', array(), $scripts_version, 'all');
}
add_action('wp_enqueue_scripts', 'play_override_style', 10);

//funcção para debug
function dump_die($a){
    echo '<pre>';
    var_dump($a);
    die;
}