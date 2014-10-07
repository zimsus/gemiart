<?php
/**
 * Cmsmart Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0).
 * It is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you are unable to obtain it through the world-wide-web, please send
 * an email to info@Cmsmart.com so we can send you a copy immediately.
 *
 * @category   Cmsmart
 * @package    Cmsmart_Testimonial
 * @copyright  Copyright (C) 2012 www.cmsmart.net All Rights Reserved. 
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Cmsmart Testimonial data helper
 *
 * @category   Cmsmart
 * @package    Cmsmart_Testimonial
 * @author     VF
 */
class Cmsmart_Testimonial_Helper_Data extends Mage_Core_Helper_Abstract
{

    /**
     * Get name of the extension
     *
     * @return string - name
     */
    public function getTranslatedExtensionName()
    {
        return $this->__('Testimonials');
    }

    /**
     * Get url for check updates
     *
     * @return string - URL
     */
    public function getCheckUpdateUrl()
    {
        $_t = explode('_', __CLASS__);
        $module_name = $_t[0] . '_' . $_t[1];
        $version = (string)Mage::getConfig()->getModuleConfig($module_name)->version;
        $check_url = 'http://turnkeye.com/extension.html?name=' . $module_name . '&version=' . $version;
        return $check_url;
    }

}
