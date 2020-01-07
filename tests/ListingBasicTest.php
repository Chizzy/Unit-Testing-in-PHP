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
    /** @test */
    function canBeCreatedWithIdAndTitle()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title'
        ];
        $listing = new ListingBasic($data);
        $this->assertInstanceOf('ListingBasic', $listing);
    }
    /** @test */
    function hasBasicStatus()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title'
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals('basic', $listing->getStatus());
    }
    /** @test */
    function hasId()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title'
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals(1, $listing->getId());
    }
    /** @test */
    function hasTitle()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title'
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals('Test Title', $listing->getTitle());
    }
    /** @test */
    function hasWebsite()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'website' => 'http://testwebsite.com'
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals('http://testwebsite.com', $listing->getWebsite());
    }
    /** @test */
    function hasEmail()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'email' => 'test@email.com'
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals('test@email.com', $listing->getEmail());
    }
    /** @test */
    function hasTwitter()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'twitter' => '@test'
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals('test', $listing->getTwitter());
    }
    /** @test */
    function createdListingBecomesValidArray()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'website' => 'http://testwebsite.com',
            'email' => 'test@email.com',
            'twitter' => '@test'
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals(
            [
                'id' => '1',
                'title' => 'Test Title',
                'website' => 'http://testwebsite.com',
                'email' => 'test@email.com',
                'twitter' => 'test',
                'status' => 'basic'
            ],
            $listing->toArray()
        );
    }
}