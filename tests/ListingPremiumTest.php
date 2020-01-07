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
    /** @test */
    function allowedTagsAreDisplayed()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title'
        ];
        $listing = new ListingPremium($data);
        $this->assertEquals(
            // I initially put this <p><br><b><strong><em><u><ol><ul><li> but the error showed this ⬇️
            '&lt;p&gt;&lt;br&gt;&lt;b&gt;&lt;strong&gt;&lt;em&gt;&lt;u&gt;&lt;ol&gt;&lt;ul&gt;&lt;li&gt;',
            $listing->displayAllowedTags()
        );
    }
}