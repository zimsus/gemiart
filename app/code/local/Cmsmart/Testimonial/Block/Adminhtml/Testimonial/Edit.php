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
 * an email to info@cmsmart.com so we can send you a copy immediately.
 *
 * @category   Cmsmart
 * @package    Cmsmart_Testimonial
 * @copyright  copyright Copyright (C) 2012 www.cmsmart.net All Rights Reserved. 
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Edit form block container for testimonials
 *
 * @category   Cmsmart
 * @package    Cmsmart_Testimonial
 * @author     VF 
 */
class Cmsmart_Testimonial_Block_Adminhtml_Testimonial_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->_objectId = 'id';
        $this->_blockGroup = 'cmsmart_testimonial';
        $this->_controller = 'adminhtml_testimonial';

        $this->_updateButton('save', 'label', Mage::helper('cmsmart_testimonial')->__('Save Testimonial'));
        $this->_updateButton('delete', 'label', Mage::helper('cmsmart_testimonial')->__('Delete Testimonial'));

        if( $this->getRequest()->getParam($this->_objectId) ) {
            $model = Mage::getModel('cmsmart_testimonial/testimonial')->load($this->getRequest()->getParam($this->_objectId));
            Mage::register('cmsmart_testimonial', $model);
        }
    }

    /**
     * Get header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if( Mage::registry('cmsmart_testimonial') && Mage::registry('cmsmart_testimonial')->getId() ) {
            return Mage::helper('cmsmart_testimonial')->__('Edit Testimonial');
        } else {
            return Mage::helper('cmsmart_testimonial')->__('Add Testimonial');
        }
    }
}
