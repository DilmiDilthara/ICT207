<?php
class StudentParent {
  public $stdName;
  public $stdRegNum;

  function __construct($name, $regnum) {
    $this->name = $stdName;
    $this->regnum = $stdRegNum;
  }
  
  
}
class Studentchild{
	public $stdName;
  	public $stdRegNum;
	
    
    

  	function display() {
    echo "The Student name is {$this->name} and the Registration Number is {$this->regnum}.";
  	
  }
  
  }

$studentchild = new Studentchild("Dilmi", "064");

?>