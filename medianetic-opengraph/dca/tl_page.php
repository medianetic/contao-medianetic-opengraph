<?php

/**
 * Palettes
 */


$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] = str_replace  
(  
    '{meta_legend},pageTitle,robots,description;',
    '{meta_legend},pageTitle,robots,description;,{opengraph_legend},og_title,og_desc,og_type,og_site_name,og_image;',
    $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']  
); 


$GLOBALS['TL_DCA']['tl_page']['palettes']['root'] = str_replace  
(  
    '{meta_legend},pageTitle,robots,description;',
    '{meta_legend},pageTitle,robots,description;,{opengraph_legend},og_title,og_desc,og_type,og_site_name,og_image;',
    $GLOBALS['TL_DCA']['tl_page']['palettes']['root']  
); 


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_page']['fields']['og_title'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_page']['og_title'],
	'exclude'		=> true,
	'inputType'		=> 'text',
	'eval'			=> array
	(
		'tl_class'			=> 'long clr',
		'preserveTags'		=> true,
		'decodeEntities'	=> false,
	),
	'sql'			=> 'blob NULL',
);

$GLOBALS['TL_DCA']['tl_page']['fields']['og_desc'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_page']['og_desc'],
	'exclude'		=> true,
	'inputType'		=> 'textarea',
	'eval'			=> array
	(
		'tl_class'			=> 'long clr',
		'preserveTags'		=> true,
		'decodeEntities'	=> false,
	),
	'sql'			=> 'blob NULL',
);

$GLOBALS['TL_DCA']['tl_page']['fields']['og_type'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_page']['og_type'],
	'exclude'		=> true,
	'default'		=> 'website',
	'inputType'		=> 'text',
	'eval'			=> array
	(
		'tl_class'			=> 'long clr',
		'preserveTags'		=> true,
		'decodeEntities'	=> false,
	),
	'sql'			=> "varchar(255) NOT NULL default 'website'",
);

$GLOBALS['TL_DCA']['tl_page']['fields']['og_site_name'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_page']['og_site_name'],
	'exclude'		=> true,
	'inputType'		=> 'text',
	'eval'			=> array
	(
		'tl_class'			=> 'long clr',
		'preserveTags'		=> true,
		'decodeEntities'	=> false,
	),
	'sql'			=> "blob NULL",
);


$GLOBALS['TL_DCA']['tl_page']['fields']['og_image'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_page']['og_image'],
	'exclude'		=> true,
	'inputType'		=> 'fileTree',
	'eval'			=> array
	(
		'files' 			=> true,
		'fieldType'			=> 'radio',
		'filesOnly'			=> true,
		'extensions' 		=> 'png,jpg,gif',
	),
	'sql'			=> "binary(16) NULL",
);

