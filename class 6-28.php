<?php
/**
 * Created by PhpStorm.
 * User: gre327
 * Date: 2018-12-20
 * Time: 오후 1:34
 */

class Circle
{
    function draw()
    {
        print "Circle\n";
    }
}

class Square
{
    function draw()
    {
        print "Square\n";
    }
}

function ShapeFactoryMethod($shape)
{
    switch($shape)
    {
        case "Circle" :
            return new Circle();
            break;
        case "Square" :
            return new Square();
    }
}

// 변환된 객체로부터 메소드에 접근한다.
ShapeFactoryMethod("Circle")->draw();
ShapeFactoryMethod("Square")->draw();
