<?php

/**
 * File Doc Comment_
 * PHP version 5
 *
 * @category Component
 * @package  Joomla.Administrator
 * @author   Joomla! <admin@joomla.org>
 * @copyright (C) 2013 Open Source Matters, Inc. <https://www.joomla.org>
 * @license  GNU General Public License version 2 or later; see LICENSE.txt
 * @link     admin@joomla.org
 */

namespace Joomla\Component\Guidedtours\Administrator\Helper;

defined('_JEXEC') or die;

use Joomla\CMS\Factory;

/**
 * Guidedtours component helper.
 *
 * @since  4.0
 */
class GuidedtoursHelper
{
	/**
	 * this is function to get the tour
	 *
	 * @param   the param =  $id for the function getWalkTitle
	 * @return mix
	 */
	public static function getWalkTitle($id)
	{
		if (empty($id))
		{
			// Throw an error or ...
			return false;
		}

		$db = Factory::getDbo();
		$query = $db->getQuery(true);
		$query->select('title');
		$query->from('#__mywalks');
		$query->where('id = ' . $id);
		$db->setQuery($query);

		return $db->loadObject();
	}
}
