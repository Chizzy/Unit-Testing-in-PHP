<?php

use PHPUnit\Framework\TestCase;

class ListingFeaturedTest extends TestCase
{
    /** @test */
    function hasFeaturedStatus()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title'
        ];
        $listing = new ListingFeatured($data);
        $this->assertEquals('featured', $listing->getStatus());
    }
    /** @test */
    function hasCoc()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'coc' => 'Test Code of Conduct for Featured Listing'
        ];
        $listing = new ListingFeatured($data);
        $this->assertEquals($data['coc'], $listing->getCoc());
    }
}