<?php

use PHPUnit\Framework\TestCase;

class ListingPremiumTest extends TestCase
{
    /** @test */
    function hasPremiumStatus()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title'
        ];
        $listing = new ListingPremium($data);
        $this->assertEquals('premium', $listing->getStatus());
    }
    /** @test */
    function hasDescription()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'description' => 'Test Description for Premium Listing'
        ];
        $listing = new ListingPremium($data);
        $this->assertEquals($data['description'], $listing->getDescription());
    }
}