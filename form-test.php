<?php
	/*// print_r($_GET);
	echo _LINE_;
	echo _FILE_;
	echo _DIR_;
	echo _FUNCTION_;
	echo _CLASS_;
	echo _METHOD_;
	*/
	echo "Hello World";
	echo "</br>";
	function longdate($timestamp){
		return date("F jS Y",$timestamp);
	}
	echo longdate(time());
	echo "</br>";
	//7days ago
	echo longdate(time()-7*24*60*60);
	echo "</br>";

	echo "a:[".(20>9)."]<br/>";
	echo "b:[".(5==6)."]<br/>";

	//function 
	echo fix_names("WILLIAM","henry","gatES");
	echo "</br>";

	function fix_names($n1,$n2,$n3){
		$n1=ucfirst(strtolower($n1));
		$n2=ucfirst(strtolower($n2));
		$n3=ucfirst(strtolower($n3));
		return $n1." ".$n2." ".$n3;
	}
	echo phpversion();
	echo "</br>";

	$object=new User;
	print_r($object);echo "<br/>";
	$object->name="Joe";
	$object->password="mypass";
	print_r($object);echo "<br/>";

	$object->save_user();
	class User{
		public $name,$password;
		function save_user(){
			echo "Save User code goes here";
		}
	}

	$temp=new Test();
	echo "Test A: ".Test::$static_property."<br/>";
	echo "Test B: ".$temp->get_sp()."<br/>";
	echo "Test C: ".$temp->static_property."<br/>" ;

	class Test{
		static $static_property="I am static";
		function get_sp(){
			return self::$static_property;
		}
	}

	$object1=new Subscriber;
	$object1->name="Kelvin";
	$object1->password="Password";
	$object1->phone="010 203902929";
	$object1->email="0101010@qq.com";
	$object1->display();

	class User1{
		public $name,$password;
		function save_user(){
			echo "Save User code goes here.";
		}
	}
	class Subscriber extends User{
		public $phone,$email;
		function display(){
			echo "Name : ".$this->name."<br/>";
			echo "Pass : ".$this->password."<br/>";
			echo "Phone : ".$this->phone."<br/>";
			echo "Email : ".$this->email."<br/>";
		}
	}


	$object2=new Tiger();
	echo "Tigers have...<br/>";
	echo "Fur : ".$object2->fur."<br/>";
	echo "stripes : ".$object2->stripes."<br/>";

	class Wildcat{
		public $fur;
		function __construct(){
			$this->fur="TRUE";
		}
	}
	class Tiger extends Wildcat{
		public $stripes;
		function __construct(){
			parent::__construct();
			$this->stripes="TRUE";
		}
	}

	printf("<font color='#%X%X%X'>Hello</font>",64,127,255);
	echo "<br/>";
	if(file_exists("filetest.txt")){
		echo "File exits";
	}else{
		echo "File does not exits";
	}
?>
