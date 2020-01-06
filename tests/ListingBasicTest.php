<?php

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{
    /** @test */
    function cannotBeCreatedWithoutData()
    {
        $this->expectExceptionMessage('Unable to create a listing, data unavailable');
        $listing = new ListingBasic();
    }
    /** @test */
    function cannotBeCreatedWithoutId()
    {
        $this->expectExceptionMessage('Unable to create a listing, invalid id');
        $listing = new ListingBasic(['id']);
    }
    /** @test */
    function cannotBeCreatedWithoutTitle()
    {
        $this->expectExceptionMessage('Unable to create a listing, invalid title');
        $listing = new ListingBasic(['id' => 1]);
    }
}