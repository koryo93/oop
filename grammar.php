<?php
/**
 * Created by PhpStorm.
 * User: gre327
 * Date: 2018-12-19
 * Time: 오후 4:57
 */

// 변수의 범위 지정
$name = "newValue";
$newValue = 25;

print $$name ."<br>";       // 25
print "$$name" ."<br>";     // $newValue
print "${$name}" ."<br>";   // 25
print "{$$name}" ."<br>";   // 25

// 상수 사용
define("USER_NAME", "kimho");
print USER_NAME ."<br>";

// constant() 함수
function getServerConfig($value)
{
    return constant("SERVER_".$value);
}

define("SERVER_NAME", "localhost");
define("SERVER_IP", "8.8.8.8");
define("SERVER_OS", "Windows");

print getServerConfig("NAME"); // localhost가 출력된다.

