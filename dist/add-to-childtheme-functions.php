<?php

//add code below to your childtheme's functions.php file

//register files for enqueue in shortcode, ensure path is relevant to your website directory
function files_for_sheetseejs() {
    wp_register_style('sheetseejscss',get_stylesheet_directory_uri().'/js/sheetseejs/sss.css');
    wp_register_script('tabletopjs',get_stylesheet_directory_uri().'/js/sheetseejs/tabletop.js',array('jquery'),'',true);
    wp_register_script('sheetseejs',get_stylesheet_directory_uri().'/js/sheetseejs/sheetsee.js',array('tabletopjs'),'',true);
    wp_register_script('sheetseejsscripts',get_stylesheet_directory_uri().'/js/sheetseejs/sheetseescripts.js',array('sheetseejs'),'',true);
}
add_action('wp_enqueue_scripts','files_for_sheetseejs');

//function shortcode to add a div into page for sheetseechart
function ss_charts($atts, $content = null) {
    $sheetseejsdata = shortcode_atts(array(
        'div_id' => 'sheetseecharts',
		'class' => 'sheetseepie',
		'url' => '',
		'label' => '',
		'unit' => '',
		'm' => '[80,80,80,80]',
		'w' => '600',
		'h' => '400',
		'x' => '',
		'hi' => ''
        ),$atts);
    wp_enqueue_style('sheetseejscss');
    wp_enqueue_script('sheetseejsscripts');
    $div_id = $sheetseejsdata['div_id'];
	$class = $sheetseejsdata['class'];
	$url = $sheetseejsdata['url'];
	$label = $sheetseejsdata['label'];
	$unit = $sheetseejsdata['unit'];
	$m = $sheetseejsdata['m'];
	$w = $sheetseejsdata['w'];
	$h = $sheetseejsdata['h'];
	$x = $sheetseejsdata['x'];
	$hi = $sheetseejsdata['hi'];
    $sheetseeoutput = '<div id="'.$div_id.'"><span class="'.$class.'" data-label="'.$label.'" data-unit="'.$unit.'" data-margin="'.$m.'" data-width="'.$w.'" data-height="'.$h.'" data-horiz="'.$x.'" data-hi="'.$hi.'">'.$url.'</span></div>';
    return $sheetseeoutput;
}
add_shortcode('ss_chart','ss_charts');

//add code above to your childtheme's functions.php file

?>