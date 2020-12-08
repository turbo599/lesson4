<?php

// class A
// {
	// public $str = 'свойство';
	// protected $int = 10;
	// private $private = 'Dont touch';
	
	// public function getPrivate()
	// { 
		// return $this->private;
	// }
	
	// public function setPrivate($str)
	// {
		// $this->private=$str;
	// }
	
// }

// $objA = new A;
// $objB = new A;
// var_export ($objA);
// echo '<br>';
// var_export ($objB);

// $objA->str;
// var_export($objA->str);

// *$objA->private;
// var_export ($objA->getPrivate());
// $objA->setPrivate('Newstr');
// var_export ($objA->getPrivate());

// var_export ($objB->getPrivate());
// echo '<br>';
// class C extends A
// {
	// public function getInt()
	// {
		// return $this->int;
	// }	
	// protected $private = 20;	
// }
// $objC = new C;
// var_export ($objC->getInt());

// class D extends C
// {
	// public function getPrivate()
	// { 
		// return $this->private;
	// }	
// }
// echo '<br>';
// $objD = new D;
// var_export ($objD);


class F 
{
	parent $a = 10;
	parent $b = 20;
	public function getPrivate()
	{ 
		return $this->private;
	}
	
	public function setPrivate($str)
	{
		$this->private=$str;
	}
	
}
$objF = new F;
var_export ($objF);

class child extends F
{
  $sum = $a+b;
  return $sum;

}

















