<?php
/**
 * Created by PhpStorm.
 * User: jsalisbury
 * Date: 11/9/2018
 * Time: 11:47 AM
 */



class UserTest extends \PHPUnit_Framework_TestCase{


    public function testSetAndGetUserName(){
        $user = new \App\Models\User;

        $user->setFirstName("Billy");

        $this->assertEquals($user->getFirstName(), "Billy");
    }




}