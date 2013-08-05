<?php
/**
 * 
 * April 12, 2013
 * @author abz dmachinist
 * 
 * Please create a class named "ShippingCost". We will use 
 * this to calculate the shipping in orders. For now it just 
 * needs a method that takes as input an array of items in the 
 * shopping cart, their quantities and returns the 
 * shipping cost.
 * 
 *At the point the return will be either:
 * 1. Invalid inputs (mis-matched items and quantities, or quantities of 0)
 * 2. If the inputs are valid return a value of 19.99
 */

class shippingCost {
	
	public static function getShippingCost($item, $quatity=0)
	{
		if($quatity != 0 && !empty($item) && is_array($item))
		{
			return '19.99';
		}
		else
		{
			return 0;
		}
	}

}