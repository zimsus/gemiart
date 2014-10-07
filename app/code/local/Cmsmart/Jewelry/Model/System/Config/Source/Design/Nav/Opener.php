<?php

class Cmsmart_Jewelry_Model_System_Config_Source_Design_Nav_Opener
{
    public function toOptionArray()
    {
		return array(
			array('value' => 'b',		'label' => Mage::helper('jewelry')->__('Black')),
            array('value' => 'w',		'label' => Mage::helper('jewelry')->__('White'))
        );
    }
}