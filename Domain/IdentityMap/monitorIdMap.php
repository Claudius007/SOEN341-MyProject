<?php
class MonitorIdMap{
	private $monitorCatalog=array();

	public function __construct(){
	
	}
	
	public function add($obj){
	
		$this->monitorCatalog[]= $obj;
		print_r($this->monitorCatalog);
	
	
	}
	
	public function get($id){
		//search $laptop catalog for obj with id
		//return if found
		//return null if not found
		
		  if(in_Array($id,$this->monitorCatalog)){  
				$key=array_search($id,$this->monitorCatalog);         
				return $this->monitorCatalog[$key];
		        }
		            else{                  
					return null;                 
                }
	}
	
	
	public function delete($obj){
	
		//$this->catalog[]= array_pus
		if (($key = array_search($obj, $this->monitorCatalog)) !== false) {
			unset($this->monitorCatalog[$key]);
			}
			
		else{
		}
	}
	
}




?>