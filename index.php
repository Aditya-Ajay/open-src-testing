 <?php 



echo "This is the first line of php" ; 

class SayHi {

public $name ; 

public $age ; 

function __construct($name , $age){
$this->name = $name ; 
$this->age = $age ; 

}
function hiexec(){
return  "$this->name is a great guy with a age of $this->age" ; 
}

};

$aditya = new sayHi("Aditya" , 19 ) ; 

$newvar = $aditya->hiexec(); 

echo $newvar ; 
