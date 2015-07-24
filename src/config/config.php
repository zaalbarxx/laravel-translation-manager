<?php

return array(

	/**
	 * Enable deletion of translations
	 *
	 * @type boolean
	 */
	'delete_enabled' => true,

	/**
	 * Enable adding translations
	 */
	'add_enabled' => true,

	/**
	 * Exclude specific groups from Laravel Translation Manager. 
	 * This is useful if, for example, you want to avoid editing the official Laravel language files.
	 *
	 * @type array
	 *
	 * 	array(
	 *		'pagination',
	 *		'reminders',
	 *		'validation',
	 *	)
	 */
	'exclude_groups' => array(),
	/**
	 * this allows certain languages to being disabled for editing
	 */
	'read_only' => array(),

	/**
	 * If keys should be visible
	 */
	'show_keys' => true
);
