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
 * Module for Imaging, see functions on
 * Public Static Functions
 */

class Image {
	# RESTRICT CHARACTERS
	public static function imageRestrictChars($text) 
	{
		$text = trim($text);
		$text = mysql_escape_string($text);
		$text = preg_replace('/[\~`\!@#\$%\^&\*\(\)_+=\{\}\|;:"\<\>?]/','', $text);
		$text = str_replace(" ", "-", $text);
		return strtolower($text);
	}
	
	# RESTRICT CHARACTERS
	public static function imageFileNaming($text) 
	{
		$text = str_replace("-", " ", $text);
		return strtolower($text);
	}
	
	# CREATE SUB FOLDER
	public static function imageDirectory($text, $dir=NULL) 
	{
		$text = substr( sha1(self::imageRestrictChars($text) ), 1, 3);
		if( !is_dir("images/".$dir."/".$text) ) {
			mkdir("images/".$dir."/".$text, 0755, true);
			chmod("images/".$dir."/".$text, 0755);
			$dir = "images/".$dir."/".$text."/";
		} else {
			$dir = "images/".$dir."/".$text."/";
		}
		return $dir;
	}
	
	# IMAGE UPLOADER WITH BORDER RADIUS
	public static function imageUpload($dir=NULL, $image, $name=NULL, $radius=10) 
	{
		if( file_exists($dir . $image) ) {
		  #html::alert("warning", "File ".$_FILES[$name]["name"]." already exists. Please see {$dir}{$image}", "File Server Exists");	
		} else {
		  $image = self::imageRestrictChars($_FILES[$name]["name"]);
		  move_uploaded_file($_FILES[$name]["tmp_name"], $dir . $image);
			$thumb1  = new thumbnails($dir . $image);
			$thumb1->round($radius, thumbnails::colorHex('#ffffff'), thumbnails::ALL)->save($dir . $image);
		}
	}
	
}

?>
