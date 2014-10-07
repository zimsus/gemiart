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
 * Testimonial collection model
 *
 * @category   Cmsmart
 * @package    Cmsmart_Testimonial
 * @author     VF 
 */

class Cmsmart_Testimonial_Model_Mysql4_Testimonial_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{

    /**
     * Initialization here
     *
     */
    public function _construct()
    {
        parent::_construct();
        $this->_init('cmsmart_testimonial/testimonial');
    }

}
