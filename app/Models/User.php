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

    public function setFirstName($firstName){
        $this->first_name = $firstName;
    }

    public function getFirstName(){
        return $this->first_name;
    }

}