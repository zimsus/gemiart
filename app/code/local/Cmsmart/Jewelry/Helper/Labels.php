<?php

class Cmsmart_Jewelry_Helper_Labels extends Mage_Core_Helper_Abstract
{
	/**
	 * Get product labels
	 *
	 * @return string
	 */
	public function getLabels($product)
	{
		$html = '';
		
		$isNew = false;
		if (Mage::getStoreConfig('jewelry/product_labels/new'))
		{	
			$isNew = $this->isNew($product);
		}
		
		$isSale = false;
		if (Mage::getStoreConfig('jewelry/product_labels/sale'))
		{
			$isSale = $this->isOnSale($product);
		}
		
		if ($isNew == true)
		{
			$html = '<div class="sticker-wrapper top-left"><div class="sticker new"></div></div>';
		}
		
		if ($isSale == true)
		{
			$html = '<div class="sticker-wrapper top-right"><div class="sticker sale"></div></div>';
		}
		
		return $html;
	}
	
	/**
	 * Check if "new" label is enabled and if product is marked as "new"
	 *
	 * @return  bool
	 */
	public function isNew($product)
	{
		return $this->_nowIsBetween($product->getData('news_from_date'), $product->getData('news_to_date'));
	}
	
	/**
	 * Check if "sale" label is enabled and if product has special price
	 *
	 * @return  bool
	 */
	public function isOnSale($product)
	{
		$specialPrice = number_format($product->getFinalPrice(), 2);
		$regularPrice = number_format($product->getPrice(), 2);
		
		if ($specialPrice != $regularPrice)
			return true;
		else
			return false;
			
//		if ($specialPrice != $regularPrice)
//			return $this->_nowIsBetween($product->getData('special_from_date'), $product->getData('special_to_date'));
//		else
//			return false;
	}
	
	protected function _nowIsBetween($fromDate, $toDate)
	{
		if ($fromDate)
		{
			$fromDate = strtotime($fromDate);
			$toDate = strtotime($toDate);
			$now = strtotime(date("Y-m-d H:i:s"));
			
			if ($toDate)
			{
				if ($fromDate <= $now && $now <= $toDate)
					return true;
			}
			else
			{
				if ($fromDate <= $now)
					return true;
			}
		}
		
		return false;
	}
}
