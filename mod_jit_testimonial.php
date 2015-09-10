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
defined('_JEXEC') or die;
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::root(true).'/modules/mod_jit_testimonial/assets/css/style.css');
require JModuleHelper::getLayoutPath('mod_jit_testimonial', $params->get('layout', 'default'));
?>