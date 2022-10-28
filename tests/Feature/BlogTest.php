<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BlogTest extends TestCase
{
    private $post;

    protected function setUp(): void
    {
        parent::setUp();
        $this->post = Post::first();
        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function test_blogs_exists()
    {
        $this->assertDatabaseCount('posts', 100);
    }


    /**
     * @test
     */
    public function test_blog_can_be_viewed()
    {
        $response = $this->get('/blog/'.$this->post->id);
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function test_blog_has_title()
    {
        $response = $this->get('/blog/'.$this->post->id);
        $response
            ->assertViewIs('blog.show')
            ->assertSee($this->post->title)
            ->assertSee($this->post->body)
            ->assertSee($this->post->user->name)
            ->assertSee($this->post->created_at);

    }




}
