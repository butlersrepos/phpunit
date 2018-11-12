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

        $this->assertInstanceOf(ArrayIterator::class, $collection->getIterator());

    }

    /** @test */
    public function shouldMergeTwoCollections(){
        $collection1 = new \App\Support\Collection([
            'one', 'two', 'three'
        ]);

        $collection2 = new \App\Support\Collection([
            'four', 'five', 'six'
        ]);

        $newCollection = $collection1->getFusionDance($collection2);

        $this->assertCount(6, $newCollection->getItems());
    }

    /** @test */
    public function shouldAddOneCollectionToAnother(){
        $collection1 = new \App\Support\Collection([
            'one', 'two', 'three'
        ]);

        $collection2 = new \App\Support\Collection([
            'four', 'five', 'six'
        ]);

        $collection1->getMerge($collection2);

        $this->assertCount(6, $collection1->getItems());
    }

    /** @test */
    public function shouldReturnJsonEncodedItems(){
        $collection1 = new \App\Support\Collection([
            ['username' =>  'alex'],
            ['username' =>  'billy'],
        ]);

        $this->assertEquals('[{"username":"alex"},{"username":"billy"}]', $collection1->toJson());
    }

}