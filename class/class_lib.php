<?php

       class person {
		   var $name;
		           public $height;
				   protected $social_insurance;
				   private $pinn_number;
		 
		   function __construct($persons_name) {
			      $this->name = $persons_name;
		   }
		   
		   function set_name($new_name){
			      if ($new_name != "Jimmy Two Guns") {
    					$this->name= strtoupper($new_name);
	                    }
						else  {
							$this->name = $new_name;
						}
		   }
           	   
	       function get_name() {
			      return $this->name;
		   }
		  
		   private function get_pinn_number(){
			      return
				  $this->pinn_number;
		   }
	  }
class employee extends person 
{            
           function set_name($new_name){
			      if ($new_name == "anthony cabrera") {
					    $this->name= $new_name;
				  }		
				  else  {
					    person::set_name($new_name);
				  } 		
				  
		   } 
           function __construct($employee_name){
			     $this->set_name($employee_name);
		   }
}
/*		 
class person 
	{
		// explicitly adding class properties are optional - but 
		// is good practice
		var $name;	 
		
		function __construct($persons_name) {
			$this->name = $persons_name;
		 }
       
		 public function get_name() {
		 	return $this->name;
		 }
 
		 // protected methods and properties restrict access to 
		 // those elements.
        protected function set_name($new_name) {
		 	 if ($this->name !=  "Jimmy Two Guns") {
		 	 	$this->name = strtoupper($new_name);
		 	 } 
		}
	} 
 
	// 'extends' is the keyword that enables inheritance
	class employee extends person 
	{
    protected function set_name($new_name) {
		if ($new_name ==  "Stefan Sucks") {
			$this->name = $new_name;
		}
	 	else if ($new_name ==  "anthony cabrera") {
			person::set_name($new_name);
		} 
	}
 
	function __construct($employee_name) 
	{
		$this->set_name($employee_name);
	}
}
*/
?>	   
