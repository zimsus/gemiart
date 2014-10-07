<?php

class Cmsmart_UltraSlideshow_Helper_Data extends Mage_Core_Helper_Abstract
{
	/**
	 * Get settings
	 *
	 * @return string
	 */
	public function getCfg($optionString)
    {
        return Mage::getStoreConfig('ultraslideshow/' . $optionString);
    }
}
