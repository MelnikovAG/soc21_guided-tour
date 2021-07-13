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

namespace Joomla\Component\Guidedtours\Administrator\Controller;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\FormController;

/**
 * Controller for a single guidedtour
 *
 * @since  1.6
 */
// @codingStandardsIgnoreStart
class Guidedtour_stepController extends FormController
// @codingStandardsIgnoreEnd
{
	/**
	 * Cancel function here
	 *
	 * @param   this is the param =  $key for function cancel
	 * @return void
	 */
	public function cancel($key = null)
	{
		$this->setRedirect('index.php?option=com_guidedtours&view=guidedtour_steps');
	}
}
