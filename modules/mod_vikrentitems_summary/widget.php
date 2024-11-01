<?php
/**
 * @package     VikRentItems
 * @subpackage  mod_vikrentitems_summary
 * @author      Alessio Gaggii - E4J s.r.l
 * @copyright   Copyright (C) 2020 e4j - Extensionsforjoomla.com. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 * @link        https://vikwp.com
 */

// No direct access
defined('ABSPATH') or die('No script kiddies please!');

jimport('adapter.module.widget');

/**
 * Summary Module implementation for WP
 *
 * @see 	JWidget
 * @since 	1.0
 */
class ModVikrentitemsSummary_Widget extends JWidget
{
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
		// attach the absolute path of the module folder
		parent::__construct(dirname(__FILE__));
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @param 	array 	$new_instance 	Values just sent to be saved.
	 * @param 	array 	$old_instance 	Previously saved values from database.
	 *
	 * @return 	array 	Updated safe values to be saved.
	 */
	public function update($new_instance, $old_instance)
	{
		$new_instance['title'] 			= !empty($new_instance['title']) ? strip_tags($new_instance['title']) : '';
		$new_instance['showgotosumm']	= intval($new_instance['showgotosumm']);
		$new_instance['showdates'] 		= intval($new_instance['showdates']);

		return $new_instance;
	}
}
