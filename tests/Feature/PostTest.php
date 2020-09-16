<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * Test Home page.
     *
     * @return void
     */
    public function testHomePage()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /**
     * Test Posts page.
     *
     * @return void
     */
    public function testPostsPage()
    {
        $response = $this->get('/posts');
        $response->assertStatus(200);
    }
}
