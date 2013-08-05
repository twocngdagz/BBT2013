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
 * Module for Html Utilities, see functions on
 * Public Static Functions
 */

class Html {
	
	# ID MAKER FOR HTML TAGS
	public static function idm($var) 
	{
		if(!empty($var)) {
			$idm = strtotime(date("giaFjY")).$var;
			$idm = md5($idm);
			$idm = substr($idm,0,6);
			print $idm;
		} else {
			return NULL;
		}
	}

	# RETURN HTML
	public static function p($var) 
	{
		if(!empty($var)) {
			return print(nl2br( htmlentities($var) ));
		} else {
			return NULL;
		}
	}
	
	# RETURN DEBUG
	public static function debug($var) 
	{
		if(!empty($var)) {
			$debug = "";
			$debug .= "<pre>";
			$debug .= print_r($var);
			$debug .= "</pre>";
			return $debug;		
		} else {
			return NULL;
		}
	}
	
	# RETURN DATE g:i a
	public static function datef($date) 
	{
		if(!empty($date)) {
			return print( date("D, M j",strtotime($date)) );
		} else {
			return NULL;
		}
	}
	
	# RETURN HTML
	public static function short($text, $length) 
	{
		if(strlen($text) > $length) {
			return print(nl2br( htmlentities( substr($text, 0, $length) . "..") ));
		} else {
			return print(nl2br( htmlentities($text) ));
		}
	}
		
	# REDIRECT PAGES
	public static function redirect($var) 
	{
		?><script type="text/javascript">window.location="<?php echo MCHN_ROOT . $var ?>";</script><?php
	}
	
	# SAVE IMAGE FROM URL
	public static function imageSave($url, $filename) 
	{
		$file 		= $url;
		$file 		= file_get_contents($file);
		$loc 		= MCHN_DIR_ROOT.'avatar/'.md5($filename).'.jpg';
		$handler 	= fopen($loc,'w');
	
		if(fwrite($handler,$file)==false){
		    echo 'error';
		}
		fclose($handler);
	}
	
	# RESTRICT INPUT
	public static function restrictText( $text=true ) 
	{
		if(preg_match('/[\\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $text)) {
			return false;
		} else {
			return true;
		}
	}
	
	# RESTRICT CHARACTERS
	public static function dashTextNaming($text) 
	{
		$text = str_replace(" ", "-", $text);
		return strtolower($text);
	}
	
	# ALERT TYPE
	public static function alert($type, $text = true, $headings = true) 
	{
		switch($type):
			case 'error':
				$alertType = "error";
			break;
			case 'success':
				$alertType = "success";
			break;
			case 'info':
				$alertType = "info";
			break;
			case 'warning':
				$alertType = "warning";
			break;
		endswitch;
		?>
		<div class="alert alert-block alert-<?php self::p($alertType); ?>">
		  <button type="button" class="close" data-dismiss="alert">×</button>
		  <h4><?php self::p($headings); ?></h4>
		  <?php self::p($text); ?>
		</div>
		<?php		
	}
	
	# CLEAN INPUT
	public static function cln( $text )
	{
		return trim(mysql_escape_string($text));
	}
	
}
?>