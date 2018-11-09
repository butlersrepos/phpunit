<?php
/**
 * Created by PhpStorm.
 * User: jsalisbury
 * Date: 11/9/2018
 * Time: 11:47 AM
 */



class UserTest extends \PHPUnit_Framework_TestCase{

    protected $user;

    public function setUp(){
        $this->user = new \App\Models\User;
    }

    /** @test */
    public function setAndGetUserFirstName(){
        $this->user->setFirstName("Billy");

        $this->assertEquals($this->user->getFirstName(), "Billy");
    }

    /** @test */
    public function setAndGetUserLastName(){
        $this->user->setLastName("Smith");

        $this->assertEquals($this->user->getLastName(), "Smith");
    }

    /** @test */
    public function shouldGetFullName(){
        $this->user->setFirstName("Jeff");
        $this->user->setLastName("Salisbury");

        $this->assertEquals($this->user->getFullName(), "Jeff Salisbury");
    }

    public function testUserRollsDice(){
        $result = $this->user->rollDice(2, 6, 2);
        echo $result;

        $this->assertGreaterThanOrEqual(4, $result);
    }

    public function testEmailGetAndSet(){
        $emailUnderTest = 'something@email.com';
        $this->user->setEmail($emailUnderTest);

        $this->assertEquals($this->user->getEmail(), $emailUnderTest);
    }

    public function testEmailContainsCorrectValues(){
        $this->user->setFirstName("Jeff");
        $this->user->setLastName("Salisbury");
        $this->user->setEmail('something@email.com');

        $emailVariables = $this->user->getEmailVariables();

        $this->assertArrayHasKey('full_name', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);

        $this->assertEquals($emailVariables['full_name'], 'Jeff Salisbury');
        $this->assertEquals($emailVariables['email'], 'something@email.com');

    }





}