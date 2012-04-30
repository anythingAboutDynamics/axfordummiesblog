<?php

load_theme_textdomain( 'ax4dummies', TEMPLATEPATH.'/languages' );
$locale 	 = get_locale();
$locale_file = TEMPLATEPATH.'/languages/$locale.php';

if ( is_readable($locale_file) )
{
	require_once($locale_file);
}

/*
 Função para registrar sidebar
*/
if(function_exists('register_sidebar'))
{
	register_sidebar( array(
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
	));
}

function fb_count()
{
	//get cool feedburner count
	$whaturl="https://feedburner.google.com/api/awareness/1.0/GetFeedData?uri=AxForDummies";

	//Initialize the Curl session
	$ch = curl_init($whaturl);

	//Set curl to return the data instead of printing it to the browser.
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);

	//Execute the fetch
	$data = curl_exec($ch);

	//Close the connection
	curl_close($ch);
	$xml = new SimpleXmlElement($data, LIBXML_NOCDATA);
		
		
	echo $xml->feed->entry['circulation'];
}
?>