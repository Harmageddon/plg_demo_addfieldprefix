<?php

use Joomla\CMS\Form\FormFilterInterface;

class JFormFilterOtherFilter implements FormFilterInterface
{
	public function filter(\SimpleXMLElement $element, $value, $group = null, \Joomla\Registry\Registry $input = null, \Joomla\CMS\Form\Form $form = null)
	{
		return strtolower($value);
	}
}
