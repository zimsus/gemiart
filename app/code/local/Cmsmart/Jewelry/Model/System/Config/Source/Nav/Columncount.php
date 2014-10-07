<?php

class Cmsmart_Jewelry_Model_System_Config_Source_Nav_ColumnCount
{
    public function toOptionArray()
    {
        return array(
			array('value' => 4, 'label' => Mage::helper('jewelry')->__('4 Columns')),
            array('value' => 5, 'label' => Mage::helper('jewelry')->__('5 Columns')),
			array('value' => 6, 'label' => Mage::helper('jewelry')->__('6 Columns')),
			array('value' => 7, 'label' => Mage::helper('jewelry')->__('7 Columns')),
			array('value' => 8, 'label' => Mage::helper('jewelry')->__('8 Columns'))
        );
    }
}