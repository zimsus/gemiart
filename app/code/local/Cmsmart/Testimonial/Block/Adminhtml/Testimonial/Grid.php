<?php
/**
 * cmsmart Co.
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
 * Grid block for testimonials
 *
 * @category   Cmsmart
 * @package    Cmsmart_Testimonial
 * @author     VF 
 */
class Cmsmart_Testimonial_Block_Adminhtml_Testimonial_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('testimonialGrid');
        $this->setDefaultSort('testimonial_position');
        $this->setDefaultDir('ASC');
        $this->setSaveParametersInSession(true);
    }

    /**
     * Prepare grid collection object
     *
     * @return Cmsmart_Testimonial_Block_Adminhtml_Testimonial_Grid
     */
    protected function _prepareCollection()
    {
        $this->setCollection(Mage::getModel('cmsmart_testimonial/testimonial')->getCollection());
        return parent::_prepareCollection();
    }

    /**
     * Preparing colums for grid
     *
     * @return cmsmart_Testimonial_Block_Adminhtml_Testimonial_Grid
     */
    protected function _prepareColumns()
    {
        $this->addColumn('testimonial_position', array(
            'header'    => Mage::helper('cmsmart_testimonial')->__('Position'),
            'align'     => 'right',
            'width'     => '50px',
            'index'     => 'testimonial_position',
            'type'      => 'number',
        ));

        $this->addColumn('testimonial_name', array(
            'header'    => Mage::helper('cmsmart_testimonial')->__('Name'),
            'align'     => 'left',
            'index'     => 'testimonial_name',
        ));

        $this->addColumn('testimonial_text', array(
            'header'    => Mage::helper('cmsmart_testimonial')->__('Text'),
            'align'     => 'left',
            'index'     => 'testimonial_text',
        ));

        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }

}
