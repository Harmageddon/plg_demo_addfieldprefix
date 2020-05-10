<?php

namespace Joomla\Plugin\System\DemoAddFieldPrefix;

use Joomla\CMS\Form\Form;
use Joomla\CMS\Form\FormFilterInterface;
use Joomla\Registry\Registry;

class NamespacedFilter implements FormFilterInterface
{
	public function filter(\SimpleXMLElement $element, $value, $group = null, Registry $input = null, Form $form = null)
	{
		return strtoupper($value);
	}
}
