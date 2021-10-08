
<?php




//check login
// class session{

// public $user_id;
// private $signed_in;



// public __construct(){

// session_start();


// }

// private function check_login(){
// if(isset($_SESSION['user_id'])){

// $this->user_id=$_SESSION['user_id'];
// $this->signed_in=true ;


// }else{
// 	unset($this->user_id);
// 	$this->signed_in=false ;
// }



// }

// }




// class cars {

// static $wheel_count=4;
// static $door_count=4;


// static function car_detail(){
  
//   return self::$wheel_count;
//   return self::$door_count;



// }


// }
// class Trucks extends cars {
//  static function display (){


//  	echo parent::car_detail();
//  }


// }

// Trucks::display();



// class cars {



// }

// $myclasses =get_declared_classes();
// foreach ($myclasses as $class) {
// 	echo $class  . "<br>";
// }





// class MyClass {
// 	public static function callMe() {
// 		echo "Hyvor!";
// 	}
// 	public function __construct() {
// 		self::callMe();
// 	}
// }
// MyClass::callMe();
// echo "<br>";
// new MyClass();

// class Welcome {
// 	const GREET = 'Hello World';
// 	public function greet() {
// 	echo self::GREET;
// }
// }

// $welcome = new welcome ();
// $welcome->greet();

// echo "<br>";
// echo Welcome::GREET;



// class person {

// public $name ;
// public $age ;

// public function __construct ($name , $age){
// 	$this->name =$name;
// 	$this->age =$age;

// }
// public function introduce (){

// echo "my name is {$this->name} . my age is{$this->age}";


// }



// }
// class tom extends person {
// 	public $school;

// 	public function __construct($name ,$age ,$school){

// 		parent::__construct($name,$age);
// 		$this->school=$school;
// 	}
// 	public function introduce(){

// 		echo "my name is {$this->name} .myage is{$this->age}.myschoolis{$this->school}";
// 	}
// }

// $tom =new tom ('khadija',23,'faculty of engineering');
// $tom->introduce();








// class house{

// private $color ;
  
// private $allowedcolors=['black','blue','red','green'];
 
//  public function setcolor($color){

// $color =strtolower($color);
// if(in_array($color, $this->allowedcolors)){
// 	$this->color=$color;

// }

//  }
//  public function getcolor(){
// if($this->color){
// 	return $this->color ;
// }else{

// 	return 'no color is set . maybe have set color is not allowed';

// }


//  }


// }
// $house1= new house () ;
// $house1->setcolor('black');
// echo $house1->getcolor();
// echo "<br>";
// $house2= new house ();
// $house2->setcolor('yellow');
// echo $house2->getcolor();



// class House{

// public $color ;
// public function __construct($name,$color){

// 	$this->name=$name;
//     $this->color=$color;
// }

// public function __destruct(){
// 	echo "The color of the {$this -> name} is {$this -> color}";
// }


// }

// $blackhouse= new House ("khadija","black");
// $blackhouse ->echodata() ;




// $myhouse= new House();
// echo $myhouse->primarycolor ;
// echo "<br>";
// $myhouse->changecolor('white');


// echo $myhouse->primarycolor ;
// class house{
// public $oldname;
// public $color;

// public function __construct($name,$color){
	
//   $this->oldname=$name;
// $this->color=$color;
// echo "my name is {$this->oldname}and mycolor is {$this->color}";


// }



// }
// class 	Home extends house {

// public function say(){
// 	echo "welcome";
// }



// }
// $obj= new Home ("ahmed","green");
// $obj->say();
// $obj1=new house();
// $obj1->changeName("khadija]");
// echo "<br>";

// $obj2=new house();
// $obj2->changeName("sabry");
?>