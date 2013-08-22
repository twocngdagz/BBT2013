<?php
$host = $_SERVER['HTTP_HOST'];
if ($host == "localhost") {
    defined('DB_SERVER')    ? null : define("DB_SERVER", "localhost");
    defined('DB_USERNAME')    ? null : define("DB_USERNAME", "root");
    defined('DB_PASSWORD') ? null : define("DB_PASSWORD", "");
    defined('DB_NAME')    ? null : define("DB_NAME", "bbt2013a_site");
}   


if ($host == "bbt2013.alorit.com") {
    defined('DB_SERVER')    ? null : define("DB_SERVER", "localhost");
    defined('DB_USERNAME')    ? null : define("DB_USERNAME", "bbt2013a_website");
    defined('DB_PASSWORD') ? null : define("DB_PASSWORD", "(B+4#r&dk^KE");
    defined('DB_NAME')    ? null : define("DB_NAME", "bbt2013a_site");
}
  
if ($host == "www.babybeddingtown.com") {
    defined('DB_SERVER')    ? null : define("DB_SERVER", "localhost");
    defined('DB_USERNAME')    ? null : define("DB_USERNAME", "17670_site");
    defined('DB_PASSWORD') ? null : define("DB_PASSWORD", "nqan7sfn");
    defined('DB_NAME')    ? null : define("DB_NAME", "17670_bbt2013");
}
if ($host == "dev.babybeddingtown.com") {
    defined('DB_SERVER')    ? null : define("DB_SERVER", "localhost");
    defined('DB_USERNAME')    ? null : define("DB_USERNAME", "17670_site");
    defined('DB_PASSWORD') ? null : define("DB_PASSWORD", "nqan7sfn");
    defined('DB_NAME')    ? null : define("DB_NAME", "17670_devsite");
}
class database {
    public static $sql;

    public static function connection() {
        return mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD) or die ("<b>Connection Errors:</b>&nbsp;" . mysql_error());
    }
    
    public static function select_database() {
        return mysql_select_db(DB_NAME) or die ("<b>Connection Errors:</b>&nbsp;" . mysql_error());
    }
    
    public static function conc() {      
        $connect = self::connection();
        self::select_database();
        if($connect){ #echo "Connection Successful.";
		}
        else { echo "Connection Failed.";}
    }
    
    public static function execute_query($sql) {
        self::$sql = mysql_query($sql);                
    }
    
	public static function count_rows($sql) {
        self::$sql = mysql_query($sql);
		return mysql_num_rows(self::$sql);
	}
	
	
    public static function result() {
        return mysql_fetch_assoc(self::$sql);
    }
    
    public static function get_result(){
        $rows = array();
            while($r = @mysql_fetch_assoc(self::$sql)):
                array_push($rows,$r);
            endwhile;
        return $rows;
    }
    
    public static function debug($var) {
        $debug = "";
        $debug .= "<pre>";
            $debug .= print_r($var);
        $debug .= "</pre>";
        return $debug;
    }
    
}
?>