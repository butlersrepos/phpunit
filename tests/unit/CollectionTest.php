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

    /** @test */
    public function collectionShouldBeInstanceOfIteratorAggregate(){
        $collection = new \App\Support\Collection();

        $this->assertInstanceOf(IteratorAggregate::class, $collection);
    }

    /** @test */
    public function shouldIterateTheCollection(){
        $collection = new \App\Support\Collection([
            'one', 'two', 'three'
        ]);

        $items = [];

        foreach ($collection as $item){
            $items[] = $item;
        }

        $this->assertCount(3, $items);



    }
}