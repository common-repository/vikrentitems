<?php
/** 
 * @package   	VikRentItems - Libraries
 * @subpackage 	bc (backward compatibility)
 * @author    	E4J s.r.l.
 * @copyright 	Copyright (C) 2018 E4J s.r.l. All Rights Reserved.
 * @license  	http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @link 		https://vikwp.com
 */

// No direct access
defined('ABSPATH') or die('No script kiddies please!');

if (!class_exists('JViewBaseVikRentItems') && class_exists('JView'))
{
	/**
	 * Placeholder to support legacy views.
	 * Middle-man class that will be extended
	 * by the class JViewVikRentItems.
	 *
	 * @since 1.2.0
	 */
	class JViewBaseVikRentItems extends JView
	{
		/* adapter for JView */
	}

	/**
	 * Placeholder to support legacy controllers.
	 *
	 * @since 1.0
	 */
	class JControllerVikRentItems extends JController
	{
		/* adapter for JController */
	}
}
