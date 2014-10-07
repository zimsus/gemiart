<?php

class Cmsmart_UltraSlideshow_Model_Source_Fx
{
    public function toOptionArray()
    {
        return array(
			array('value' => 'random',	'label' => Mage::helper('ultraslideshow')->__('Random')),
			array('value' => 'simpleFade',	'label' => Mage::helper('ultraslideshow')->__('SimpleFade')),
			array('value' => 'curtainTopLeft',	'label' => Mage::helper('ultraslideshow')->__('CurtainTopLeft')),
        		
			array('value' => 'curtainTopRight',	'label' => Mage::helper('ultraslideshow')->__('CurtainTopRight')),
			array('value' => 'curtainBottomLeft',	'label' => Mage::helper('ultraslideshow')->__('CurtainBottomLeft')),
			array('value' => 'curtainBottomRight',	'label' => Mage::helper('ultraslideshow')->__('CurtainBottomRight')),
			array('value' => 'curtainSliceLeft',	'label' => Mage::helper('ultraslideshow')->__('CurtainSliceLeft')),
			array('value' => 'curtainSliceRight',	'label' => Mage::helper('ultraslideshow')->__('CurtainSliceRight')),
			array('value' => 'blindCurtainTopLeft',	'label' => Mage::helper('ultraslideshow')->__('BlindCurtainTopLeft')),
			array('value' => 'blindCurtainTopRight',	'label' => Mage::helper('ultraslideshow')->__('BlindCurtainTopRight')),
			array('value' => 'blindCurtainBottomLeft',	'label' => Mage::helper('ultraslideshow')->__('BlindCurtainBottomLeft')),
			array('value' => 'blindCurtainBottomRight',	'label' => Mage::helper('ultraslideshow')->__('BlindCurtainBottomRight')),
			array('value' => 'blindCurtainSliceBottom',	'label' => Mage::helper('ultraslideshow')->__('BlindCurtainSliceBottom')),
			array('value' => 'blindCurtainSliceTop',	'label' => Mage::helper('ultraslideshow')->__('BlindCurtainSliceTop')),
			array('value' => 'stampede',	'label' => Mage::helper('ultraslideshow')->__('Stampede')),
			array('value' => 'mosaic',	'label' => Mage::helper('ultraslideshow')->__('Mosaic')),
			array('value' => 'mosaicReverse',	'label' => Mage::helper('ultraslideshow')->__('MosaicReverse')),
			array('value' => 'mosaicRandom',	'label' => Mage::helper('ultraslideshow')->__('MosaicRandom')),
			array('value' => 'mosaicSpiral',	'label' => Mage::helper('ultraslideshow')->__('MosaicSpiral')),
			array('value' => 'mosaicSpiralReverse',	'label' => Mage::helper('ultraslideshow')->__('MosaicSpiralReverse')),
			array('value' => 'topLeftBottomRight',	'label' => Mage::helper('ultraslideshow')->__('TopLeftBottomRight')),
			array('value' => 'bottomRightTopLeft',	'label' => Mage::helper('ultraslideshow')->__('BottomRightTopLeft')),
			array('value' => 'bottomLeftTopRight',	'label' => Mage::helper('ultraslideshow')->__('BottomLeftTopRight')),
			array('value' => 'bottomLeftTopRight',	'label' => Mage::helper('ultraslideshow')->__('BottomLeftTopRight')),
			array('value' => 'scrollLeft',	'label' => Mage::helper('ultraslideshow')->__('ScrollLeft')),
			array('value' => 'scrollRight',	'label' => Mage::helper('ultraslideshow')->__('ScrollRight')),
			array('value' => 'scrollHorz',	'label' => Mage::helper('ultraslideshow')->__('ScrollHorz')),
			array('value' => 'scrollBottom',	'label' => Mage::helper('ultraslideshow')->__('ScrollBottom')),
			array('value' => 'scrollTop',	'label' => Mage::helper('ultraslideshow')->__('ScrollTop')),
        );
    }
}
