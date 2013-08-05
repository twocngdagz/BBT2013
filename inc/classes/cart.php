<?php
/**
 * 
 * February 23, 2013
 * @author abz dmachinist
 * BBT Image Class
 * 
 * Please review properties when using.
 * Direct ROOT LOADERS are found in
 * /mchn.config.php DEFINE LOADERS 
 *
 * Module for Cart, see functions on
 * Public Static Functions
 */

class Cart {
	
	/*
	 * Show debug Cart
	 */
	
	public static function showCart() 
	{
		if( isset($_COOKIE['cart']) OR !empty($_COOKIE['cart']) ) {
			return print_r($_COOKIE["cart"]);
		} elseif ( empty($_COOKIE['cart']) ) {
			return 'Cart Empty';
		} else {
			return NULL;
		}
	}
	
	/*
	 *  Add cart item to cart cookie 
	 */
	
	public static function addToCart( $item=0, $quantity=0 ) 
	{
		if ( !empty($item) OR !empty($quantity) ) {
			return setcookie( "cart[".$item."]", $quantity );
		} else {
			return 'Cart Empty';
		}
	}
	
	/*
	 * Empty Cart loop from array
	 */
	
	public static function emptyCart() 
	{
		if( isset($_COOKIE['cart']) OR !empty($_COOKIE['cart']) ) {
			foreach ($_COOKIE['cart'] as $key => $value) 
			{
				return setcookie ( "cart[$key]", NULL);
			}			
		} elseif ( empty($_COOKIE['cart']) ) {
			return 'Cart Empty';
		} else {
			return NULL;
		}
	}
	
	/*
	 * Delete iteam cookie set to null
	 */
	
	public static function deleteItem( $item=0 ) 
	{
		if( isset($_COOKIE['cart']) OR !empty($_COOKIE['cart']) ) {
			return setcookie ( "cart[$item]", NULL);
		} elseif ( empty($item) ) {
			return 'Cart Item Error';
		} else {
			return NULL;
		}
	}
	
	/*
	 * Overwrite array cookie
	 */
	
	public static function updateCart( $item=0, $quantity=0 ) 
	{
		if ( empty($item) || empty($quantity) ) {
			return 'Cart Item Error';
		} else {
			if ( is_array($item) && is_array($quantity) )
				foreach ($quantity as $q_key => $q_row ) {
					foreach ($item as $i_key => $i_row ) {
						return setcookie( "cart[".$i_row."]", $q_row );
					}
				}
			else return setcookie( "cart[".$item."]", $quantity );
		}
	}
	
	/*
	 * Check loop on products given
	 */
	
	public static function productsModules ( $cart=0, $products_arr=NULL) 
	{
		foreach ($products_arr as $key => $value) 
		{
			return $key;
		}			
	}
	
}
?>