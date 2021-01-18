<?php 
 
class Paginator { 
 
     	private $_conn;
        private $_limit;
        private $_page;
        private $_query;
        private $_total;
		
	 public function __construct( $conn, $query ) {
		 
		$this->_conn = $conn;
		$this->_query = $query;
	 
		$rs= $this->_conn->query( $this->_query );
		$this->_total = $rs->num_rows;
		 
	}
	public function getData( $limit = 10, $page = 1 ) {
     
    $this->_limit   = $limit;
    $this->_page    = $page;
   
 
    if ( $this->_limit == 'all' ) {
        $query      = $this->_query;
    } else {
		$offset=( ( $this->_page - 1 ) * $this->_limit );
        $query      = $this->_query . " LIMIT " . $offset . ", $this->_limit";
    }
    $rs             = $this->_conn->query( $query );
	 
   $results=array();
    while ( $row = $rs->fetch_assoc() ) {
        $results[]  = $row;
    }
 
    $result         = new stdClass();
    $result->page   = $this->_page;
    $result->limit  = $this->_limit;
    $result->total  = $this->_total;
    $result->data   = $results;
 
    return $result;
	}
	
	public function append_existing_query_string($qstring)
	{
		if(isset($_GET))
		{
			foreach($_GET as $k=>$v)
			{
				$qstring.="&".$k."=".$v;
			}
		}
		return $qstring;
	}
	
	public function createLinks( $links, $list_class ) {
    if ( $this->_limit == 'all' ) {
        return '';
    }
 
    $last       = ceil( $this->_total / $this->_limit );
 
    $start      = ( ( $this->_page - $links ) > 0 ) ? $this->_page - $links : 1;
    $end        = ( ( $this->_page + $links ) < $last ) ? $this->_page + $links : $last;
 
    $html       = '<ul class="' . $list_class . '">';
 
    $class      = ( $this->_page == 1 ) ? "disabled" : "";
	    
	//
	$qstring='?limit=' . $this->_limit . '&page=' . ( $this->_page - 1 );
	$qstring=$this->append_existing_query_string($qstring);
	//
	
    $html       .= '<li class="' . $class . '"><a href="'.$qstring.'">&laquo;</a></li>';
 
    if ( $start > 1 ) {
		
		//
		$qstring='?limit=' . $this->_limit . '&page=1';
		$qstring=$this->append_existing_query_string($qstring);
		//
        $html   .= '<li><a href="'.$qstring.'">1</a></li>';
        $html   .= '<li class="disabled"><span>...</span></li>';
    }
 
    for ( $i = $start ; $i <= $end; $i++ ) {
        $class  = ( $this->_page == $i ) ? "active" : "";
		//
		$qstring='?limit=' . $this->_limit . '&page=' . $i;

		$qstring=$this->append_existing_query_string($qstring);
		//
        $html   .= '<li class="' . $class . '"><a href="'.$qstring.'">' . $i . '</a></li>';
    }
 
    if ( $end < $last ) {
        $html   .= '<li class="disabled"><span>...</span></li>';
		//
		$qstring='?limit=' . $this->_limit . '&page=' . $last;
		$qstring=$this->append_existing_query_string($qstring);
		//
        $html   .= '<li><a href="'.$qstring.'">' . $last . '</a></li>';
    }
 
    $class      = ( $this->_page == $last ) ? "disabled" : "";
	
	$qstring='?limit=' . $this->_limit . '&page=' . ( $this->_page + 1 );
	$qstring=$this->append_existing_query_string($qstring);
	
    $html       .= '<li class="' . $class . '"><a href="'.$qstring.'">&raquo;</a></li>';
 
    $html       .= '</ul><span style="float:right;color:blue">Total records : '.$this->_total.'</span>';
 
    return $html;
	}

}
?>