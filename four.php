<?php
/**
 * Created by PhpStorm.
 * User: 黑山老妖
 * Date: 2018/11/5
 * Time: 9:50
 */
interface Walk{
    public function go($a);
}
class Person{
    var $name;
    var $age;
}
class Student extends Person implements Walk{
    public function __construct($a,$b){
        $this->name = $a;
        $this->age = $b;
    }
    public function go($a){
        echo $this->name."的年龄是".$this->age."岁，今天走了".$a."米";
    }
}
$a = new Student('黑山老妖','3000');
$a->go(3000);
$b = new Student('聂小倩','880');
$b->go(2200);
$c = new Student('姥姥','1350');
$c->go(800);
$arr = array("$a->age"=>$a->name,"$b->age"=>$b->name,"$c->age"=>$c->name,);
krsort($arr);
echo "<br>";
echo "<pre>";
foreach($arr as $key =>$val){
    echo "年龄最大的是".$val;die;
}