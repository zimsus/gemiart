<?php

class Cmsmart_Jewelry_Model_System_Config_Source_Css_Background_Positionx
{
    public function toOptionArray()
    {
		return array(
			array('value' => 'left',	'label' => Mage::helper('jewelry')->__('left')),
            array('value' => 'center',	'label' => Mage::helper('jewelry')->__('center')),
            array('value' => 'right',	'label' => Mage::helper('jewelry')->__('right'))
        );
    }
}