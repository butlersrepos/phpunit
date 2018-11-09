<?php
/**
 * Created by PhpStorm.
 * User: jsalisbury
 * Date: 11/9/2018
 * Time: 11:47 AM
 */



class UserTest extends \PHPUnit_Framework_TestCase{


    protected function getUserModel(){

    }

    /** @test */
    public function setAndGetUserFirstName(){
        $user = new \App\Models\User;

        $user->setFirstName("Billy");

        $this->assertEquals($user->getFirstName(), "Billy");
    }

    /** @test */
    public function setAndGetUserLastName(){
        $user = new \App\Models\User;

        $user->setLastName("Smith");

        $this->assertEquals($user->getLastName(), "Smith");
    }

    /** @test */
    public function shouldGetFullName(){
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

    public function testEmailContainsCorrectValues(){
        $user = new \App\Models\User;

        $user->setFirstName("Jeff");
        $user->setLastName("Salisbury");
        $user->setEmail('something@email.com');

        $emailVariables = $user->getEmailVariables();

        $this->assertArrayHasKey('full_name', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);

        $this->assertEquals($emailVariables['full_name'], 'Jeff Salisbury');
        $this->assertEquals($emailVariables['email'], 'something@email.com');

    }





}