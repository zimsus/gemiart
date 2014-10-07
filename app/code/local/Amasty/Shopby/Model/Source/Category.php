<?php
/**
 * @copyright  Copyright (c) 2010 Amasty (http://www.amasty.com)
 */  
class Amasty_Shopby_Model_Source_Category extends Varien_Object
{
	public function toOptionArray()
	{
	    $hlp = Mage::helper('amshopby');
		return array(
			array('value' => 0, 'label' => $hlp->__('Default')),
			array('value' => 1, 'label' => $hlp->__('Dropdown')),
			array('value' => 2, 'label' => $hlp->__('With Sub-Categories')),
			array('value' => 3, 'label' => $hlp->__('Static 2-Level Tree')),
			array('value' => 4, 'label' => $hlp->__('Advanced Categories')),
		);
	}
}