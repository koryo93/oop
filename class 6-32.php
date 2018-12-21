<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-12-21
 * Time: 오후 2:00
 */

class MyClass
{
    public $var1 = "value1";
    public $var2 = "value2";
    public $var3 = "value3";

    protected $protected = "protected var";
    private $private = "private var";

    function iterateVisible()
    {
        print "MyClass::iterateVisible:<br/>\n";
        foreach($this as $key=>$value)
        {
            print "$key=>$value<br/>\n";
        }
    }
}

$class = new MyClass();

// 접근 권한이 public 인 모든 프로퍼티를 출력한다.
foreach($class as $key=>$value)
{
    print "$key=>$value<br/>\n";
}

print "==================<br/>\n";

// interateVisible() 메소드에서 접근할 수 있는
// 모든 프로퍼티를 출력한다.
$class->iterateVisible();

/*
 * 출력결과
var1=>value1
var2=>value2
var3=>value3
==================
MyClass::iterateVisible:
var1=>value1
var2=>value2
var3=>value3
protected=>protected var
private=>private var
 */
