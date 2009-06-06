<?


DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'iims');

	if ( @$_REQUEST['method'] == 'getCat' )
	{
		$objServices = new AjaxTreeview();
		$catid = isset($_REQUEST['catid'])?$_REQUEST['catid']:0;
		$arr = $objServices->getCatList($catid);
		$arrReturn['data'] = $arr;
		$arrReturn['id'] = @$_REQUEST['id'];
		$arrReturn['value'] = $catid;
		$jsonstring = json_encode($arrReturn);
		echo $jsonstring;
	}
	
	class AjaxTreeview
	{
		public function AjaxTreeview()
		{
			// Make the connnection and then select the database.
			$dbc = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQL: ' . mysql_error() );
			mysql_select_db (DB_NAME) OR die ('Could not select the database: ' . mysql_error() );
			$this->table = "stock_department";
		}
		
		function dbConnect()
		{
			DEFINE ('LINK', mysql_connect (DB_HOST, DB_USER, DB_PASSWORD));
		}
		
		public function getCatList($catid)
		{
			$this->dbConnect();
			$query = "SELECT * FROM {$this->table} where   	stock_dept_p_id = {$catid} ORDER BY stock_dept_id asc";
			$result = mysql_db_query (DB_NAME, $query, LINK);			
			$arr = array();
			$i = 0;			
			while( $rec = mysql_fetch_array($result) )
			{
				$arr[$i]['id'] = $rec['stock_dept_id'];
				$arr[$i]['name'] = $rec['stock_dept_name'];
				$arr[$i]['pid'] = $rec['stock_dept_id'];
				$i ++ ;
			}
		return $arr;
		}
	}
?>