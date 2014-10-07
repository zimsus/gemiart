<?php

class Cmsmart_Jewelry_Model_System_Config_Source_Jquery_Easing
{
    public function toOptionArray()
    {
        return array(
			//Ease in-out
			array('value' => 'easeInOutSine',	'label' => Mage::helper('jewelry')->__('easeInOutSine')),
			array('value' => 'easeInOutQuad',	'label' => Mage::helper('jewelry')->__('easeInOutQuad')),
			array('value' => 'easeInOutCubic',	'label' => Mage::helper('jewelry')->__('easeInOutCubic')),
			array('value' => 'easeInOutQuart',	'label' => Mage::helper('jewelry')->__('easeInOutQuart')),
			array('value' => 'easeInOutQuint',	'label' => Mage::helper('jewelry')->__('easeInOutQuint')),
			array('value' => 'easeInOutExpo',	'label' => Mage::helper('jewelry')->__('easeInOutExpo')),
			array('value' => 'easeInOutCirc',	'label' => Mage::helper('jewelry')->__('easeInOutCirc')),
			array('value' => 'easeInOutElastic','label' => Mage::helper('jewelry')->__('easeInOutElastic')),
			array('value' => 'easeInOutBack',	'label' => Mage::helper('jewelry')->__('easeInOutBack')),
			array('value' => 'easeInOutBounce',	'label' => Mage::helper('jewelry')->__('easeInOutBounce')),
			//Ease out
			array('value' => 'easeOutSine',		'label' => Mage::helper('jewelry')->__('easeOutSine')),
			array('value' => 'easeOutQuad',		'label' => Mage::helper('jewelry')->__('easeOutQuad')),
			array('value' => 'easeOutCubic',	'label' => Mage::helper('jewelry')->__('easeOutCubic')),
			array('value' => 'easeOutQuart',	'label' => Mage::helper('jewelry')->__('easeOutQuart')),
			array('value' => 'easeOutQuint',	'label' => Mage::helper('jewelry')->__('easeOutQuint')),
			array('value' => 'easeOutExpo',		'label' => Mage::helper('jewelry')->__('easeOutExpo')),
			array('value' => 'easeOutCirc',		'label' => Mage::helper('jewelry')->__('easeOutCirc')),
			array('value' => 'easeOutElastic',	'label' => Mage::helper('jewelry')->__('easeOutElastic')),
			array('value' => 'easeOutBack',		'label' => Mage::helper('jewelry')->__('easeOutBack')),
			array('value' => 'easeOutBounce',	'label' => Mage::helper('jewelry')->__('easeOutBounce')),
			//Ease in
			array('value' => 'easeInSine',		'label' => Mage::helper('jewelry')->__('easeInSine')),
			array('value' => 'easeInQuad',		'label' => Mage::helper('jewelry')->__('easeInQuad')),
			array('value' => 'easeInCubic',		'label' => Mage::helper('jewelry')->__('easeInCubic')),
			array('value' => 'easeInQuart',		'label' => Mage::helper('jewelry')->__('easeInQuart')),
			array('value' => 'easeInQuint',		'label' => Mage::helper('jewelry')->__('easeInQuint')),
			array('value' => 'easeInExpo',		'label' => Mage::helper('jewelry')->__('easeInExpo')),
			array('value' => 'easeInCirc',		'label' => Mage::helper('jewelry')->__('easeInCirc')),
			array('value' => 'easeInElastic',	'label' => Mage::helper('jewelry')->__('easeInElastic')),
			array('value' => 'easeInBack',		'label' => Mage::helper('jewelry')->__('easeInBack')),
			array('value' => 'easeInBounce',	'label' => Mage::helper('jewelry')->__('easeInBounce')),
			//No easing
			array('value' => 'null',			'label' => Mage::helper('jewelry')->__('No easing'))
        );
    }
}
