<?php

/**
 * Created by PhpStorm.
 * User: lihongwei
 * Date: 16/10/20
 * Time: 下午12:32
 */
use PHPUnit\Framework\TestCase;
use Api\Pay\Pay;

class PayTest extends TestCase
{
    private $attr ;

    public function setUp()
    {
        $this->attr = new Pay();
    }

    public function testPayMake(){
        $pass = md5('lhw');
        $passTwo = $this->attr->payMake('lhw');
        $this->assertEquals($pass,$passTwo);
    }

    public function testPayCheck(){
        $from = $this->attr->payMake('lhw',['salt'=>'cxx']);
        $to   = md5('lhwcxx');
        $this->assertEquals($from,$to);
    }
}