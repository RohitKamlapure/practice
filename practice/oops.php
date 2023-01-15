<!-- <?php
class class1{
    function fun1(){
        echo "func1";
    }
    function fun2(){
        echo "func2";
    }
}
$obj= new class1();
$obj-> fun1();
?> -->


<!-- <?php
class calculation{
    public $a;
    public $b;
    public $c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$r=new calculation();
$r->a=10;
$r->b=1;

$k=new calculation();
$k->a=10;
$k->b=1;
echo "sum of given number is  : ".$r->sum();

echo "<br>";
echo "<br>";

echo "sub of given number is  : ".$r->sum();
?> -->



<!-- <?php
class person{
    public $name;
    public $age;
    public $bgroup;

    function __construct($n="not known",$a="not known",$b="not known"){ //if user doesnt give parameter in below sectiom then it will take by default value like we mentioned in this line (not known)
        $this->name=$n;
        $this->age=$a;
        $this->bgroup=$b;
    }
    function show(){
       // echo $this->name . "-  " . $this->age  . "and  ". $this->bgroup;
        echo $this->name."s  " . "age is  " . $this->age . "  and blood group is  " . $this->bgroup;
    }
}
$r1=new person("rohit",22,"o+");
$r1->show();

echo "<br>";
echo "<br>";

$r2=new person();
$r2->show();

echo "<br>";
echo "<br>";

$r3=new person("vishal",24,"a+");
$r3->show();
?> -->



