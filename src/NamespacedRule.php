<?php

namespace Joomla\Plugin\System\DemoAddFieldPrefix;

use Joomla\CMS\Form\FormRule;

class NamespacedRule extends FormRule
{
	protected $regex = '.*[0-9].*';
}
