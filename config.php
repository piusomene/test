<?php

	$title='Themis - Law Business Template';

	$options=array
	(
		'openStart'						=>	'',
		'title'							=>	$title,
		'meta'							=>	array
		(
			'keywords'					=> 'advocate, attorney, brown, business, corporate, court, finance, justice, law, lawyer, legal, minimal, minimalistic, office, themis',
			'description'				=> 'Themis is a minimal corporate template related to law, business, investment etc. Home page is based on five vertical tabs with possibility to add unlimited number of additional tabs. Each tab is a single page. Included PSD source file allows you to customize this template to your needs.'
		),
		'displayMenuSliderVertical'		=> true,
		'displayMenuSliderHorizontal'	=> true
	);	

    $page=array
    (
        'about'				=>   array
		(
			'js'			=>	'page-1.js',
			'html'			=>	'page-1.html',
			'title'			=>	$title.' - About - Mark Anthony'
		),
        'services'			=>   array
		(
			'js'			=>	'page-2.js',
			'html'			=>	'page-2.html',
			'title'			=>	$title.' - Services - Legal Services'
		),
        'clients'			=>   array
		(
			'js'			=>	'page-3.js',
			'html'			=>	'page-3.html',
			'title'			=>	$title.' - Clients - Testimonials'
		),
		'practice'			=>   array
		(
			'js'			=>	'page-4.js',
			'html'			=>	'page-4.html',
			'title'			=>	$title.' - Practice - Practice Of Law'
		),
        'contact'			=>   array
		(
			'js'			=>	'page-5.js',
			'html'			=>	'page-5.php',
			'title'			=>	$title.' - Contact - Get In Touch'
		)
    );

?>