<?php

class Cmsmart_Jewelry_Model_System_Config_Source_Category_AltImageColumn
{
    public function toOptionArray()
    {
        return array(
			array('value' => 'label',			'label' => Mage::helper('jewelry')->__('Image Label')),
            array('value' => 'position',		'label' => Mage::helper('jewelry')->__('Image Sort Order Value'))
        );
    }
}