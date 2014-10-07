<?php

class Cmsmart_Jewelry_Model_System_Config_Source_Css_Background_Positiony
{
    public function toOptionArray()
    {
		return array(
			array('value' => 'top',		'label' => Mage::helper('jewelry')->__('top')),
            array('value' => 'center',	'label' => Mage::helper('jewelry')->__('center')),
            array('value' => 'bottom',	'label' => Mage::helper('jewelry')->__('bottom'))
        );
    }
}