<?php
/**
 * Created by PhpStorm.
 * User: jsalisbury
 * Date: 11/9/2018
 * Time: 3:23 PM
 */

namespace App\Support;


class Collection implements \IteratorAggregate {


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

    public function getIterator(){
        return new \ArrayIterator($this->items);
    }

    public function getFusionDance(Collection $withCollection){
        return new Collection(array_merge($this->getItems(), $withCollection->getItems()));
    }

    public function add(array $items){
        $this->items = array_merge($this->items, $items);
    }

    public function getMerge(Collection $addCollection){
        return $this->add($addCollection->getItems());
    }

    public function toJson(){
        return json_encode($this->items);
    }

    /**
     * @param array $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }
}