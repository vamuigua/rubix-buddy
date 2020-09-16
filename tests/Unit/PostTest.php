<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Post;

class PostTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Creates a new post
     * @return post
     */
    public function createPost()
    {
        // Create a new post
        $post = Post::create([
            'title' => 'Joll of Rice',
            'description' => 'Parboil rice, get pepper and mix, and some spice and serve!'
        ]);

        $post->save();

        return $post;
    }

    /**
     * Test the Post index route
     *
     * @return void
     */
    public function testReturningAllPosts()
    {
        // Create a new recipe
        $this->createPost();

        // get all posts
        $posts = Post::all();

        // Assert the count is 1 and its the correct post
        $this->assertEquals(1, count($posts));
    }

    /**
     * Test Creates a new post
     * @return void
     */
    public function testCreatePostAndSaves()
    {
        // Create a new post, retrieve saved post and assert the post was added
        $this->createPost();
        $post = Post::where('title', 'Joll of Rice')->first();
        $this->assertEquals('Joll of Rice', $post->title);
        $this->assertEquals('Parboil rice, get pepper and mix, and some spice and serve!', $post->description);
    }
}
