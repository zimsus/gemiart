<?php
/**
 * @copyright  Copyright (c) 2009-2011 Amasty (http://www.amasty.com)
 */ 
class Amasty_Shopby_Controller_Router extends Mage_Core_Controller_Varien_Router_Abstract
{
    const MIDDLE    = 0;
    const BEGINNING = 1;    
    
    public function match(Zend_Controller_Request_Http $request) 
    {
        
       
        if (Mage::app()->getStore()->isAdmin()) {
            return false;
        }
        
        $pageId = $request->getPathInfo();
        // remove suffix if any
        $suffix = Mage::getStoreConfig('catalog/seo/category_url_suffix');
        if ($suffix && '/' != $suffix){
            $pageId = str_replace($suffix, '', $pageId);
        }
        
        //add trailing slash
        $pageId = trim($pageId, '/') . '/';
        
        $reservedKey = Mage::getStoreConfig('amshopby/seo/key') . '/';
        

        //  canon/
        //  electronics - false
        
        //  electronics/shopby/canon/
        //  electronics/shopby/red/
        //  electronics/shopby/
        
        //  shopby/
        //  shopby/red/
        //  shopby/canon/ - false
        //  shopby/manufacturer-canon/ - false
        //  manufacturer-canon/ - true
        
        // starts from shopby
        $isAllProductsPage = (substr($pageId, 0, strlen($reservedKey)) == $reservedKey);
        
        // has shopby in the middle
        $isCategoryPage = (false !== strpos($pageId, '/' . $reservedKey));
        
        
        if ($isAllProductsPage){
            // no support for old style urls
            if ($this->hasBrandIn(self::MIDDLE, $pageId)){ 
                return false;
            }
        }
        
        if (!$isAllProductsPage && !$isCategoryPage){
            if (!$this->hasBrandIn(self::BEGINNING, $pageId)){ 
                return false;    
            }
            //it is brand page and we modify the url to be in the old style
            $pageId = $reservedKey . $pageId;
        }
        
        // get layered navigation params as string 
        list($cat, $params) = explode($reservedKey, $pageId, 2);
        $params = trim($params, '/');
        if ($params)
            $params = explode('/', $params);
        
        // remember for futire use in the helper
        if ($params){
            Mage::register('amshopby_current_params', $params);
        }  
         
        $cat = trim($cat, '/');
        if ($cat){ // normal category
            // if somebody has old urls in the cache.
            if (!Mage::getStoreConfig('amshopby/seo/urls'))
                return false;
                
            //Varien_Autoload::registerScope('catalog');
            $cat = $cat . $suffix;
            $urlRewrite = Mage::getModel('core/url_rewrite')
                ->setStoreId(Mage::app()->getStore()->getId())
                ->loadByRequestPath($cat);
                
                
            if (!$urlRewrite->getId()){
                $store = $request->getParam('___from_store'); 
                $store = Mage::app()->getStore($store)->getId();  
                if (!$store){
                    return false;  
                }
                $urlRewrite = Mage::getModel('core/url_rewrite')
                    ->setStoreId($store)
                    ->loadByRequestPath($cat);                
            }
                
            if (!$urlRewrite->getId()){
                return false;
            }
            
            
            $request->setPathInfo($cat);
            $request->setModuleName('catalog');
            $request->setControllerName('category');
            $request->setActionName('view');
            $request->setParam('id', $urlRewrite->getCategoryId());

                
             $urlRewrite->rewrite($request);   
        }
        else { // root category
            $realModule = 'Amasty_Shopby';
            
            $request->setPathInfo(trim($reservedKey, '/'));
            $request->setModuleName('amshopby');
            $request->setRouteName('amshopby');  
            $request->setControllerName('index');
            $request->setActionName('index'); 
            $request->setControllerModule($realModule);
            
            $file = Mage::getModuleDir('controllers', $realModule) . DS . 'IndexController.php';
            include $file;
            
            //compatibility with 1.3
            $class = $realModule . '_IndexController';
            $controllerInstance = new $class($request, $this->getFront()->getResponse()); 
                          
            $request->setDispatched(true);
            $controllerInstance->dispatch('index');
        }
        
        return true;
    }
    
    public function hasBrandIn($position, $pageId)
    {
        $code = Mage::getStoreConfig('amshopby/brands/attr');
        
        if (!$code) {
            return false;    
        }
        
        $options = Mage::helper('amshopby/url')->getAllFilterableOptionsAsHash();
        //ckeck if we have brand names
        if (empty($options[$code])) {
            return false;
        }
        
        $found[self::MIDDLE]    = false;
        $found[self::BEGINNING] = false;
        foreach ($options[$code] as $key => $id) {
            if (!Mage::getStoreConfig('amshopby/seo/hide_attributes')){
                $key = $code . '-' . $key;
            }
            
            if (0 === strpos($pageId, $key . '/')) {
                $found[self::BEGINNING] = true;
            }
            
            if (false !== strpos($pageId, '/' . $key . '/')) {
                $found[self::MIDDLE] = true;
            }
        }
        
        return $found[$position];
    }
}