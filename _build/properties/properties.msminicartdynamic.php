<?php

$properties = array();

$tmp = array(
	'tpl' => array(
		'type' => 'textfield',
		'value' => 'msMinicartDynamic',
	),
	'tplOuter' => array(
		'type' => 'textfield',
		'value' => 'msMinicartDynamicOuter',
	),
	'img' => array(
		'type' => 'textfield',
		'value' => '',
	),
);

foreach ($tmp as $k => $v) {
	$properties[] = array_merge(
		array(
			'name' => $k,
			'desc' => PKG_NAME_LOWER . '_prop_' . $k,
			'lexicon' => PKG_NAME_LOWER . ':properties',
		), $v
	);
}

return $properties;