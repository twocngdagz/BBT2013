<?php
class database {
    public static $sql;
    /*
    private static $server   = 'localhost';
    private static $username = '17670_site';
    private static $password = 'nqan7sfn';
    private static $database = '17670_devsite';	
    */   
   
	
    private static $server 	 = 'localhost';
	private static $username = 'root';
	private static $password = '';
	private static $database = 'bbt2013a_site';
	

    public static function connection($server,$username,$password) {
        return mysql_connect($server,$username,$password) or die ("<b>Connection Errors:</b>&nbsp;" . mysql_error());
    }
    
    public static function select_database($database) {
        return mysql_select_db($database) or die ("<b>Connection Errors:</b>&nbsp;" . mysql_error());
    }
    
    public static function conc() {      
        $connect = self::connection(self::$server, self::$username, self::$password);
        self::select_database(self::$database);
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
