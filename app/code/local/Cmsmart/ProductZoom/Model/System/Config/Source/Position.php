<?php

class Cmsmart_ProductZoom_Model_System_Config_Source_Position
{
    public function toOptionArray()
    {
        return array(
			array('value' => 'inside',		'label' => Mage::helper('cmsmart_productzoom')->__('Inside')),
			array('value' => 'right',		'label' => Mage::helper('cmsmart_productzoom')->__('Right')),
			array('value' => 'left',		'label' => Mage::helper('cmsmart_productzoom')->__('Left')),
			array('value' => 'top',			'label' => Mage::helper('cmsmart_productzoom')->__('Top')),
			array('value' => 'bottom',		'label' => Mage::helper('cmsmart_productzoom')->__('Bottom'))
        );
    }
}
