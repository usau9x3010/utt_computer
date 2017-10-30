<?php 
 /**
 * 
 */
 class Connect 
 {
 	public $_host='localhost';
 	public $_user='root';
 	public $_pass='';
 	public $_db='utt_computer';
 	public $_cnn;

 	function __construct()
 	{
 		$this->_cnn =  new mysqli($this->_host,$this->_user,$this->_pass,$this->_db);
 	}
 	function insert($table,$data){
 		$sql  = "INSERT INTO `{$table}`";
 		$col = array();
 		$vcol =array();
 		foreach ($data as $key => $value) {
 			$col[] = "`".$key."`";
 			$vcol[] = "N'".$value."'";
 		}
 		$col = "(" .implode(",", $col) . ")";
 		$vcol = "(" .implode(",", $vcol) . ")";
 		$sql .=$col . " VALUE " . $vcol;
 		$query = $this->_cnn->query($sql);
 		if (!$query) {
 			echo mysqli_error();
 		}
 	}
 	function update($table,$data_update,$conditions){
 		$sql = "UPDATE `{$table}` SET ";
 		$data_update_col = array();
 		foreach ($data_update as $key => $value) {
 			$data_update_col[] = "`".$key."`=N'".$value."'";
 		}
 		$data_update_col =implode(",", $data_update_col);
 		$sql.=$data_update_col." WHERE ".$conditions;
 		$query = $this->_cnn->query($sql);
 		if (!$query) {
 			echo mysqli_error();
 		}
 	}
	 function delete($table,$condition){
	 	$sql ="DELETE FROM `{$table}` WHERE ".$condition;
	 	$query = $this->_cnn->query($sql);
		if (!$query) {
			echo mysqli_error();
		}
	 }
}