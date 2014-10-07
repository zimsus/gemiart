<?php

class Cmsmart_Jewelry_Model_System_Config_Source_Element_Display
{
    public function toOptionArray()
    {
		return array(
			array('value' => 0, 'label' => Mage::helper('jewelry')->__('Don\'t Display')),
            array('value' => 1, 'label' => Mage::helper('jewelry')->__('Display On Hover')),
            array('value' => 2, 'label' => Mage::helper('jewelry')->__('Display'))
        );
    }
}