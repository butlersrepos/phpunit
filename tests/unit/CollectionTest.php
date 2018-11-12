<?php

class CollectionTestTest extends \PHPUnit_Framework_TestCase{


    /** @test */
    public function shouldInstantiateEmptyCollection(){
        $collection = new \App\Support\Collection;

        $this->assertEmpty($collection->getItems());
    }


    /** @test */
    public function shouldReturnCorrectCountOfItemsPassedIn(){
        $collection = new \App\Support\Collection([
            'one', 'two', 'three'
        ]);

        $this->assertEquals(3, $collection->count());
    }

}