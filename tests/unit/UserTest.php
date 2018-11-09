<?php
/**
 * Created by PhpStorm.
 * User: jsalisbury
 * Date: 11/9/2018
 * Time: 11:47 AM
 */



class UserTest extends \PHPUnit_Framework_TestCase{


    public function testSetAndGetUserFirstName(){
        $user = new \App\Models\User;

        $user->setFirstName("Billy");

        $this->assertEquals($user->getFirstName(), "Billy");
    }

    public function testSetAndGetUserLastName(){
        $user = new \App\Models\User;

        $user->setLastName("Smith");

        $this->assertEquals($user->getLastName(), "Smith");
    }

    public function testGetFullName(){
        $user = new \App\Models\User;

        $user->setFirstName("Jeff");
        $user->setLastName("Salisbury");

        $this->assertEquals($user->getFullName(), "Jeff Salisbury");
    }

    public function testUserRollsDice(){
        $user = new \App\Models\User;

        $result = $user->rollDice(2, 6, 2);
        echo $result;

        $this->assertGreaterThanOrEqual(4, $result);
    }

    public function testEmailGetAndSet(){
        $user = new \App\Models\User;

        $emailUnderTest = 'something@email.com';
        $user->setEmail($emailUnderTest);

        $this->assertEquals($user->getEmail(), $emailUnderTest);
    }





}