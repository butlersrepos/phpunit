<?php
/**
 * Created by PhpStorm.
 * User: jsalisbury
 * Date: 11/9/2018
 * Time: 11:52 AM
 */

namespace App\Models;


class User{

    public $first_name;
    public $last_name;

    public function setFirstName($firstName){
    $this->first_name = $firstName;
}

    public function getFirstName(){
        return $this->first_name;
    }

    public function setLastName($lastName){
        $this->last_name = $lastName;
    }

    public function getLastName(){
        return $this->last_name;
    }

    public function getFullName(){
        return $this->getFirstName() . " " . $this->getLastName();
    }

    public function rollDice($numberOfDice, $diceSides, $modifier){
        $total = 0;
        for($i=1; $i<=$numberOfDice; $i++){
           $total += random_int(1, $diceSides);
        }
        return $total + $modifier;
    }

}