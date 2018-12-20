<?php
/**
 * Created by PhpStorm.
 * User: gre327
 * Date: 2018-12-20
 * Time: 오후 12:44
 */

// 멤버 변수 오버로딩
class Setter
{
    public $n;
    private $x = array("a"=>1, "b"=>2, "c"=>3);

    function __get($nm)
    {
        print "Getting[$nm]<br/>\n";

        if(isset($this->x[$nm]))
        {
            $r = $this->x[$nm];
            print "Returning: $r<br/>\n";

            return $r;
        }
        else
        {
            print "Nothing!<br/>\n";
        }
    }

    function __set($nm, $val)
    {
        print "Setting [$nm] to $val<br/>\n";

        if(isset($this->x[$nm]))
        {
            $this->x[$nm] = $val;
            print "OK!<br/>\n";
        }
        else
        {
            print "Not OK!<br/>\n";
        }
    }
}

$foo = new Setter();
$foo->n = 1;

// 변수 $a 가 존재하지 않으므로 __set() 메소드가 실행된다.
$foo->a = 100;

$foo->a++;
$foo->z++;

/*
 * 출력결과
Setting [a] to 100
OK!
Getting[a]
Returning: 100
Setting [a] to 101
OK!
Getting[z]
Nothing!
Setting [z] to 1
Not OK!
 */


