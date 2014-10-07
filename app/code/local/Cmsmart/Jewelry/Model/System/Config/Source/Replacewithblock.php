<?php

class Cmsmart_Jewelry_Model_System_Config_Source_ReplaceWithBlock
{
    public function toOptionArray()
    {
		return array(
			array('value' => 0, 'label' => Mage::helper('jewelry')->__('Disable Completely')),
            array('value' => 1, 'label' => Mage::helper('jewelry')->__('Don\'t Replace With Static Block')),
            array('value' => 2, 'label' => Mage::helper('jewelry')->__('If Empty, Replace With Static Block')),
			array('value' => 3, 'label' => Mage::helper('jewelry')->__('Replace With Static Block'))
        );
    }
}