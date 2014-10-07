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
 * Testimonial admin controller (view, edit)
 *
 * @category   Cmsmart
 * @package    Cmsmart_Testimonial
 * @author     VF 
 */
class Cmsmart_Testimonial_Adminhtml_TestimonialController extends Mage_Adminhtml_Controller_Action
{

    /**
     * Init here
     */
	protected function _initAction()
	{
		$this->loadLayout();
		$this->_setActiveMenu('cms/testimonial');
		$this->_addBreadcrumb(Mage::helper('cmsmart_testimonial')->__('Testimonials'), Mage::helper('cmsmart_testimonial')->__('Testimonials'));
	}

    /**
     * View grid action
     */
	public function indexAction()
	{
		$this->_initAction();
		$this->renderLayout();
	}

    /**
     * View edit form action
     */
	public function editAction()
	{
		$this->_initAction();
		$this->_addContent($this->getLayout()->createBlock('cmsmart_testimonial/adminhtml_testimonial_edit'));
		$this->renderLayout();
	}

    /**
     * View new form action
     */
	public function newAction()
	{
		$this->editAction();
	}

    /**
     * Save form action
     */
	public function saveAction()
	{
		if ($this->getRequest()->getPost()) {
			try {
				$data = $this->getRequest()->getPost();
				if (isset($_FILES['testimonial_img']['name']) and (file_exists($_FILES['testimonial_img']['tmp_name']))) {
					$uploader = new Varien_File_Uploader('testimonial_img');
					$uploader->setAllowedExtensions(array('jpg','jpeg','gif','png'));
					$uploader->setAllowRenameFiles(false);
					$uploader->setFilesDispersion(false);
					$path = Mage::getBaseDir('media') . DS ;
					$uploader->save($path, $_FILES['testimonial_img']['name']);
					$data['testimonial_img'] = $_FILES['testimonial_img']['name'];
				} else {
					if(isset($data['testimonial_img']['delete']) && $data['testimonial_img']['delete'] == 1) {
						$data['testimonial_img'] = '';
					} else {
						unset($data['testimonial_img']);
					}
				}

				$model = Mage::getModel('cmsmart_testimonial/testimonial');
				$model->setData($data)->setTestimonialId($this->getRequest()->getParam('id'))->save();

				Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('cmsmart_testimonial')->__('Testimonial was successfully saved'));
			} catch (Exception $e) {
				Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
				$this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
				return;
			}
		}

		$this->_redirect('*/*/');
	}

    /**
     * Delete action
     */
	public function deleteAction()
	{
		if ($this->getRequest()->getParam('id') > 0) {
			try {
				$model = Mage::getModel('cmsmart_testimonial/testimonial');
				$model->setTestimonialId($this->getRequest()->getParam('id'))
				      ->delete();
				Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('cmsmart_testimonial')->__('Testimonial was successfully deleted'));
				$this->_redirect('*/*/');
			} catch (Exception $e) {
				Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
				$this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
			}
		}

		$this->_redirect('*/*/');
	}

    /**
     * Check allow or not access to ths page
     *
     * @return bool - is allowed to access this menu
     */
	protected function _isAllowed()
	{
		return Mage::getSingleton('admin/session')->isAllowed('cms/testimonial');
	}

}
