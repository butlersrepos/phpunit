<?php
/**
 * Created by PhpStorm.
 * User: jsalisbury
 * Date: 11/9/2018
 * Time: 3:23 PM
 */

namespace App\Support;


class Collection{


    protected $items = [];

    public function __construct(array $items = []){
        $this->items = $items;
    }


    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    public function count(){
        return count($this->items);
    }
}