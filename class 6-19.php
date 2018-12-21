<?php
/**
 * Created by PhpStorm.
 * User: gre327
 * Date: 2018-12-20
 * Time: 오후 1:04
 */

// 객체 복사
class SubObject
{
    static $instances = 0;
    public $instance;

    public function __construct()
    {
        $this->instance = ++self::$instances;
    }

    public function __clone()
    {
        $this->instance = ++self::$instances;
    }
}

class MyCloneable
{
    public $object1;
    public $object2;

    function __clone()
    {
        // this->object 의 복사본을 복사한다
        // 참조를 복제하기 때문에(shallow copy) 같은 포인터를 가리키게 된다.
        $this->object1 = clone($this->object1);
    }
}

$obj = new MyCloneable();

// $instances 에 1이 증가(값: 1)
$obj->object1 = new SubObject();
// $instances 에 1이 증가(값: 2)
$obj->object2 = new SubObject();

// object1 은 다시 복제가 이루어지므로
// 1이 또 증가(값: 3)하고
// object2에 대해서는 다시 복제하지 않으므로
// 기존$instances 값을 그대로 유지(값: 2)
$obj2 = clone $obj;

print("원래 Object<br/>\n");
print_r($obj);

print"<br/>\n";

print("복제된 Object:<br/>\n");
print_r($obj2);

/*
 * 출력결과
원래 Object
MyCloneable Object ( [object1] => SubObject Object ( [instance] => 1 ) [object2] => SubObject Object ( [instance] => 2 ) )
복제된 Object:
MyCloneable Object ( [object1] => SubObject Object ( [instance] => 3 ) [object2] => SubObject Object ( [instance] => 2 ) )
 */
