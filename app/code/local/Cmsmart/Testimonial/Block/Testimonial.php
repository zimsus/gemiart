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
 * Frontend block for testimonials
 *
 * @method Cmsmart_Testimonial_Model_Mysql4_Testimonial_Collection getTestimonials()
 *
 * @category   Cmsmart
 * @package    Cmsmart_Testimonial
 * @author     VF 
 */
class Cmsmart_Testimonial_Block_Testimonial extends Mage_Core_Block_Template
{

    /**
     * Before rendering html, but after trying to load cache
     *
     * @return Cmsmart_Testimonial_Block_Testimonial
     */
    protected function _beforeToHtml()
    {
        $this->_prepareCollection();
        return parent::_beforeToHtml();
    }

    /**
     * Prepare testimonial collection object
     *
     * @return Cmsmart_Testimonial_Block_Testimonial
     */
    protected function _prepareCollection()
    {
        /* @var $collection Cmsmart_Testimonial_Model_Mysql4_Testimonial_Collection */
        $collection = Mage::getModel("cmsmart_testimonial/testimonial")->getCollection();
        if ($this->getSidebar()){
            $collection->addFieldToFilter('testimonial_sidebar', '1');
        }

        $collection->setOrder('testimonial_position', 'ASC')
                   ->load();
        $this->setTestimonials($collection);
        return $this;
    }

}