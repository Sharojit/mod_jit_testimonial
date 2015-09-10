<?php
/*------------------------------------------------------------------------
# Module assets By Sharojit | http://www.sharojit.com |
# ------------------------------------------------------------------------
# Author    Sharojit by http://www.sharojit.com
# Copyright (C) 2014 - 2024 http://www.sharojit.com All Rights Reserved.
# @license - GNU/GPL V2 for PHP files. CSS / JS are Copyrighted Commercial
# Websites: http://www.sharojit.com
-------------------------------------------------------------------------*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.form.formfield');

class JFormFieldAsset extends JFormField
{
	protected	$type = 'Asset';
	
	protected function getInput() {
		$doc = JFactory::getDocument();	
		$doc->addStylesheet(JURI::root(true).'/modules/mod_jit_testimonial/elements/css/style.css');
		return null;
	}
} 
?>