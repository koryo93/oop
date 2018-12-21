<?php
/**
 * Created by PhpStorm.
 * User: gre327
 * Date: 2018-12-20
 * Time: 오후 12:49
 */

// 메소드 오버로딩
class Caller
{
    private $m_x = array(1, 2, 3);

    function __call($m, $a)
    {
        print "Method $m called.<br/>\n";
        var_dump($a);

        return $this->m_x;
    }
}

$foo = new Caller();

// test() 메소드가 존재하지 않으므로 __call() 메소드가 호출된다.
$a = $foo->test(1, "2", 3.4, true);
print "<br/>\n";
var_dump($a);

/*
 * 출력결과
Method test called.
D:\sources\web\OOP\class 7-2.php:17:
array (size=4)
  0 => int 1
  1 => string '2' (length=1)
  2 => float 3.4
  3 => boolean true

D:\sources\web\OOP\class 7-2.php:28:
array (size=3)
  0 => int 1
  1 => int 2
  2 => int 3
 */
