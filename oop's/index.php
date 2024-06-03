<?php

//echo phpinfo();

// Class and Object

//class Student{
//    public $name = "Varshitha";
//    public $age = 20;
//
//    public function namefunction(){
//        return $this->name;
//        echo "<br>";
//        return $this->age;
//    }
//}
//$a = new Student();
//echo "<pre>";
//var_dump($a) ;

//-----output----
//object(Student)#1 (2) {
//["name"]=>
//  string(9) "Varshitha"
//["age"]=>
//  int(20)
//}

//-----------------------------------------------

//class Student{
//    public $name = "Varshitha";
//    public $age = 20 + 30;
//
//    public function newAge(){
//        return $this->age;
//    }
//}
//$a = new Student();
//echo "<pre>";
//var_dump($a) ;

//-----output-----
//object(Student)#1 (2) {
//["name"]=>
//  string(9) "Varshitha"
//["age"]=>
//  int(50)
//}

//--------------------------------------

//class Student{
//    public $name;
//    public $age = 20 + 30;
//
//    public function newAge($name){
//        return $this->name = $name;
//    }
//}
//$a = new Student();
//$a->newAge("varshitha");
//echo "<pre>";
//var_dump($a) ;

//---output----

//object(Student)#1 (2) {
//["name"]=>
//  string(9) "varshitha"
//["age"]=>
//  int(50)
//}

//------------------------------------------

//class Student{
//    public $name;
//    public $age;
//
//    public function newAge($name){
//        return $this->name = $name;
//    }
//    public function age($age){
//        return $this->age=$age;
//    }
//}
//$a = new Student();
//$a->newAge("varshitha");
//$a->age(20);
//echo "<pre>";
////print_r($a);
//var_dump($a) ;

//----output-----

//object(Student)#1 (2) {
//["name"]=>
//  string(9) "varshitha"
//["age"]=>
//  int(20)
//}

//------------------------------------------------

//set_name() and get_name()

//class Fruit {
//    // Properties
//    public $name;
//    public $color = "white";
//    // Methods
//    function set_name($name) {
//        $this->name = $name;
//    }
//    function get_name() {
//        return $this->name;
//    }
//}
//$a = new Fruit();
//$a->set_name("Kiwi");
//echo "<pre>";
//echo $a->get_name(); //Kiwi
//echo "<br>";
//print_r($a->get_name());//Kiwi
//echo "<br>";
//print_r($a);

////----output-----
////Fruit Object
////(
////[name] => Kiwi
////[color] => white
////)
//echo "<br>";

//-------------------------------------

//class Fruit {
//    // Properties
//    public $name;
//    public $color;
//    // Methods
//    function set_name($name) {
//        $this->name = $name;
//    }
//    function get_name() {
//        return $this->name;
//    }
//}
//$apple = new Fruit();
//$banana = new Fruit();
//$apple->set_name('Apple');
//$banana->set_name('Banana');
//echo $apple->get_name(); //Apple
//echo "<br>";
//echo $banana->get_name(); //Banana

//--------------------------------------

//class Fruit {
//    // Properties
//    public $name;
//    public $color;
//    // Methods
//    function set_name($name) {
//        $this->name = $name;
//    }
//    function get_name() {
//        return $this->name;
//    }
//    function set_color($color) {
//        $this->color = $color;
//    }
//    function get_color() {
//        return $this->color;
//    }
//}
//$apple = new Fruit();
//$apple->set_name('Apple');
//$apple->set_color('Red');
//echo "Name: " . $apple->get_name(); //Name: Apple
//echo "<br>";
//echo "Color: " . $apple->get_color(); //Color: Red

//------------------------------------------------------

//class Fruit {
//    public $name;
//    function set_name($name) {
//        $this->name = $name;
//    }
//}
//$apple = new Fruit();
//$apple->set_name("Apple");
//echo $apple->name; //Apple

//-------------------------------------------------------

//class Fruit {
//    public $name;
//}
//$apple = new Fruit();
//$apple->name = "Apple";
//echo $apple->name; //Apple

//--------------------------------------------------------

//class Fruit {
//    // Properties
//    public $name;
//    public $color;
//    // Methods
//    function set_name($name) {
//        $this->name = $name;
//    }
//    function get_name() {
//        return $this->name;
//    }
//}
//$apple = new Fruit();
//var_dump($apple instanceof Fruit); //bool(true)

//-----------------------------------------

//__constructor()

//class Fruit {
//    public $name;
//    public $color;
//    function __construct($name) {
//        $this->name = $name;
//    }
//    function get_name() {
//        return $this->name;
//    }
//}
//$apple = new Fruit("Apple");
//echo $apple->get_name(); //Apple

//---------------------------------------

//class Fruit {
//    public $name;
//    public $color;
//    function __construct($name, $color) {
//        $this->name = $name;
//        $this->color = $color;
//    }
//    function get_name() {
//        return $this->name;
//    }
//    function get_color() {
//        return $this->color;
//    }
//}
//$apple = new Fruit("Apple", "red");
//echo $apple->get_name(); //Apple
//echo "<br>";
//echo $apple->get_color(); //red

//--------------------------------------

//__destructor()

//class Fruit {
//    public $name;
//    public $color;
//    function __construct($name) {
//        $this->name = $name;
//    }
//    function __destruct() {
//        echo "The fruit is {$this->name}.";
//    }
//}
//$apple = new Fruit("Apple"); //The fruit is Apple

//--------------------------------------------

//class Fruit {
//    // Properties
//    var $name;
//    var $color;
//    // Methods
//    function __construct($name, $color) {
//        $this->name = $name;
//        $this->color = $color;
//    }
//    function __destruct() {
//        echo "The fruit is {$this->name} and the color is {$this->color}.";
//    }
//}
//$apple = new Fruit("Apple", "red"); //The fruit is Apple and the color is red.

//---------------------------------------------

//Access Modifier

//public, private, protected

//class Fruit {
//    public $name;
//    protected $color;
//    private $weight;
//}
//$mango = new Fruit();
//$mango->name = 'Mango'; // OK
//$mango->color = 'Yellow'; // ERROR
//$mango->weight = '300'; // ERROR

//-----------------------------------

//class Fruit {
//    public $name;
//    public $color;
//    public $weight;
//
//    function set_name($n) {  // a public function (default)
//        $this->name = $n;
//    }
//    protected function set_color($n) { // a protected function
//        $this->color = $n;
//    }
//    private function set_weight($n) { // a private function
//        $this->weight = $n;
//    }
//}
//$mango = new Fruit();
//$mango->set_name('Mango'); // OK
//$mango->set_color('Yellow'); // ERROR
//$mango->set_weight('300'); // ERROR

//=======================================================================================

//$x = "def";
//$$x = 200;
//echo $x;
//echo $$x;
//echo $def;

//$x="U.P";
//$$x="Lucknow";
//echo $x;
//echo $$x;
//echo "Capital of $x is " . $$x;

//$name="Cat";
//${$name}="Dog";
//${${$name}}="Monkey";
//echo $name;
//echo ${$name};
//echo $Cat;
//echo ${${$name}};
//echo $Dog;






//======================================================================================================================

//echo "Rasmus is { $rasmus->age } years old. \n";
//$rasmus->birthday();
//$rasmus->setAge(21);


//echo phpinfo();

//$f = new Person("Fred", 35);
//$b = $f; // $b and $f point at same object
//$b->set_name("Barney");
//printf("%s and %s are best friends.\n", $b->get_name(), $f->get_name());

//class HTMLStuff
//{
//    static function startTable()
//    {
//        echo "<table border=\"1\">\n";
//        echo "hi";
//    }
//    static function endTable()
//    {
//        echo "</table>\n";
//    }
//}
//HTMLStuff::startTable();
//// print HTML table rows and columns
//HTMLStuff::endTable();


//class Person
//{
//    public $age;
//    public function __construct()
//    {
//        $this->age = 10;
//    }
//    public function incrementAge()
//    {
//        $this->age += 1;
//        $this->ageChanged();
//    }
//    protected function decrementAge()
//    {
//        $this->age -= 1;
//        $this->ageChanged();
//}
//    private function ageChanged()
//    {
//        echo "Age changed to {$this->age}";
//    }
//}
//class SupernaturalPerson
//{
//    public function incrementAge()
//    {
//// ages in reverse
//       $this->decrementAge();
//    }
//}$person = new Person;
//$person->incrementAge();
//$person->decrementAge();  // not allowed
//$person->ageChanged();  // also not allowed
//$person = new SupernaturalPerson;
//$person->incrementAge(); // calls decrementAge under the hood $$$$$

//$length = strlen("PHP");
//echo $length;
//$result = sin(asin(1));
//echo $result;

//function strcat($left, $right)
//{
//    return $left . $right;
//}
//$first = "This is a ";
//$second = " complete sentence!";
//echo strcat($first, $second);

//function doubler($value)
//{
//    return $value << 1;
//}
//echo "A pair of 13s is " . doubler(13);

//function outer ($a)
//{
//    function inner ($b)
//    {
//        echo "there $b";
//    }
//    echo "$a, hello ";
//}
//// outputs "well, hello there reader"
//outer("well");
//inner("reader");

//$a = 3;
//function foo()
//{
//    $a += 2;
//}
//foo();
//echo $a; //3

//function updateCounter()
//{
//    global $counter;
//    $counter++;
//}
//$counter = 10;
//updateCounter();
//echo $counter;  // 11

//function updateCounter()
//{
//    $GLOBALS[counter] ++;
//}
//$counter = 10;
//updateCounter();
//echo $counter;

//function updateCounter()
//{
//    static $counter = 0;
//    $counter++;
//    echo "Static counter is now {$counter}\n";}
//$counter = 10;
//updateCounter();
//updateCounter();
//echo "Global counter is {$counter}\n";

//class Person
//{
//    static $global = 23;
//}
//$localCopy = Person::$global;
//echo $localCopy;


//class Person{
//    public function __get($property)
//    {
//        if ($property === 'biography') {
//            $biography = "long text here..."; // would retrieve from database
//            return $biography;
//        }
//    }
//    public function __set($property, $value)
//    {
//        if ($property === 'biography') {
//// set the value in the database
//        }
//    }
//}

//class Car
//{
//    public static function model()
//    {
//        self::getModel();
//    }
//    protected static function getModel()
//    {
//        echo "I am a Car!";
//    }
//}
//class Mercedes extends Car
//{
//    protected static function getModel()
//    {
//        echo "I am a Mercedes!";
//    }
//}
//Car::model();
//echo("\n");
//Mercedes::model();


//interface Printable
//{
//    function printOutput();
//}
//class ImageComponent implements Printable
//{
//    function printOutput()
//    {
//        echo "Printing an image...";
//    }
//}


//class PaymentMethod
//{
//    const TYPE_CREDITCARD = 0;
//    const TYPE_CASH = 1;
//}
//echo PaymentMethod::TYPE_CREDITCARD;  //0
//echo PaymentMethod::TYPE_CASH;  //1

//class Person
//{
//    public $name, $address, $age;
//}class Employee extends Person
//{
//    public $position, $salary;
//}
//$a = new Employee();
//echo $a->position = "developer";
//echo $a->name = "varshitha";
//echo $a->age = 20;
//echo $a->address = "Madurai";










